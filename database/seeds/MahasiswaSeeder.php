<?php
use App\Mahasiswa;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 20; $i++){
            Mahasiswa::create([
                'nama' => $faker->name,
                'jk' => $faker->randomElement(['Laki-laki', 'Perempuan']),            
                'nim' => $faker->numberBetween(15404501,15404560),
                'dosen_id' => $faker->numberBetween(1,10)
            ]);
        }
    }
}
