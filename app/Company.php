<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
   protected $fillable = [
    " company_name",
     "company_email",
     "company_mobile",
     "established_date",
     "company_website",
     "city",
     "state",
     "country",
     "pincode",
     "founder_name",
     "founder_email",
     "founder_mobile",
     "facebook_page",
     "twitter_page",
     "whatsapp_number",
     "category",
     "company_slug",
     "login_link",
     "password",
   ];
}
