<?php

use App\Status;
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
            RoleSeeder::class,
            StatusSeeder::class,
            // PermissionRoleTableSeeder::class,
            UserSeeder::class,
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
