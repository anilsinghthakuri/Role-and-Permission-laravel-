<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
   public function index()
   {
       $role_data_count = $this->fetch_count_role();
        //    dump($role_data_count);
       return view('dashboard.index',[
           'role_data_count'=>$role_data_count,
       ]);

   }

   private function fetch_count_role()
   {
        $role_teacher_count = DB::table('model_has_roles')->where('role_id',3)->get()->count();
        $role_student_count = DB::table('model_has_roles')->where('role_id',4)->get()->count();
        $role_accountant_count = DB::table('model_has_roles')->where('role_id',5)->get()->count();
        return array($role_teacher_count,$role_student_count,$role_accountant_count);

   }


}
