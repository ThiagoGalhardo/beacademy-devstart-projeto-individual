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
            $table->string('doc-voter');
            $table->string('zipcode');
            $table->string('address');
            $table->string('number-house');
            $table->string('complement-house');
            $table->string('district');
            $table->string('city');
            $table->string('state');
            $table->string('change-address');
            $table->string('have-deficiency');
            $table->string('occupation');
            $table->string('number-register');
            $table->string('number-last-ir');
            $table->string('have-spouse');
            $table->string('cpf-spouse');
            $table->string('have-dependents');
            $table->string('have-medical-expenses');
            $table->string('textarea-medical-expenses');
            $table->string('name-dependents');
            $table->string('cpf-dependents');
            $table->date('birth-dependents');
            $table->string('kinship-dependents');
            $table->string('live-with-dependents');
            $table->string('have-fed');
            $table->string('name-fed');
            $table->string('cpf-fed');
            $table->date('birth-fed');
            $table->string('have-education-expenses');
            $table->string('textarea-education-expenses');
            $table->string('have-patrimony');
            $table->string('textarea-patrimony');
            $table->string('bank');
            $table->string('bank-agency');
            $table->string('bank-number');
            $table->string('received-emergency-aid');
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
