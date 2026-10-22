<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Company;
use Illuminate\Support\Facades\Mail;
use App\Mail\loginLinkMail;
use App\Http\Controllers\JwtController;
class CompanyController extends Controller
{
    private $formdata;
    private $tmpPass = "rebfhyr748bn4r9835r78T33428dshlfgiwenq2ce3920(A2783kfghgolfa89793083*)(#W)";
    private $tmpLen;
    private $randomNum;
    private $Pass=[];
    private $finalPass;
    private $cmp_slug;
    private $hostName;
    private $loginLink;
    private $newcmp;
    private $founderEmail;
    private $errorMessage;
    private $uniqueMap;
    private $fieldColumn;

    public function createCompany(Request $request){

      try {
              $this->formdata = $request->all();
              // print_r($this->formdata);
              $this->tmpLen = strlen($this->tmpPass)-1;
              for($i=0;$i<6;$i++){
               $this->randomNum = rand(0,$this->tmpLen);
               $this->Pass[] = $this->tmpPass[$this->randomNum];
              }
              $this->finalPass = implode($this->Pass);
              // print_r($this->formdata['company_name']);
              $this->cmp_slug = preg_replace('/\s+/', '-', $this->formdata['company_name']);
              $this->hostName = $request->getSchemeAndHttpHost();
              // print_r($this->hostName);
              $this->loginLink = $this->hostName."/".$this->cmp_slug;
              // print_r($this->loginLink);
              $this->founderEmail = $this->formdata['founder_email'];
              // print_r($this->founderEmail);
              $this->formdata['login_link'] = $this->loginLink;
              $this->formdata['password'] = md5($this->finalPass);
              $this->formdata['company_slug'] = $this->cmp_slug;
              // print_r($this->formdata);
              $this->newcmp = new Company($this->formdata);
              $this->newcmp->save();
              Mail::to($this->founderEmail)->send(new loginLinkMail($this->founderEmail,$this->finalPass,$this->loginLink));
              return Response()->json(["msg"=>"company created"],200);
      } catch (\Exception $e) {

        $this->errorMessage = $e->getMessage();
        // echo $e->getCode();
        if($e->errorInfo[1]==1062){
          $this->uniqueMap = [
            'companies_company_email_unique' => "companyEmail",
            'companies_company_mobile_unique' => "companyMobile",
            'companies_company_website_unique' => "companyWebsite",
            'companies_founder_email_unique' => "founderEmail",
            'companies_founder_mobile_unique' => "founderMobile",
            'companies_whatsapp_number_unique' => "whatsapp"
          ];

          $this->fieldColumn = 'field';

          foreach($this->uniqueMap as $this->constraint => $this->column){
            if(str_contains($this->errorMessage,$this->constraint)){
              $this->fieldColumn = $this->column;
              break;
            }
          }

          return Response()->json(['msg'=>"duplicate entry","column"=>$this->fieldColumn],409);
        }
      }

    }


    private $cmpData;
    public function verifyCompany($cmpName){
    $this->cmpData = Company::where(['company_slug'=>$cmpName])->get();
    if(count($this->cmpData)==0){
      return redirect("company/not-found");
     } else {
        return view("login");
     }
    }

    private $loginForm;
    private $loginEmail;
    private $loginPassword;
    private $loginData;
    private $jwtObj;
    private $payload;
    private $token;
    public function loginCompany(Request $request){
      $this->loginForm = $request->all();
      $this->loginEmail = $this->loginForm['email'];
      $this->loginPassword  = md5($this->loginForm['password']);
      $this->loginData = Company::where([
        "founder_email"=> $this->loginEmail,
        "password"=>$this->loginPassword
        ])->get();
        foreach ($this->loginData as $key => $value) {
          $this->payload = [
            "id" => $value['id'],
            "email" => $this->loginEmail,
            "iat" => time(),
            "exp" => time()+3600
          ];
        }
      if(count($this->loginData)>0){
        $this->jwtObj = new JwtController();
        $this->token = $this->jwtObj->createToken($this->payload);
        return Response()->json(['msg'=>"login success","token"=>$this->token],200);
      } else {
        return Response()->json(['msg'=>"login failed"],401);
      }
    }
}
