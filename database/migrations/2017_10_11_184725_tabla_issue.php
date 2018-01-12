<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaIssue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function(Blueprint $table)
        {
          $table->increments('id');
          $table->string('titulo');
          $table->string('detalle');
          $table->integer('urgencia');
          $table->integer('impacto');
          $table->string('editor');
          $table->date('fentrega');
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
        Schema::dropIfExists('issue');
    }
}
