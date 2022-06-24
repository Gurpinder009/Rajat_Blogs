<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);  
        $faker = Faker::create();
        
        for($i=0;$i<100;$i++){
            User::create([
                "name"=> $faker->name(),
                "email"=>$faker->email(),
                "phone_num"=>$faker->phoneNumber(),
                "password"=>$faker->password()
            ]);
        }

        User::create([
            "name"=> "rajat",
            "email"=>"rajatjaswal001@gmail.com",
            "phone_num"=>"239847293",
            "password"=>Hash::make("password@123")
        ]);
        unset($faker);
        // echo User::where("email","rajatjaswal001@gmail.com")->get()[0];
    }
}
