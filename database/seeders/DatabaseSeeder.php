<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Visimisi,
    Tentangkami,
    Pimpinan
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Syahril Saputra',
            'email' => 'syahrilsaputra2323@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::factory(10)->create();
        Visimisi::factory(1)->create();
        Tentangkami::factory(1)->create();
        Pimpinan::factory(1)->create();
    }
}
