<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterUser1;
use Illuminate\Support\Facades\Auth;
use App\Models\GenPop;
use App\Models\Progs;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;


class AdminController extends Controller
{
    

   public function addview(){
       return view("admin.add_genpop"); 
   }

    public function report_view()
{
  
    $report=GenPop::all();

    return view ('admin.add_report', compact('report'));
    
}

    public function doseUpdate($id){

        $data = GenPop::find($id);

        return view('admin.dose', compact('data'));
    }

    public function editDose(Request $request, $id){
        $dose = GenPop::find($id);

        $dose->Dose_type1=$request->doseType1;
        $dose->Dose1_num=$request->doseNum1;
        $dose->Dose1_Date=$request->dose1;

        $dose->Dose_type2='Not Vaccinated';
        $dose->Dose_num2='Not Vaccinated';
        $dose->Dose2_Date='Not Vaccinated';

        $dose->Dose_type3='Not Vaccinated';
        $dose->Dose_num3='Not Vaccinated';
        $dose->Dose3_Date='Not Vaccinated';

        $dose->Dose_type4='Not Vaccinated';
        $dose->Dose_num4='Not Vaccinated';
        $dose->Dose4_Date='Not Vaccinated';

        $dose->save();

        return redirect()->back()->with('message','Dose Update Successful!');


    }

    public function editDose2(Request $request, $id){
        $dose = GenPop::find($id);
        
        // $dose->Dose_type1=$request->doseType1;
        // $dose->Dose1_num=$request->doseNum1;
        // $dose->Dose1_Date=$request->dose1;

        $dose->Dose_type2=$request->doseType2;
        $dose->Dose_num2=$request->doseNum2;
        $dose->Dose2_Date=$request->dose2;

        $dose->Dose_type3='Not Vaccinated';
        $dose->Dose_num3='Not Vaccinated';
        $dose->Dose3_Date='Not Vaccinated';

        $dose->Dose_type4='Not Vaccinated';
        $dose->Dose_num4='Not Vaccinated';
        $dose->Dose4_Date='Not Vaccinated';

        $dose->save();

        return redirect()->back()->with('message','Dose Update Successful!');


    }

    public function editDose3(Request $request, $id){
        $dose = GenPop::find($id);
        
        // $dose->Dose_type1=$request->doseType1;
        // $dose->Dose1_num=$request->doseNum1;
        // $dose->Dose1_Date=$request->dose1;

        // $dose->Dose_type2=$request->doseType2;
        // $dose->Dose_num2=$request->doseNum2;
        // $dose->Dose2_Date=$request->dose2;

        $dose->Dose_type3=$request->doseType3;
        $dose->Dose_num3=$request->doseNum3;
        $dose->Dose3_Date=$request->dose3;

        $dose->Dose_type4='Not Vaccinated';
        $dose->Dose_num4='Not Vaccinated';
        $dose->Dose4_Date='Not Vaccinated';

        $dose->save();

        return redirect()->back()->with('message','Dose Update Successful!');


    }

    public function editDose4(Request $request, $id){
        $dose = GenPop::find($id);
        
        // $dose->Dose_type1=$request->doseType1;
        // $dose->Dose1_num=$request->doseNum1;
        // $dose->Dose1_Date=$request->dose1;

        // $dose->Dose_type2=$request->doseType2;
        // $dose->Dose_num2=$request->doseNum2;
        // $dose->Dose2_Date=$request->dose2;

        // $dose->Dose_type3=$request->doseType3;
        // $dose->Dose_num3=$request->doseNum3;
        // $dose->Dose3_Date=$request->dose3;

        $dose->Dose_type4=$request->doseType4;
        $dose->Dose_num4=$request->doseNum4;
        $dose->Dose4_Date=$request->dose4;

        $dose->save();

        return redirect()->back()->with('message','Dose Update Successful!');


    }


    public function updateDetails($id){
        $updateData = GenPop::find($id);

        return view('admin.details', compact('updateData'));
    }

    public function updateUser(Request $request,$id){

        $genpop=GenPop::find($id);

        $genpop->Iname = $request-> iname;  
        $genpop->Fname = $request-> fname; 
        $genpop->Mname = $request-> mname; 
        $genpop->Lname = $request-> lname;
        $genpop->Email = $request-> email;
        $genpop->MNumber = $request-> mobileNumber;  
        $genpop->Address = $request-> address; 
        $genpop->Division = $request->division;

        $genpop->save();

        return redirect()->back()->with('message','Update Successful!');

    }
    
