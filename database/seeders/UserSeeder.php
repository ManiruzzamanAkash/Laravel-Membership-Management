<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\User;
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
        $user           = new User();
        $user->name     = "Maniruzzaman Akash";
        $user->username = "akash";
        $user->phone_no = "01951233084";
        $user->email    = "manirujjamanakash@gmail.com";
        $user->password = Hash::make('12345678');
        $user->designation_id = 1;
        $user->save();
        $user->assignRole('Super Admin');

        $user           = new User();
        $user->name     = "Member";
        $user->username = "member";
        $user->phone_no = "01711287849";
        $user->email    = "member@example.com";
        $user->password = Hash::make('12345678');
        $user->designation_id = 2;
        $user->save();
        $user->assignRole('Member');

        // Grab the user ID and create a member
        Member::create([
            'user_id'    => $user->id,
            'custom_id'  => '200',
            'nid'        => '328349934893434',
            'status'     => 'active',
            'created_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
