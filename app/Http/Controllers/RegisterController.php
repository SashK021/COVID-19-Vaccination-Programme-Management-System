<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RegisterUser1;

use App\Models\GenPop;

class RegisterController extends Controller
{
    public function addview(){
        return view('user.add_genpop');
    }

    public function upload(Request $request){

        $RegisterUser1=new GenPop;

        $RegisterUser1->NIC = $request-> NIC;
        $RegisterUser1->Iname = $request-> iname;  
        $RegisterUser1->Fname = $request-> fname; 
        $RegisterUser1->Mname = $request-> mname; 
        $RegisterUser1->Lname = $request-> lname;

        $RegisterUser1->Dose_type1='Not Vaccinated';
        $RegisterUser1->Dose1_num='Not Vaccinated';
        $RegisterUser1->Dose1_Date='Not Vaccinated';
        $RegisterUser1->Dose1_Loc='Not Vaccinated';

        $RegisterUser1->Dose_type2='Not Vaccinated';
        $RegisterUser1->Dose_num2='Not Vaccinated';
        $RegisterUser1->Dose2_Date='Not Vaccinated';
        $RegisterUser1->Dose2_Loc='Not Vaccinated';
        

        $RegisterUser1->Dose_type3='Not Vaccinated';
        $RegisterUser1->Dose_num3='Not Vaccinated';
        $RegisterUser1->Dose3_Date='Not Vaccinated';
        $RegisterUser1->Dose3_Loc='Not Vaccinated';

        $RegisterUser1->Dose_type4='Not Vaccinated';
        $RegisterUser1->Dose_num4='Not Vaccinated';
        $RegisterUser1->Dose4_Date='Not Vaccinated';
        $RegisterUser1->Dose4_Loc='Not Vaccinated';

        $RegisterUser1->Email = $request-> email;
        $RegisterUser1->MNumber = $request-> mobileNumber;  
        $RegisterUser1->Address = $request-> address; 
        $RegisterUser1->Division = $request->division;



        
        $RegisterUser1->save();

        session()->flash('message','Registration Successful!');
        return redirect()->back();

    }
}