    public function total_regi_view()
    {
      
        $report=GenPop::all();
    
        return view ('admin.total_regi', compact('report'));
        
    }

    public function total_regi_pdf_view()
    {
      
        $report=GenPop::all();
        $myTime = Carbon::now()->format('d-m-y');
        $mod=GenPop::all()->count();
        $pdf = Pdf::loadView('pdf.total_regi', compact('report','mod','myTime'));
        return $pdf->setPaper('a4', 'landscape')->download('Registered Users Report.pdf');
        
    }

    public function vaccine_pdf_view(){
        $report=GenPop::where('dose_type1','!=','Not Vaccinated')->get();
        $myTime = Carbon::now()->format('d-m-y');
        $mod=GenPop::where('dose_type1','!=','Not Vaccinated')->count();
        
        $pdf = Pdf::loadView('pdf.total_vacci', compact('report','mod','myTime'));
        return $pdf->setPaper('a3', 'landscape')->download('Vaccination Details Report.pdf');
    }

    public function moderna_pdf_view(){
        $report=GenPop::where('dose_type1','Moderna')->orWhere(function($query)
        {
            $query->where('dose_type2','Moderna')->orWhere('dose_type3','Moderna');
        })
        ->get();

        $mod=GenPop::where('dose_type1','Moderna')->orWhere(function($query)
        {
            $query->where('dose_type2','Moderna')->orWhere('dose_type3','Moderna');
        })
        ->count();
        $myTime = Carbon::now()->format('d-m-y');
        
        $pdf = Pdf::loadView('pdf.moderna', compact('report','mod','myTime'));
        return $pdf->setPaper('a3', 'landscape')->download('Moderna Vaccination Report.pdf');
    }

    public function sinopharm_pdf_view(){
        $report=GenPop::where('dose_type1','Sinopharm')->orWhere(function($query)
        {
            $query->where('dose_type2','Sinopharm')->orWhere('dose_type3','Sinopharm');
        })
        ->get();

        $mod=GenPop::where('dose_type1','Sinopharm')->orWhere(function($query)
        {
            $query->where('dose_type2','Sinopharm')->orWhere('dose_type3','Sinopharm');
        })
        ->count();
        $myTime = Carbon::now()->format('d-m-y');  
        $pdf = Pdf::loadView('pdf.sinopharm', compact('report','mod','myTime'));
        return $pdf->setPaper('a3', 'landscape')->download('Sinopharm Vaccination Report.pdf');
    }

    public function phizer_pdf_view(){
        $report=GenPop::where('dose_type1','Pfizer')->orWhere(function($query)
        {
            $query->where('dose_type2','Pfizer')->orWhere('dose_type3','Pfizer');
        })
        ->get();

        $mod=GenPop::where('dose_type1','Pfizer')->orWhere(function($query)
        {
            $query->where('dose_type2','Pfizer')->orWhere('dose_type3','Pfizer');
        })
        ->count();
        $myTime = Carbon::now()->format('d-m-y');       
        $pdf = Pdf::loadView('pdf.phizer', compact('report','mod','myTime'));
        return $pdf->setPaper('a3', 'landscape')->download('Pfizer Vaccination Report.pdf');
    }

    public function add_program_view()
    {
        return view('admin.add_program');
    }

    public function upload_program(Request $request)
    {
       
            $RegisterProg=new Progs;
    
            $RegisterProg->Program_name = $request-> program_name;
            $RegisterProg->Program_venue = $request-> program_venue;  
            $RegisterProg->Program_date = $request-> program_date; 
         
            $RegisterProg->save();
    
            session()->flash('message','Programme added successfully!');
            return redirect()->back();
    
        
    }

    public function to_vaccinate_view(){
        $report=GenPop::where('dose_type1','=','Not Vaccinated')->get();
        
        return view ('admin.to_vaccinate', compact('report'));
    }

    public function program_view()
    {
        $report=Progs::all();
    
        return view ('admin.viewprogram', compact('report'));
    }

    public function user_program_view()
    {
        $report=Progs::all();
    
        return view ('user.program', compact('report'));
    }

    
    
}
