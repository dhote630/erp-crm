<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string("company_name");
            $table->string("company_email")->nullable();
            $table->bigInteger("company_mobile")->nullable();
            $table->string("company_website");
            $table->dateTime("established_date");
            $table->string("city");
            $table->string("state");
            $table->string("country");
            $table->integer("pincode");
            $table->string("founder_name");
            $table->string("founder_email");
            $table->bigInteger("founder_mobile");
            $table->string("facebook_page")->nullable();
            $table->string("twitter_page")->nullable();
            $table->string("whatsapp_number");
            $table->string("category");
            $table->string("company_slug");
            $table->string("login_link");
            $table->string("password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
