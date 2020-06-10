<?php
use App\Dosen;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 10; $i++){
            Dosen::create([
                'nama' => $faker->name,                
                'nip' => $faker->numberBetween(12893746501,12893746561),               
            ]);
        }
    }

}
