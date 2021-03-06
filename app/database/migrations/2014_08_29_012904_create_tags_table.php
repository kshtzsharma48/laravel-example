<?php

use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create("tags", function ($table) {
      $table->increments("id");
      $table->string("name");
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists("tags");
  }

}
