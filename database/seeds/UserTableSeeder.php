<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=1; $i<=2; $i++){
            factory(\App\User::class)->create([
                'id' => $i,
            ]);

            factory(\App\Person::class)->create([
                'id' => $i,
            ]);
        }
    }
}
