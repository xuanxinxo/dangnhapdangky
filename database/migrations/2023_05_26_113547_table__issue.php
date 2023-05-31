<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant', function(Blueprint $table){
            $table -> increments('tenant_id');
            $table -> string('name');
            $table -> string('email');
            $table -> integer('phone');
            $table -> string('address');
            $table -> string('password');
            $table -> timestamps();
        }); 

        Schema::create('service', function(Blueprint $table){
            $table -> increments('service_id');
            $table -> integer('propety_id');
            $table -> string('description');
            $table -> integer('price');
            $table -> string('contact_info');
            $table -> timestamps();
        }); 

        Schema::create('address', function(Blueprint $table){
            $table -> increments('address_id');
            $table -> string('district');
            $table -> string('streey');
            $table -> string('wards');
            $table -> timestamps();
        }); 

        
        Schema::create('schedule', function(Blueprint $table){
            $table -> increments('schedule_id');
            $table -> integer('propety_id');
            $table -> datetime('maintanance_date');
            $table -> datetime('duration');
            $table -> string('progress');
            $table -> timestamps();
        }); 

        Schema::create('contract', function(Blueprint $table){
            $table -> increments('contract_id');
            $table -> integer('tenant_id');
            $table -> integer('landlord_id');
            $table -> integer('property_id');
            $table -> datetime('start_date');
            $table -> datetime('end_date');
            $table -> datetime('report_date');
            $table -> string('payment_status');
            $table -> timestamps();
        }); 

        Schema::create('issue', function(Blueprint $table){
            $table -> increments('issue_id');
            $table -> integer('tenant_id');
            $table -> integer('property_id');
            $table -> string('description');
            $table -> datetime('report_date');
            $table -> string('status');
            $table -> timestamps();
        }); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
