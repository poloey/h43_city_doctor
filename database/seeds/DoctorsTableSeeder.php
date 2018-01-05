<?php

use App\Doctor;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Factory::create();
      foreach (range(1, Helpers::NUMBER_OF_DOCTOR) as $i) {
        $name = $faker->name;
        DB::table('doctors')->insert([
          'name' => $name,
          'slug' => $this->generating_slug($name),
          'email' => $faker->email,
          'address' => $faker->address,
          'hospital_id' => rand(1, Helpers::NUMBER_OF_HOSPITAL),
          'degree_id' => rand(1, count(Helpers::DEGREES)),
          'discipline_id' => rand(1, count(Helpers::DISCIPLINES)),
          'user_id' => rand(1, count(Helpers::USERS)),
          'phone' => $faker->tollFreePhoneNumber,
          'address' => $faker->address,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
      }
    }
    public function generating_slug($string)
    {
        $slug = str_slug($string);
        $latestSlug = Doctor::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")
                        ->latest('id')
                        ->limit(1)
                        ->pluck('slug');
        // return ['slug' => $latestSlug];
        if (count($latestSlug) != 0) {
          $pieces = explode('-', $latestSlug);
          $number = intval( end($pieces) );
          $slug = $slug . '-' . ($number + 1);
        }
        return $slug;
    }
}
