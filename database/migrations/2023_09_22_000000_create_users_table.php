<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100); // Aumentei o tamanho do campo 'name' para 255 caracteres
            $table->string('email', 100)->unique(); // Aumentei o tamanho do campo 'email' para 255 caracteres
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255); // 255 para a autenticação padrão do laravel com bcrypt
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
