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
            $table->string('complement-house')->nullable();
            $table->string('district');
            $table->string('city');
            $table->string('state');
            $table->string('change-address');
            $table->string('have-deficiency');
            $table->string('occupation');
            $table->string('number-register')->nullable();
            $table->string('number-last-ir')->nullable();
            $table->string('have-spouse');
            $table->string('cpf-spouse')->nullable();
            $table->string('have-dependents');
            $table->string('name-dependents')->nullable();
            $table->string('cpf-dependents')->nullable();
            $table->date('birth-dependents')->nullable();
            $table->string('kinship-dependents')->nullable();
            $table->string('live-with-dependents')->nullable();
            $table->string('have-fed');
            $table->string('name-fed')->nullable();
            $table->string('cpf-fed')->nullable();
            $table->date('birth-fed')->nullable();
            $table->string('have-medical-expenses');
            $table->text('textarea-medical-expenses')->nullable();
            $table->string('have-education-expenses');
            $table->text('textarea-education-expenses')->nullable();
            $table->string('have-patrimony');
            $table->text('textarea-patrimony')->nullable();
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
