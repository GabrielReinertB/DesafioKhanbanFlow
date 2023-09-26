<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('designated_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('column_id')->nullable()->constrained('columns')->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->constrained('categories');
            $table->foreignId('owner_id')->constrained('users');
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->string('reference')->nullable();
            $table->smallInteger('position')->nullable();
            $table->string('color', 10)->nullable();
            $table->date('event')->nullable();
            $table->date('expiration')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}