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
        Schema::create('address_patients', function (Blueprint $table) {
            // $table->id();
            $table->primary('patient_id');
            $table->foreignId('patient_id')
            ->constrained('patients')
            ->cascadeOnDelete();
            $table->char('country',2)->nullable();
            $table->string('city')->nullable();
            $table->String('home')->nullable();
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
        Schema::dropIfExists('address_patints');
    }
};
