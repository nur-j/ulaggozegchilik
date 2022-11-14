<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersWithPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $yuztutmaEditor = User::create([
            'name' => 'Yuztutma Admin',
            'email' => 'yuztutma@ulaggozegchilik.gov.tm',
            'password' => Hash::make('Yzttm#2022'),
            'phone' => '+99312 39-02-51',
            'is_admin' => 1
        ]);

        $yuztutmaEditor->assignRole('AdminYuztutma');

        $rugsatnamaEditor = User::create([
            'name' => 'Rugsatnama Admin',
            'email' => 'rugsatnama@ulaggozegchilik.gov.tm',
            'password' => Hash::make('Rgstnm#2022'),
            'phone' => '+99312 39-02-51',
            'is_admin' => 1
        ]);

        $rugsatnamaEditor->assignRole('AdminRugsatnama');

        $admin = User::where('name', 'admin')->first();
        $admin->assignRole('Admin'); 
    }
}
