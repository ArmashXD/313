<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        Role::create(['name' => 'admin']);

        /** @var \App\Models\User $user */
        $admin = User::create([
            'name' => 'user',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin1234'),
            'O_Auth' => 'admin1234',
            'level_id' => 10,
            'license_year' => Carbon::now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('children')->insert([
            'user_id' => $admin->id
        ]);
        DB::table('payments')->insert([
            'user_id' => $admin->id,
            'payment_method' => 'Paypal',
            'payment_account' => '123920924',
            'notes' => 'Please pay the license fee to activate account.'
        ]);
        $admin->assignRole('admin');

        Role::create(['name' => 'user']);
        /** @var \App\User $user */
        $user = User::create([
            'name' => 'user',
            'email' => 'user1@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('test1234'),
            'O_Auth' => 'test1234',
            'level_id' => 10,
            'license_year' => Carbon::now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('children')->insert([
            'user_id' => $user->id,
        ]);

        $user2 = User::create([
            'name' => 'user',
            'email' => 'user2@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('test1234'),
            'O_Auth' => 'test1234',
            'level_id' => 10,
            'license_year' => Carbon::now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('children')->insert([
            'user_id' => $user2->id
        ]);
        $user2->assignRole('user');

        $user3 = User::create([
            'name' => 'user',
            'email' => 'user3@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('test1234'),
            'O_Auth' => 'test1234',
            'level_id' => 10,
            'license_year' => Carbon::now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('children')->insert([
            'user_id' => $user3->id
        ]);
        $user3->assignRole('user');
    }
}
