<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->string('slug');
            $table->json('text');
            $table->string('client')->nullable();
            $table->string('stack')->nullable();
            $table->string('external_url')->nullable();
            $table->string('status')->default('draft');
            $table->text('image')->nullable();
            $table->timestamps();
            $table->bigInteger('author_id')->unsigned();
            $table->datetime('publish_date')->nullable();
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
