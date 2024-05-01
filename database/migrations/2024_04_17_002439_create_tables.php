<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {


        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('number')->unique();
            $table->string('controller');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->string('name');
            $table->integer('number');
            $table->string('type');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->boolean('autoAnswer')->nullable();
            $table->boolean('hasLink')->nullable();
            $table->string('link')->nullable();
            $table->boolean('required')->nullable();
            $table->boolean('needsEvidence')->nullable();
            $table->string('visibility')->default('public');
            $table->timestamps();
        });

        Schema::create('multiinputs', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->text('text');
            $table->bigInteger('question_id')->unsigned();
            $table->integer('x');
            $table->integer('y');
            $table->string('name');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('entity_id')->unsigned();
            $table->bigInteger('question_id')->unsigned();
            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->text('answer');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('entity_id')->unsigned();
            $table->bigInteger('question_id')->unsigned();
            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->string('path');
            $table->timestamps();
        });
        Schema::create('history_files', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->bigInteger('entity_id')->unsigned()->nullable();
            $table->timestamps();
        });
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('entity_id')->unsigned();
            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');
            $table->string('path');
            $table->timestamps();
        });
        Schema::create('modifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('entity_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');
            $table->string('message');
            $table->timestamps();
        });

        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('entity_id')->unsigned();
            $table->boolean('isCompleted')->default(false);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('entity_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('completeds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('entity_id')->unsigned();
            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('questions');
        Schema::dropIfExists('answers');
        Schema::dropIfExists('files');
        Schema::dropIfExists('history_files');
        Schema::dropIfExists('reports');
        Schema::dropIfExists('modifications');
        Schema::dropIfExists('forms');
        Schema::dropIfExists('completeds');

    }
};
