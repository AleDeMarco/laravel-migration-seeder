<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
  public function run(Faker $faker) {
    for ($i = 0; $i < 10; $i++) {
      $newStudent = new Student();
      $newStudent->name = $faker->firstName;
      $newStudent->surname = $faker->lastName;
      $newStudent->address = $faker->country;
      $newStudent->email = $faker->email;
      $newStudent->save();
    }
  }
}
