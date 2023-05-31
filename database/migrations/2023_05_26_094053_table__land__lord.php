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
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('land_lord', function(Blueprint $table){
            $table -> increments('landlord_id');
            $table -> string('name');
            $table -> string('email');
            $table -> string('address');
            $table -> string('password');
            $table -> integer('phone');
            $table -> timestamps();
        });

        Schema::create('property', function(Blueprint $table){
            $table -> increments('propety_id');
            $table -> integer('landlord_id');
            $table -> integer('address_id');
            $table -> string('description');
            $table -> string('address');
            $table -> integer('price');
            $table -> string('area');
            $table -> string('image');
            $table -> integer('room_count');
            $table -> timestamps();
        }); 

        Schema::create('rating', function(Blueprint $table){
            $table -> increments('rating_id');
            $table -> integer('propety_id');
            $table -> integer('tenant_id');
            $table -> integer('rating');
            $table -> string('address');
            $table -> string('comment');
            $table -> timestamps();
        }); 

       

    }
};
