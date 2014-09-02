<?php

use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create("comments", function ($table) {
      $table->increments("id");
      $table->text("content");
      $table->timestamps();
      $table->softDeletes();
      $table->unsignedInteger("post_id");
      $table->foreign("post_id")->references("id")->on("posts")->onDelete("cascade");
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists("comments");
  }

}
