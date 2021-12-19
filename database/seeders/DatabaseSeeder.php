<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Visimisi,
    Tentangkami,
    Pimpinan,
    Galeri
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
            'password' => bcrypt('password'),
            'email_verified_at' => '2021-12-19 12:38:34',
            'role' => 'superadmin'
        ]);
        User::factory(10)->create();
        Visimisi::factory(1)->create();
        Tentangkami::factory(1)->create();
        Pimpinan::factory(1)->create();
        Galeri::create([
            'uuid' => '7263414bb34y91240bc1209312',
            'img' => 'sfkwefk.jpg',
            'title' => 'fkcnrwr239cnje'
        ]);
    }
}
 