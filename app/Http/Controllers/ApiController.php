<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nurse_profile;
use App\nurse_scheduler;
use App\patient_profile;
use App\distance_table;

class ApiController extends Controller
{
    //

    public function login(Request $reuqest)
    {

       // return 'hello';
        $phone_number = $reuqest->msisdn;
        $passowrd = $reuqest->passowrd;

        $is_avail = nurse_profile::where('phone_number','=',$phone_number)->first();
        if($is_avail)
        {
            $name = $is_avail->name;
            $image = 'http://www.quiz-hunt.com/image/nurse_image/nurse1_image.png';
            return response()->json(['error'=>'no','name'=>$name,'image'=>$image,'address'=>$is_avail->address,'user_id'=>$is_avail->user_id]);
        }
        else{
            return response()->json(['error'=>'yes']);
        }
    }

    public function get_schedule(Request $request)
    {
         //date_default_timezone_set('Asia/Dhaka');
         $date = $request->date;
         $date2 = explode("-",$date);
         $month = $date2[1];
         if(strlen($month)==1)
         {
             $month ="0".$month;
         }
         $date = $date2[0]."-".$month."-".$date2[2];

        $nurse_id = $request->user_id;
        $appointment = nurse_scheduler::where('nurse_id','=',$nurse_id)->where('appointed_date','=',$date)->where('cancle','=','no')->get();
        $appointment_list = array();

        if($appointment->isEmpty())
        {
            //return $date;
            return json_encode($appointment_list);
        }
        else
        {
            for($i = 0 ;$i<sizeof($appointment);$i++)
            {
                $patient_id = $appointment[$i]->patient_id;
                $patient = patient_profile::where('id','=',$patient_id)->first();
                $patient_name = $patient->first_name." ".$patient->last_name;
                $address = $patient->address.",".$patient->city.",".$patient->country;
                $patient_lat = distance_table::where('patient_id','=',$patient_id)->first()->patient_lat;
                $patient_lon = distance_table::where('patient_id','=',$patient_id)->first()->patient_lon;




                array_push($appointment_list,['scheduler_id'=>$appointment[$i]->id,'p_name'=>$patient_name,'p_id'=>$patient_id,'appointment_time'=>$appointment[$i]->appointed_start_time,'lat'=>$patient_lat,'lon'=>$patient_lon,'p_address'=>$address]);
            }
            return json_encode($appointment_list);
        }


    }






    public function get_schedule_today(Request $request)
    {
         date_default_timezone_set('Asia/Dhaka');
         $date = date('d-m-Y');
         $date2 = explode("-",$date);
         $month = $date2[1];
         if(strlen($month)==1)
         {
             $month ="0".$month;
         }
         $date = $date2[0]."-".$month."-".$date2[2];
        $nurse_id = $request->user_id;
        $appointment = nurse_scheduler::where('nurse_id','=',$nurse_id)->where('appointed_date','=',$date)->where('cancle','=','no')->get();
        $appointment_list = array();

        if($appointment->isEmpty())
        {
           // return $date;
            return json_encode($appointment_list);
        }
        else
        {
            for($i = 0 ;$i<sizeof($appointment);$i++)
            {
                $patient_id = $appointment[$i]->patient_id;
                $patient = patient_profile::where('id','=',$patient_id)->first();
                $patient_name = $patient->first_name." ".$patient->last_name;
                $address = $patient->address.",".$patient->city.",".$patient->country;
                $patient_lat = distance_table::where('patient_id','=',$patient_id)->first()->patient_lat;
                $patient_lon = distance_table::where('patient_id','=',$patient_id)->first()->patient_lon;




                array_push($appointment_list,['scheduler_id'=>$appointment[$i]->id,'p_name'=>$patient_name,'p_id'=>$patient_id,'appointment_time'=>$appointment[$i]->appointed_start_time,'lat'=>$patient_lat,'lon'=>$patient_lon,'p_address'=>$address]);
            }
            return json_encode($appointment_list);
        }


    }

    public function notification(Request $request)
    {
        $nurse_id = $request->user_id;

           $appointment = nurse_scheduler::where('nurse_id','=',$nurse_id)->orderBy('id','DESC')->limit(20)->get();
        $appointment_list = array();

        if($appointment->isEmpty())
        {
           // return $date;
            return json_encode($appointment_list);
        }
        else
        {
            for($i = 0 ;$i<sizeof($appointment);$i++)
            {
                $patient_id = $appointment[$i]->patient_id;
                $patient = patient_profile::where('id','=',$patient_id)->first();
                $patient_name = $patient->first_name." ".$patient->last_name;
                $address = $patient->address.",".$patient->city.",".$patient->country;
                $patient_lat = distance_table::where('patient_id','=',$patient_id)->first()->patient_lat;
                $patient_lon = distance_table::where('patient_id','=',$patient_id)->first()->patient_lon;




                array_push($appointment_list,['p_name'=>$patient_name,'p_id'=>$patient_id,'appointment_time'=>$appointment[$i]->appointed_start_time,'lat'=>$patient_lat,'lon'=>$patient_lon,'p_address'=>$address,'appointment_date'=>$appointment[$i]->appointed_date]);
            }
            return json_encode($appointment_list);
        }


    }

    public function cancle_schedule(Request $request)
    {
        $scheduler_id = $request->scheduler_id;
       // file_put_contents('test.txt',$scheduler_id);
        nurse_scheduler::where('id','=',$scheduler_id)->update(['cancle'=>'yes']);

        $patient_id = nurse_scheduler::where('id','=',$scheduler_id)->first()->patient_id;
        patient_profile::where('id','=',$patient_id)->update(['status'=>'not_assign','cancel'=>'yes']);


        	return response()->json(['response'=>'ok']);

    }
    public function get_distance(Request $request)
    {
        $nurse_lat = $request->lat;
        $nurse_lon = $request->lon;
    }

    public function update_firebase_token(Request $request)

    {


        $user_id = $request->user_id;
        $key = $request->key;
        nurse_profile::where('id','=',$user_id)->update(['firebase_token'=>$key]);

        	return response()->json(['response'=>'ok']);


    }
}
