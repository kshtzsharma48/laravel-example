<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create("posts", function ($table) {
      $table->increments("id");
      $table->string("title");
      $table->text("content");
      $table->timestamps();
      $table->softDeletes();
      $table->unsignedInteger("author_id");
      $table->foreign("author_id")->references("id")->on("authors")->onDelete("cascade");
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists("posts");
  }

}
