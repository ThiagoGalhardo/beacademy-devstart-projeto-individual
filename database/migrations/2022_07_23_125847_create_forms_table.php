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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('birthday');
            $table->string('cpf');
            $table->string('doc_voter');
            $table->string('zipcode');
            $table->string('address');
            $table->string('number_house');
            $table->string('complement_house')->nullable();
            $table->string('district');
            $table->string('city');
            $table->string('state');
            $table->string('change_address');
            $table->string('have_deficiency');
            $table->string('occupation');
            $table->string('number_register')->nullable();
            $table->string('number_last_ir')->nullable();
            $table->string('have_spouse');
            $table->string('cpf_spouse')->nullable();
            $table->string('have_dependents');
            $table->text('textarea_dependents')->nullable();
            $table->string('have_fed');
            $table->text('textarea_fed')->nullable();
            $table->string('have_medical_expenses');
            $table->text('textarea_medical_expenses')->nullable();
            $table->string('have_education_expenses');
            $table->text('textarea_education_expenses')->nullable();
            $table->string('have_patrimony');
            $table->text('textarea_patrimony')->nullable();
            $table->string('bank');
            $table->string('bank_agency');
            $table->string('bank_number');
            $table->string('received_emergency_aid');
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
        Schema::dropIfExists('forms');
    }
};
