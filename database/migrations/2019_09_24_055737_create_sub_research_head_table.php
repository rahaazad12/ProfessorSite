<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubResearchHeadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_research_heads', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->unsignedInteger('research_head_id');
            $table->string('name');
            $table->string('exp');
            $table->string('image');
            $table->foreign('research_head_id')->references('id')->on('research_heads')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('sub_research_heads');
    }
}
