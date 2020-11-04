<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'JCS',
        	'email' => 'admin@gmail.com',
            'contact' => +258840792127,
            'status' => 'Positivo',
        	'password' => bcrypt('123456'),
            'password_change_at' => 'null'
        ]);

        $user = User::create([
            'name' => 'Joseph Mboane',
            'email' => 'joseph@gmail.com',
            'contact' => +258840792127,
            'status' => 'Positivo',
            'password' => bcrypt('123456'),
            'password_change_at' => 'null'
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
