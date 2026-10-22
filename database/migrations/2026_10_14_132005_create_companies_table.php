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
            $table->string("company_name",200);
            $table->string("company_email")->nullable()->unique();
            $table->bigInteger("company_mobile")->nullable()->unique();
            $table->string("company_website")->unique();
            $table->dateTime("established_date");
            $table->string("city",200);
            $table->string("state",255);
            $table->string("country");
            $table->integer("pincode");
            $table->string("founder_name");
            $table->string("founder_email")->unique();
            $table->bigInteger("founder_mobile")->unique();
            $table->string("facebook_page")->nullable();
            $table->string("twitter_page")->nullable();
            $table->string("whatsapp_number")->unique();
            $table->string("category");
            $table->string("company_slug")->unique();
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
