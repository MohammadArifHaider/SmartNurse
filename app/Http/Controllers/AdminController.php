<?php

namespace App\Http\Controllers;

use App\nurse_scheduler;
use App\patient_profile;
use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    //

    public function update_user_role(Request $request)
    {
           $user_id = $request->user_id;
           $user_role =$request->user_role;
           User::where('id','=',$user_id)->update(['user_role'=>$user_role]);
    }

    public function update_user_password(Request $request)
    {
           $user_id = $request->user_id;
           $password =Hash::make($request->password);
           User::where('id','=',$user_id)->update(['password'=>$password]);
    }
    public function delete_user(Request $request)
    {
      $user_id = $request->user_id;
      User::where('id','=',$user_id)->delete();
    }


    public function get_user_role_super_admin(Request $request)
    {
        $user = User::all();
        $data = "";
        for ($i = 0; $i < sizeof($user); $i++) {

            $data .= '<tr>

            <td>' . $user[$i]->name . '</td>
            <td>' . $user[$i]->email . '</td>
            <td>' . $user[$i]->user_role . '</td>

        <td>
           <button onclick="update_role(' . $user[$i]->id . ')" class="btn btn-primary ">Update Role</button>
       </td>
       <td>
       <button onclick="update_password(' . $user[$i]->id . ')" class="btn btn-success ">Update Passwors</button>
        </td>
      <td>
           <button onclick="delete_user(' . $user[$i]->id . ')" class="btn btn-danger ">Delete User</button>
       </td>



           </tr>';

        }
        return $data;
    }
    public function view_user_page()
    {
        return view('super_admin.view_user');
    }
    public function check_email_validity(Request $request)
    {
        $email = $request->email;
        $exist = User::where('email', '=', $email)->first();

        if ($exist) {
            return "not_ok";
        } else {
            return "ok";
        }

    }

    public function create_user(Request $request)
    {
        //file_put_contents('test.txt',$request->all());

        if (User::create($request->all())) {
            return "ok";
        } else {
            return "not_ok";
        }

    }
    public function login(Request $request)
    {
        if (Auth::attempt(array(

            'email' => $request->email,
            'password' => $request->password,
        ))) {
            $id = Auth::id();
            $user_role = User::where('id','=',$id)->first()->user_role;
            if($user_role === 'super_admin')
            {
               Session::put('user_id', $id);
               return view('super_admin.welcome');
            }
            else
            {
                Session::put('user_id', $id);
                return view('welcome');
            }


          // file_put_contents('test.txt', $id);
        } else {
           // file_put_contents('test.txt', 'not_ok');
           Session::flash ( 'message', "Invalid Email or Password" );
           return redirect('/');
        }
    }

    public function view_create_user()
    {
        return view('super_admin.create_user');
    }

    public function super_admin_main_pages()
    {
        return view('super_admin.welcome');
    }

    public function main_page()
    {
        date_default_timezone_set('Asia/Dhaka');
        $date = date('d-m-Y');

        $pending_patient = patient_profile::where('status', '=', 'not_assign')->get();
        $total_pending_patient = sizeof($pending_patient);

        $assign_patient = nurse_scheduler::where('appointed_date', '=', $date)->get();
        $total_assign_patient = sizeof($assign_patient);

        $total_assign_nurse = sizeof($assign_patient);

        $occupied_nurse = 0;
        for ($i = 0; $i < sizeof($assign_patient); $i++) {
            $nurse_id = $assign_patient[$i]->nurse_id;

            $nurse_count = nurse_scheduler::where('nurse_id', '=', $nurse_id)->where('appointed_date', '=', $date)->get();

            if (sizeof($nurse_count) == 3) {
                $occupied_nurse++;
            }
        }

        return view('admin.welcome', ['total_pedning_patient' => $total_pending_patient, 'total_assign_nurse' => $total_assign_nurse, 'total_assign_patient' => $total_assign_patient, 'occupied_nurse' => $occupied_nurse]);
    }
}
