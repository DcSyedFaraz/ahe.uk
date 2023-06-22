<?php
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'remember_token' => null,
            // 'email_verified_at' => Carbon::now(),
            'password'      => Hash::make('password'),
            // 'created_at'    => Carbon::now(),
            // 'updated_at'    => Carbon::now(),
            // 'email_verified_at' => Carbon::now(),
        ]);

        $admin->roles()->sync(1);
    }
}
