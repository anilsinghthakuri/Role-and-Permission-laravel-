<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'principal']);
        Role::create(['name' => 'teacher']);
        Role::create(['name' => 'student']);
        Role::create(['name' => 'accountant']);
        Role::create(['name' => 'librarian']);

        Permission::create(['name' => 'student_create']);
        Permission::create(['name' => 'student_details']);
        Permission::create(['name' => 'fee_collect']);
        Permission::create(['name' => 'fee_assign']);
        Permission::create(['name' => 'book_save']);
        Permission::create(['name' => 'book_issue']);
        Permission::create(['name' => 'book_fine']);
        Permission::create(['name' => 'exam_create']);
        Permission::create(['name' => 'exam_mark']);
        Permission::create(['name' => 'leave_apply']);


        $role = Role::findbyid(1);
        $role->givePermissionTo(Permission::all());

        $role = Role::findbyid(2);
        $role->givePermissionTo(Permission::all());

        $role = Role::findbyid(3);
        $role->givePermissionTo('student_details');
        $role->givePermissionTo('exam_create');
        $role->givePermissionTo('exam_mark');

        $role = Role::findbyid(4);
        $role->givePermissionTo('leave_apply');

        $role = Role::findbyid(5);
        $role->givePermissionTo('fee_collect');
        $role->givePermissionTo('student_create');
        $role->givePermissionTo('student_details');
        $role->givePermissionTo('fee_assign');

        $role = Role::findbyid(6);
        $role->givePermissionTo('book_save');
        $role->givePermissionTo('book_issue');
        $role->givePermissionTo('book_fine');



    }
}
