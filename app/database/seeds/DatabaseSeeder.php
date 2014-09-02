<?php

class DatabaseSeeder extends Seeder
{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->call("AuthorsTableSeeder");
    $this->call("TagsTableSeeder");
    $this->call("PostsTableSeeder");
    $this->call("PostsTagsTableSeeder");
    $this->call("CommentsTableSeeder");
  }

}
