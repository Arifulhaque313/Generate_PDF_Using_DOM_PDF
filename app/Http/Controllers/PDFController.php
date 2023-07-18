<?php

namespace App\Http\Controllers;

use App\Models\SummerCampReg;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Inertia\Inertia;
use Illuminate\Support\Str;


class PDFController extends Controller
{
    
    public function pdf(){
        $pdf = Pdf::loadView('pdf');
        return $pdf->strem();
    }

    public function download1(){
        $pdf = Pdf::loadView('pdf.pdf1');
        return $pdf->download();
    }

    public function download2(){
        $pdf = Pdf::loadView('pdf.pdf2');
        return $pdf->download();
    }

    public function stream(){
        $pdf = Pdf::loadView('pdf.pdf1');
        return $pdf->stream();
    }

    public function registrationForm(){

        return Inertia::render('Form/Registration');
    }

    public function store(Request $request){
        $request->validate([
            'student_name'=>'required|string',
            'age'=>'required|integer',
            'grade'=>'required',
            'guardian_name'=>'required|string',
            'home_address'=>'required|string',
            'work'=>'required|string',
            'zip'=>'required|integer|',
            'email'=>'required|email',
            'about'=>'required|string',
            'emergency_contact'=>'required|string',
             
         ]);

       $sumCampReg = SummerCampReg::create([
                'name' => $request->student_name,
                'age' => $request->age,
                'slug'=>Str::slug($request->name),
                'grade' => $request->grade,
                'guardian_name' => $request->guardian_name,
                'home_address' => $request->home_address,
                'work' => $request->work,
                'zipcode' => $request->zip,
                'email' => $request->email,
                'emergency_contact' => $request->emergency_contact,
                'about' => $request->about,
                'student_type' => $request->new_student,
                'camp_hours' => $request->new_student ? json_encode($request->camp_hour):null,
                'weekly_class_hours' => $request->new_student ? json_encode($request->weeklyHour):null,

        ]);

        $sumCampReg = SummerCampReg::find($sumCampReg->id);
        return Inertia::render('Form/Show',['sumCampReg' => $sumCampReg]);
    }


    public function downloadForm($id){

        $sumCampReg = SummerCampReg::find($id);
        $pdf = Pdf::loadView('pdf.registration',['sumCampReg' => $sumCampReg])->setPaper('a4','portrait');
        return $pdf->download('Summer_Camp_Registraion.pdf');
    }
}
