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
            $table->unsignedBigInteger('professional_id');
            $table->foreign('professional_id')->references('id')->on('professionals');
            $table->string('professional_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('project_type')->nullable();
            $table->string('project_name')->nullable();
            $table->text('description')->nullable();
            $table->string('firm')->nullable();
            $table->string('area_size')->nullable();
            $table->string('design_style')->nullable();
            $table->string('architect')->nullable();
            $table->string('location')->nullable();
            $table->enum('status',['Active','Inactive'])->default('Active');
            $table->text('thumbnail_image')->nullable();
            $table->longText('multiple_image')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
