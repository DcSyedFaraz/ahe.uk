<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            // RoleSeeder::class,
            // PermissionRoleTableSeeder::class,
            // UsersTableSeeder::class,
            // RoleUserTableSeeder::class,
            WebSettingSeeder::class,
            // ServiceTableSeeder::class,
            PaperTypeSeeder::class,
            AcademicLevelSeeder::class,
            DeadlineSeeder::class,
            FareSeeder::class,
            RefrenceStyleSeeder::class,
            SubjectSeeder::class,
            CountrySeeder::class,
        ]);
    }
}
