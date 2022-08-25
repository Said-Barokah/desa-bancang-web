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
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('prov_id')->constrained('provinces');
        });

        Schema::create('genders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('blood_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('religions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('marital_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('professions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('nationalities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('villagers', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('name');
            $table->foreignId('places_of_birth')->constrained('cities');
            $table->date('birthday');
            $table->foreignId('gender_id')->constrained('genders');
            $table->foreignId('blood_type_id')->constrained('blood_types');
            $table->foreignId('religion_id')->constrained('religions');
            $table->foreignId('marital_status_id')->constrained('marital_statuses');
            $table->foreignId('profession_id')->constrained('professions');
            $table->foreignId('nationality_id')->constrained('nationalities');
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
        Schema::dropIfExists('villagers');
        Schema::dropIfExists('provinces');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('genders');
        Schema::dropIfExists('religions');
        Schema::dropIfExists('marital_statuses');
        Schema::dropIfExists('professions');
        Schema::dropIfExists('nationalities');
    }
};
