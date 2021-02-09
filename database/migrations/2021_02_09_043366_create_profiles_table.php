<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('address');
            $table->string('phone');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('gender_id');
            $table->foreign('user_id')->references('id')
                            ->on('users')->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->foreign('country_id')->references('id')
                            ->on('countries')->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->foreign('gender_id')->references('id')
                            ->on('genders')->onUpdate('cascade')
                            ->onDelete('cascade');
            
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
        Schema::dropIfExists('profiles');
    }
}
