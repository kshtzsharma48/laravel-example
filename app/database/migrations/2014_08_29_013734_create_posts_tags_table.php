<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostsTagsTable extends Migration
{

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create("posts_tags", function ($table) {
      $table->unsignedInteger("post_id");
      $table->foreign("post_id")->references("id")->on("posts")->onDelete("cascade");
      $table->unsignedInteger("tag_id");
      $table->foreign("tag_id")->references("id")->on("tags")->onDelete("cascade");
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists("posts_tags");
  }

}
