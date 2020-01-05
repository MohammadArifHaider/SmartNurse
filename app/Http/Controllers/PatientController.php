<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient_profile;

class PatientController extends Controller
{
    //
    
    public function patient_information_upload(Request $request)
    {
                $patients = new patient_profile();
                $patients->user_id = 1;
                $patients->insurance_plan = $request->insurance_plan;
                $patients->date_received =$request->date_received;
                $patients->date_need_to_be_finished =$request-> date_need_to_be_finished;
                $patients->medicaid_id = $request->medicaid_id;
                $patients->member_id = $request->member_id;
                $patients->first_name = $request->first_name;
                $patients->last_name = $request->last_name;
                $patients->sex = $request->sex;
                $patients->date_of_birth = $request->date_of_birth;
                $patients->primary_language = $request->primary_language;
                $patients->cell_phone = $request->cell_phone;
                $patients->home_phone = $request->home_phone;

                $patients->marital_status = $request->marital_status;
                $patients->email = $request->email;
                $patients->address = $request->address;

                $patients->city = $request->city;
                $patients->state = $request->state;
                $patients->zip_code = $request->zip_code;
                $patients->country = $request->country;
                $patients->assesment_type = $request->assesment_type;
                $patients->save();
    }
    
    
}
