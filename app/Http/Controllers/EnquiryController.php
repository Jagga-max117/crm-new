<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Title;
use App\Models\Status;
use App\Models\Course;
use App\Models\Information;
use App\Models\School;
use App\Models\Program_type;
use App\Models\Study_level;
use App\Models\Subject_area;
use App\Models\Gender;
use App\Models\Salutation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Dotenv\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class EnquiryController extends Controller
{

    function index()
    {
        return view('signin');
    }
    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphpNum|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );
        if (Auth::attempt($user_data)) {
            return redirect('main/successlogin');
        } else {
            return back()->with('error', 'Wrong details');
        }
    }
    function sucesslogin()
    {
        return view('successlogin');
    }
    function logout()
    {
        Auth::logout();
        return redirect('main');
    }

    public function addenquiry()
    {
        $title = Title::orderBy('title_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $status =  Status::orderBy('status_id', 'ASC')->get();
        return view('enquiry', compact('title', 'course', 'information', 'school', 'genders', 'program_type', 'subject_area', 'status'));

        //return view('');
    }
    //experience form
    // public function enquiryForm()
    // {
    //     // $title = ExperienceType::orderBy('experience_type_id', 'ASC')->get();
    //     // return view('', compact(''));
    // }

    public function createEnquiry(Request $request)
    {
        $this->validate($request, [


            // 'first_name' =>  'string|nullable',
            // 'middle_name' => 'string|nullable',
            // 'surname' => 'string|nullable',
            'email' => 'required|email|unique:enquiry',
            'phone_number' => 'required|digits:11'


        ]);

        // $validator = Validator::make(
        //     ['first_name' => 'Dayle'],
        //     ['name' => 'required|min:5'],
        //     ['first_name' =>  'string|nullable'],
        //     ['middle_name' => 'string|nullable'],
        //     ['surname' => 'string|nullable'],
        //     ['email' => 'required|email|unique:enquiry'],
        //     ['phone_number' => 'required|digits:11']

        // );



        $post = new Enquiry();
        $post->salutation = $request->salutation;
        $post->first_name = $request->first_name;
        $post->middle_name = $request->middle_name;
        $post->surname = $request->surname;
        $post->email = $request->email;
        $post->phone_number = $request->phone_number;
        $post->gender = $request->gender;
        $post->study_level = $request->study_level;
        $post->course_of_study = $request->course_of_study;
        $post->subject_area = $request->subject_area;
        $post->preferred_school = $request->preferred_school;
        $post->how_did_you_hear_about_school = $request->how_did_you_hear_about_school;
        $post->how_did_you_hear_about_ieis = $request->how_did_you_hear_about_ieis;
        // dd($request);
        $post->save();

       

        return back()->with('enquiry_created', "Enquiry has been created successfully");
    }

    // public function getstatus()
    // {
    //     $enquiry = DB::table('enquiry')->join('status', 'status.status_id', '=', 'enquiry.status_id')->select('enquiry.*', 'status.*')->paginate(10);
    //     dd($enquiry);
    //     return view("status", compact("enquiry"));
    // }

    public function getenquiry()
    {
        $enquiry = DB::select("SELECT *, enquiry.status, enquiry.id as id FROM enquiry
        LEFT JOIN status ON status.`status_id` = enquiry.`status`
        LEFT JOIN title ON title.`title` = enquiry.`salutation`");
        // dd($enquiry);
        $status = Status::orderBy('status_id', 'ASC')->get();
        $title = Title::orderBy('title_id', 'ASC')->get();

        // dd($enquiry);



        return view('status', compact('enquiry', 'status', 'title'));
    }


    function statusupdate(Request $request)
    {
        // dd($request);
        $id = $request->id;
        // dd($id);
        // dd($enquiry);
        if (isset($id)) {
            DB::table('enquiry')->where('id', $id)->update([
                'status' => $request->status
            ]);
        }

        return back()->with('enquiry', 'Status updated');
    }


    public function editenquiry($id)
    {
        $enquiry = DB::select("SELECT *, enquiry.id as main_id FROM enquiry
         
         
                LEFT JOIN title ON title.`title_id` = enquiry.`salutation`
                LEFT JOIN gender ON gender.`gender_id` = enquiry.`gender`
                LEFT JOIN course ON course.`course_id` = enquiry.`course_of_study`
                LEFT JOIN program_type ON program_type.`program_type_id`= enquiry.`study_level`
                LEFT JOIN subject_area ON subject_area.`subject_area_id` = enquiry.`subject_area`
                LEFT JOIN school ON school.`school_id` = enquiry.`preferred_school`
                LEFT JOIN information ON information.`information_id` = enquiry.`how_did_you_hear_about_school`
                LEFT JOIN information AS information_hdhaus ON information_hdhaus.`information_id` = enquiry.`how_did_you_hear_about_ieis`
                LEFT JOIN  status ON status.`status_id` = enquiry.`status`
                WHERE enquiry.id = $id");

                $amountc = count($enquiry);

       

        $title = Title::orderBy('title_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $status =  Status::orderBy('status_id', 'ASC')->get();


        return view('editenquiry', compact('enquiry', 'title',  'information', 'genders', 'course', 'school','amountc', 'program_type', 'subject_area', 'status'));
    }



    public function updateenquiry(Request $request)
    {
        DB::table('enquiry')->where('id', $request->main_id)->update([

            'salutation' => $request->salutation,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'study_level' => $request->study_level,
            'course_of_study' => $request->course_of_study,
            'subject_area' => $request->subject_area,
            'preferred_school' => $request->preferred_school,
            'how_did_you_hear_about_school' => $request->how_did_you_hear_about_school,
            'how_did_you_hear_about_ieis' => $request->how_did_you_hear_about_ieis,
        ]);
        
        return redirect('/status')->with('Record_updated', 'Record successfully updated');
    }


    public function getreport()
    {
        $enquiry = DB::select("SELECT *, enquiry.id  as id FROM enquiry
                    lEFT JOIN title ON title.`title_id` = enquiry.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = enquiry.`gender`
                    LEFT JOIN subject_area ON subject_area.`subject_area_id` = enquiry.`subject_area`
                    LEFT JOIN school ON school.`school_id` = enquiry.`preferred_school`
                    LEFT JOIN course ON course.`course_id` = enquiry.`course_of_study`
                    LEFT JOIN program_type ON program_type.`program_type_id` = enquiry.`study_level`");


        $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();


        return view('report', compact('enquiry', 'title', 'course', 'genders', 'school', 'subject_area', 'program_type'));
    }

    public function daily_report(Request $request)
    {



        $start_date = Carbon::parse($request->start_date)
            ->toDateString();

        $end_date = Carbon::parse($request->end_date)
            ->toDateString();

        $gender = $request->gender;
        $course = $request->course;
        $school = $request->school;
          
         if(isset($start_date) && ($end_date) && ($gender)){
        $enquiry = DB::select("SELECT *, DATE(created_at), enquiry.id  as id FROM enquiry
                    lEFT JOIN title ON title.`title` = enquiry.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = enquiry.`gender`
                    LEFT JOIN subject_area ON subject_area.`subject_area_id` = enquiry.`subject_area`
                    LEFT JOIN school ON school.`school_id` = enquiry.`preferred_school`
                    LEFT JOIN course ON course.`course_id` = enquiry.`course_of_study`
                    LEFT JOIN program_type ON program_type.`program_type_id` = enquiry.`study_level` WHERE DATE(created_at) between '$start_date' and '$end_date' or $gender = enquiry.`gender` or $course = enquiry.`course_of_study`or $school = enquiry.`preferred_school`;");

       


        $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
       
        return view('report', compact('enquiry', 'title', 'course', 'genders', 'school', 'subject_area', 'program_type'));
    }
    else{
         $enquiry = DB::select("SELECT *, DATE(created_at), enquiry.id  as id FROM enquiry
                    lEFT JOIN title ON title.`title` = enquiry.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = enquiry.`gender`
                    LEFT JOIN subject_area ON subject_area.`subject_area_id` = enquiry.`subject_area`
                    LEFT JOIN school ON school.`school_id` = enquiry.`preferred_school`
                    LEFT JOIN course ON course.`course_id` = enquiry.`course_of_study`
                    LEFT JOIN program_type ON program_type.`program_type_id` = enquiry.`study_level` WHERE DATE(created_at) between '$start_date' and '$end_date' or $gender = enquiry.`gender` or $course = enquiry.`course_of_study`or $school = enquiry.`preferred_school`;");


         $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
       
        return view('report', compact('enquiry', 'title', 'course', 'genders', 'school', 'subject_area', 'program_type'));
    }

    if(isset($start_date) && ($end_date) && ($course)){
        $enquiry = DB::select("SELECT *, DATE(created_at), enquiry.id  as id FROM enquiry
                    lEFT JOIN title ON title.`title` = enquiry.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = enquiry.`gender`
                    LEFT JOIN subject_area ON subject_area.`subject_area_id` = enquiry.`subject_area`
                    LEFT JOIN school ON school.`school_id` = enquiry.`preferred_school`
                    LEFT JOIN course ON course.`course_id` = enquiry.`course_of_study`
                    LEFT JOIN program_type ON program_type.`program_type_id` = enquiry.`study_level` WHERE DATE(created_at) between '$start_date' and '$end_date' or $gender = enquiry.`gender` or $course = enquiry.`course_of_study`or $school = enquiry.`preferred_school`;");

       


        $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
       
        return view('report', compact('enquiry', 'title', 'course', 'genders', 'school', 'subject_area', 'program_type'));
    }
    else{
         $enquiry = DB::select("SELECT *, DATE(created_at), enquiry.id  as id FROM enquiry
                    lEFT JOIN title ON title.`title` = enquiry.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = enquiry.`gender`
                    LEFT JOIN subject_area ON subject_area.`subject_area_id` = enquiry.`subject_area`
                    LEFT JOIN school ON school.`school_id` = enquiry.`preferred_school`
                    LEFT JOIN course ON course.`course_id` = enquiry.`course_of_study`
                    LEFT JOIN program_type ON program_type.`program_type_id` = enquiry.`study_level` WHERE DATE(created_at) between '$start_date' and '$end_date' or $gender = enquiry.`gender` or $course = enquiry.`course_of_study`or $school = enquiry.`preferred_school`;");


         $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
       
        return view('report', compact('enquiry', 'title', 'course', 'genders', 'school', 'subject_area', 'program_type'));
    }
        if(isset($start_date) && ($end_date) && ($school)){
        $enquiry = DB::select("SELECT *, DATE(created_at), enquiry.id  as id FROM enquiry
                    lEFT JOIN title ON title.`title` = enquiry.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = enquiry.`gender`
                    LEFT JOIN subject_area ON subject_area.`subject_area_id` = enquiry.`subject_area`
                    LEFT JOIN school ON school.`school_id` = enquiry.`preferred_school`
                    LEFT JOIN course ON course.`course_id` = enquiry.`course_of_study`
                    LEFT JOIN program_type ON program_type.`program_type_id` = enquiry.`study_level` WHERE DATE(created_at) between '$start_date' and '$end_date' or $gender = enquiry.`gender` or $course = enquiry.`course_of_study`or $school = enquiry.`preferred_school`;");

       


        $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
       
        return view('report', compact('enquiry', 'title', 'course', 'genders', 'school', 'subject_area', 'program_type'));
    }
    else{
         $enquiry = DB::select("SELECT *, DATE(created_at), enquiry.id  as id FROM enquiry
                    lEFT JOIN title ON title.`title` = enquiry.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = enquiry.`gender`
                    LEFT JOIN subject_area ON subject_area.`subject_area_id` = enquiry.`subject_area`
                    LEFT JOIN school ON school.`school_id` = enquiry.`preferred_school`
                    LEFT JOIN course ON course.`course_id` = enquiry.`course_of_study`
                    LEFT JOIN program_type ON program_type.`program_type_id` = enquiry.`study_level` WHERE DATE(created_at) between '$start_date' and '$end_date' or $gender = enquiry.`gender` or $course = enquiry.`course_of_study`or $school = enquiry.`preferred_school`;");


         $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
       
        return view('report', compact('enquiry', 'title', 'course', 'genders', 'school', 'subject_area', 'program_type'));
    }
    }
}
