<?php

use Faker\Factory as FakerFactory;
use Illuminate\Database\DatabaseManager as Database;

class AuthorsTableSeeder extends Seeder
{

  /**
   * @var Faker
   */
  protected $fakerFactory;

  /**
   * @var Database
   */
  protected $database;

  /**
   * @param FakerFactory $fakerFactory
   * @param Database     $database
   */
  function __construct(FakerFactory $fakerFactory, Database $database)
  {
    $this->fakerFactory = $fakerFactory;
    $this->database     = $database;
  }

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = $this->fakerFactory->create();

    for ($i = 0; $i < 10; $i++) {
      $this->database->table("authors")->insert([
        "name"       => $faker->unique()->name,
        "created_at" => $faker->dateTimeThisYear,
        "updated_at" => $faker->dateTimeThisYear
      ]);
    }

  }

}
