<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nurse_profile;
use App\nurse_scheduler;
use App\patient_profile;

class AdminController extends Controller
{
    //

    public function main_page()

    {
        date_default_timezone_set('Asia/Dhaka');
        $date = date('d-m-Y');

        $pending_patient = patient_profile::where('status','=','not_assign')->get();
        $total_pending_patient = sizeof($pending_patient);

        $assign_patient = nurse_scheduler::where('appointed_date','=',$date)->get();
        $total_assign_patient = sizeof($assign_patient);

        $total_assign_nurse = sizeof($assign_patient);

        $occupied_nurse = 0;
        for($i=0;$i<sizeof($assign_patient);$i++)
        {
            $nurse_id = $assign_patient[$i]->nurse_id;

            $nurse_count = nurse_scheduler::where('nurse_id','=',$nurse_id)->where('appointed_date','=',$date)->get();

            if(sizeof($nurse_count) == 3)
            {
                $occupied_nurse++;
            }
        }






        return view('admin.welcome',['total_pedning_patient'=>$total_pending_patient,'total_assign_nurse'=>$total_assign_nurse,'total_assign_patient'=>$total_assign_patient,'occupied_nurse'=>$occupied_nurse]);
    }
}
