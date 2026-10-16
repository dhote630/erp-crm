<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Company;
use Illuminate\Support\Facades\Mail;
use App\Mail\loginLinkMail;

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
    public function createCompany(Request $request){
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
      Mail::to($this->founderEmail)->send(new loginLinkMail());
      $this->formdata['company_slug'] = $this->cmp_slug;
      $this->formdata['company_link'] = $this->loginLink;
      $this->formdata['password'] = md5($this->finalPass);
      // print_r($this->formdata);
      // $this->newcmp = new Company($this->formdata);
      // $this->newcmp->save();
    }
}
