<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\program;
use App\Models\student_personal_info;
use App\Models\guardian_info;
use App\Models\matric_result;
use App\Models\inter_result;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage as FacadesStorage;
// use Barryvdh\DomPDF\Facade\Pdf;
use PDF;

use Storage;

class frontAdmissionController extends Controller
{
    public function createPDF($student_id)
    {
        if(!File::isDirectory(public_path('uploads/students/'))){
            File::makeDirectory(public_path('uploads/students/'), 0777, true, true);
          }

        $data = student_personal_info::where('student_personal_infos.student_id', $student_id)
            ->join('guardian_infos', 'guardian_infos.student_id', 'student_personal_infos.student_id')
            ->join('programs', 'programs.program_id', 'student_personal_infos.program_id')
            ->join('matric_results', 'matric_results.student_id', 'student_personal_infos.student_id')
            ->join('inter_results', 'inter_results.student_id', 'student_personal_infos.student_id')
            ->select('student_personal_infos.*', 'guardian_infos.*', 'programs.program_name', 'matric_results.*', 'inter_results.*')
            ->first();
        // share data to view blade file
        view()->share('info', $data);
        //  Making PDF
        $pdf = PDF::loadView('front.onlineAdmissionForm_pdf', $data);
        $fileName =  "Student" . "_" . $student_id;
        $pdf->save(public_path('uploads/students/' . $fileName . ".pdf"), $pdf->output());
        return $pdf->download($fileName . ".pdf");
    }
    public function index()
    {

        $programs = program::where('program_online', '=', 'true')->get();
        $cities = DB::table('cities')->get();
        return view('front.onlineAdmission', [
            'programs' => $programs,
            'cities' => $cities,
        ]);
    } 
    public function store(Request $req)
    {
        // return $req;
        $req->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'contact' => 'required',
            'CNIC' => 'required',
            'domicileCity' => 'required',
            'DOB' => 'required',
            'image' => 'required | mimes:pdf,jpg,jpeg,doc,docx| max:5124',
            'program' => 'required',
            'gender' => 'required',
            'state' => 'required',
            'city' => 'required',
            'permanentAddress' => 'required',
            'mailingAddress' => 'required',
            'fatherName' => 'required',
            'fatherCNIC' => 'required',
            'fatherContact' => 'required',
            'relation' => 'required',
            'fatherProfession' => 'required',
            'fatherMonthlyIncome' => 'required',
            'matricBoard' => 'required',
            'matricRollNo' => 'required',
            'matricPassingYear' => 'required',
            'matricTotalMarks' => 'required',
            'matricObtainedMarks' => 'required',
            'matricPercentage' => 'required',
            // 'interBoard'=> 'required',
            // 'interRollNo'=> 'required',
            // 'interPassingYear'=> 'required',
            // 'interTotalMarks'=> 'required',
            // 'interObtainedMarks'=> 'required',
            // 'interPercentage'=> 'required',
            'matricEnglish' => 'required | numeric',
            'matricMath' => 'required | numeric',
            'matricPhysics' => 'required | numeric',
            'matricChemistry' => 'required | numeric',
            'matricScienceSubObtainedMarks' => 'required | numeric',
            'matricScienceSubTotalMarks' => 'required | numeric',
            // 'interEnglish'=> 'required',
            // 'interMath'=> 'required',
            // 'interPhysics'=> 'required',
            // 'interChemistry'=> 'required',
            // 'interScienceSubObtainedMarks'=> 'required',
            // 'interScienceSubTotalMarks'=> 'required',
            'matricCertificate' => 'required | mimes:pdf,jpg,jpeg,doc,docx | max:5124',
            'interCertificate' => 'required | mimes:pdf,jpg,jpeg,doc,docx | max:5124',
            'domicileImg' => 'required | mimes:pdf,jpg,jpeg,doc,docx | max:5124'

        ]);
        $image = $this->image($req->image);
        $domicileImg = $this->image($req->domicileImg);
        $matricCertificate = $this->image($req->matricCertificate);
        $interCertificate = $this->image($req->interCertificate);
        $matric = matric_result::create([
            'matric_board' => $req->matricBoard,
            'matric_rollNo' => $req->matricRollNo,
            'matric_passingYear' => $req->matricPassingYear,
            'matric_totalMarks' => $req->matricTotalMarks,
            'matric_obtainedMarks' => $req->matricObtainedMarks,
            'matric_percentage' => $req->matricPercentage,
            'matric_english' => $req->matricEnglish,
            'matric_physics' => $req->matricPhysics,
            'matric_chemistry' => $req->matricChemistry,
            'matric_math' => $req->matricMath,
            'matric_scienceSubObtainedMarks' => $req->matricScienceSubObtainedMarks,
            'matric_scienceSubTotalMarks' => $req->matricScienceSubTotalMarks,
            'matric_certificate' => $matricCertificate
        ]);
        $inter = inter_result::create([
            'inter_board' => $req->interBoard,
            'inter_rollNo' => $req->interRollNo,
            'inter_passingYear' => $req->interPassingYear,
            'inter_totalMarks' => $req->interTotalMarks,
            'inter_obtainedMarks' => $req->interObtainedMarks,
            'inter_percentage' => $req->interPercentage,
            'inter_english' => $req->interEnglish,
            'inter_physics' => $req->interPhysics,
            'inter_chemistry' => $req->interChemistry,
            'inter_math' => $req->interMath,
            'inter_scienceSubObtainedMarks' => $req->interScienceSubObtainedMarks,
            'inter_scienceSubTotalMarks' => $req->interScienceSubTotalMarks,
            'inter_certificate' => $interCertificate
        ]);
        $guardian = guardian_info::create([
            'guardian_name' => $req->fatherName,
            'guardian_CNIC' => $req->fatherCNIC,
            'guardian_contact' => $req->fatherContact,
            'guardian_whatsappContact' => $req->fatherWhatsappContact,
            'guardian_relation' => $req->relation,
            'guardian_profession' => $req->fatherProfession,
            'guardian_monthlyIncome' => $req->fatherMonthlyIncome
        ]);

        $student = student_personal_info::create([
            'student_firstName' => $req->firstName,
            'student_lastName' => $req->lastName,
            'student_contact' => $req->contact,
            'student_whatsappContact' => $req->whatsappContact,
            'student_email' => $req->email,
            'student_CNIC' => $req->CNIC,
            'student_domicileCity' => $req->domicileCity,
            'student_DOB' => $req->DOB,
            'student_image' => $image,
            'program_id' => $req->program,
            'student_gender' => $req->gender,
            'student_state' => $req->state,
            'city' => $req->city,
            'student_zip' => $req->zip,
            'student_permanentAddress' => $req->permanentAddress,
            'student_mailingAddress' => $req->mailingAddress,
            'matric_id' => $matric->id,
            'inter_id' => $inter->id,
            'guardian_id' => $guardian->id,
            // 'student_picknDrop'=>$req->busPickUps,
            // 'student_hostel'=>$req->requireHostel,
            'student_domicileImg' => $domicileImg
        ]);
        matric_result::where('matric_id', $matric->id)->update([
            'student_id' => $student->id
        ]);
        inter_result::where('inter_id', $inter->id)->update([
            'student_id' => $student->id
        ]);
        guardian_info::where('guardian_id', $guardian->id)->update([
            'student_id' => $student->id
        ]);
        student_personal_info::where('student_id', $student->id)
            ->update(['CV' => "Student" . $student->id]);
        // return $student;
        $this->createPDF($student->id);
        return redirect()->back()->with("status", "success")->with("No", $student->id);
    }


    public function programPre_requisite(Request $req)
    {
        return program::where('program_id', $req->id)->select('program_preRequisite')->get();
    }


    public function image($image)
    {

        $filenameWithExt = $image->getClientOriginalName();
        //get just filename
        $filename = pathinfo($filenameWithExt);
        //get just extension
        $extension = $image->extension();
        $nameToStore = $filename['filename'] . "_" . time() . "." . $extension;
        //Move to folder
        $path = $image->move('upload/Information/', $nameToStore);
        return $nameToStore;
    }
}
