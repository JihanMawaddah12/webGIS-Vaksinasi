<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        $this->call(UsersTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(TematiksTableSeeder::class);
        $this->call(HalamanDataTableSeeder::class);
        $this->call(HalamanData2sTableSeeder::class);
        $this->call(PendaftaransTableSeeder::class);
        $this->call(RumahSakitsTableSeeder::class);
        $this->call(DesasTableSeeder::class);
        $this->call(DaftarsTableSeeder::class);
    }
}
