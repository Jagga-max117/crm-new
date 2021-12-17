<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\subject_area;
use App\Models\course;
use App\Models\school;
use App\Models\Relationship;
use App\Models\Student_type;
use App\Models\Country_code;
use App\Models\Gender;
use App\Models\Program_type;
use App\Models\entranceterm;
use App\Models\Title;
use App\Models\State;
use App\Models\Visa;
use App\Models\Offer;
use App\Models\Cas;
use App\Models\information;
use App\Models\Application;
use Illuminate\Http\Request;
use Carbon\Carbon;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Dotenv\Validator;
// use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Support\Facades\Auth;
// use PharIo\Manifest\Application;





class PostController extends Controller
{

    function index()
    {
        return view('signin');
    }
    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );
        if (Auth::attempt($user_data)) {
            // return redirect('main/successlogin');
            return redirect('dashboard');
        } else {
            return back()->with('error', 'Wrong details');
        }
    }
    function sucesslogin()
    {
        return view('dashboard');
    }
    function logout()
    {
        Auth::logout();
        return redirect('login');
    }


    // public function getuserroles(){
    //     $userroles = DB::table('userroles')->get();
    //     return view('country-codes', compact('userroles'));
    // }
    //----- course -----
    public function getcourse()
    {
        $courses = course::orderBy('course', 'ASC')->get();


        return view('course', compact('courses'));
    }
    // public function addpost(){
    //     return view('addcourse');
    // }
    public function addcoursesubmit(Request $request)
    {

        $this->validate($request, [
            'course' => 'string|unique:course'
        ]);


        DB::table('course')->insert([
            'course' => $request->course
        ]);
        return redirect('course');
    }
    public function delcourse($id)
    {
        DB::table('course')->where('course_id', $id)->delete();
        return back()->with('Record_deleted', 'Record has been deleted successfully!');
    }
    //----- countrycodes -----
    public function getcountrycodes()
    {
        $countrycodes = Country_code::orderBy('country_code', 'ASC')->get();
        $countries = DB::table('country')->get();
        return view('country-codes', compact('countrycodes', 'countries'));
    }
    // public function addcountrycodes(Request $request){
    //     DB::table('country_code')->insert([
    //         'country_code'=> $request -> countrycode
    //     ]);
    //     return back()->with('post_created', 'Updated succssfully!');
    //     // return redirect('country-codes');
    // }
    public function addcountrycodes(Request $request)
    {


        $this->validate($request, [
            'country_code' => 'string|unique:country_code'
        ]);

        // $request = DB::table('country_code')->join('country', 'country.id' , '=', 'country_code.code')
        //              ->select('country.country', 'country_code.code')->get();
        // // return back()->with('post_created', 'Updated succssfully!');
        // return $request;
        // return redirect('country-codes');
        // $request = DB::table('country_code');
        // ->leftJoin('country', 'country.country_id', '=', 'country_code.country_code_id');
        // ->insert([
        // 'country_code'=> $request->country_code[3],
        // 'country' => $request->country[1]
        // ]);
        // var_dump($request->country_code);

        // return back();

        // $this->validate($request,[

        //     'country'=>'country|unique:coun'
        // ]);

        $country = ($_POST["country"]);
        $countrycode = ($_POST["countrycode"]);
        DB::table('country_code')->insert([
            // 'country' => $country,
            'code' => $countrycode,
            'country_code' => $country . ' ' . $countrycode
        ]);

        return back()->with('Code_created', 'Country code has been saved successfully');
    }
    public function delcountrycode($id)
    {
        DB::table('country_code')->where('country_code_id', $id)->delete();
        return back()->with('Record_deleted', 'Record has been successfully deleted');
    }
    // ---------------gender----------
    public function getgender()
    {
        $genders = DB::table('gender')->get();
        return view('gender', compact('genders'));
    }
    public function addgender(Request $request)
    {

        $this->validate($request, [
            'gender' => 'string|unique:gender'
        ]);

        DB::table('gender')->insert([
            'gender' => $request->gender
        ]);
        return back();
    }
    public function delgender($id)
    {
        DB::table('gender')->where('gender_id', $id)->delete();
        return back()->with('Record_deleted', 'Record has been deleted successfully!');
    }
    // -----------------entranceterm----------------
    public function getentranceterm()
    {
        $entranceterms = entranceterm::orderBy('entrance_term', 'ASC')->get();
        return view('entrance-term', compact('entranceterms'));
    }
    public function addentranceterm(Request $request)
    {


        $this->validate($request, [
            'entrance_term' => 'string|unique:entrance_term'
        ]);

        DB::table('entrance_term')->insert([
            'entrance_term' => $request->entrance_term
        ]);
        return back();
    }
    public function delentranceterm($id)
    {
        DB::table('entrance_term')->where('entrance_term_id', $id)->delete();
        return back()->with("Record_deleted", "Record has been successfully deleted!");
    }
    // --------------------getcountries-----------
    public function getcountries()
    {
        $countries = Country::orderBy('country', 'ASC')->get();
        return view('countries', compact('countries'));
    }
    public function addcountries(Request $request)
    {

        $this->validate($request, [
            'country' => 'string|unique:country'
        ]);

        DB::table('country')->insert([
            'country' => $request->country
        ]);
        return back();
    }
    public function delcountries($id)
    {
        DB::table('country')->where('country_id', $id)->delete();
        return back()->with('Record_deleted', 'Record has been successfully deleted!');
    }
    //-------------states---------------
    public function getstates()
    {
        $states = Country::orderBy('country', 'ASC')->get();
        $state = State::orderBy('state', 'ASC')->get();
        return view('state', compact('states', 'state'));
    }
    public function addstates(Request $request)
    {
        $this->validate($request, [

            'state' => 'string|unique:state'
        ]);

        DB::table('state')->insert([
            'state' => $request->state,
            'country_id' => $request->country_id
        ]);
        return back();
    }
    public function delstates($id)
    {
        DB::table('state')->where('state_id', $id)->delete();
        return back()->with('Record_deleted', 'Record has been successfully deleted!');
    }
    // -----------relationships------
    public function getrelationships()
    {
        $relationships =  Relationship::orderBy('relationship', 'ASC')->get();
        return view('relationship', compact('relationships'));
    }
    public function addrelationships(Request $request)
    {

        $this->validate($request, [
            'relationship' => 'string|unique:relationship'
        ]);

        DB::table('relationship')->insert([
            'relationship' => $request->relationship
        ]);
        return back();
    }
    public function delrelationships($id)
    {
        DB::table('relationship')->where('relationship_id', $id)->delete();
        return back()->with('Record_deleted', 'Record has been successfully deleted!');
    }
    // -------------student-type---------
    public function getstudenttype()
    {
        $studenttypes =  Student_type::orderBy('student_type', 'ASC')->get();
        return view('student-type', compact('studenttypes'));
    }
    public function addstudenttype(Request $request)
    {


        $this->validate($request, [
            'student_type' => 'string|unique:student_type'
        ]);

        DB::table('student_type')->insert([
            'student_type' => $request->student_type
        ]);
        return back();
    }
    public function delstudenttype($id)
    {
        DB::table('student_type')->where('student_type_id', $id)->delete();
        return back()->with('Record_deleted', 'Record has been successfully deleted!');
    }
    // ---------program-type----------
    public function getprogramtype()
    {
        $programtypes = program_type::orderBy('program_type', 'ASC')->get();
        return view('program-type', compact('programtypes'));
    }
    public function addprogramtype(Request $request)
    {


        $this->validate($request, [
            'program_type' => 'string|unique:program_type'
        ]);

        DB::table('program_type')->insert([
            'program_type' => $request->program_type
        ]);
        return back();
    }
    public function delprogramtype($id)
    {
        DB::table('program_type')->where('program_type_id', $id)->delete();
        return back()->with('Record_deleted', 'Record has been successfully deleted!');
    }
    // ----------titles-----------
    public function gettitles()
    {
        $titles = Title::orderBy('title', 'ASC')->get();
        return view('title', compact('titles'));
    }
    public function addtitles(Request $request)
    {

        $this->validate($request, [
            'title' => 'string|unique:title'
        ]);

        DB::table('title')->insert([
            'title' => $request->title
        ]);
        return back();
    }
    public function deltitle($id)
    {
        DB::table('title')->where('title_id', $id)->delete();
        return back()->with('Record_deleted', 'Record has been successfully deleted!');
    }
    // -------------subjectarea------------------
    public function getsubjectarea()
    {
        $subjectareas = subject_area::orderBy('subject_area', 'ASC')->get();
        return view('subject-area', compact('subjectareas'));
    }
    public function addsubjectarea(Request $request)
    {

        $this->validate($request, [

            'subject_area' => 'string|unique:subject_area'
        ]);

        DB::table('subject_area')->insert([
            'subject_area' => $request->subject_area
        ]);
        return back();
    }
    public function delsubjectarea($id)
    {
        DB::table('subject_area')->where('subject_area_id', $id)->delete();
        return back()->with('Record_deleted', 'Record has been successfully deleted!');
    }
    // -------school-------
    public function getschool()
    {
        $schools = school::orderBy('school', 'ASC')->get();
        return view('school', compact('schools'));
    }
    public function addschool(Request $request)
    {
        $this->validate($request, [

            'school' => 'string|unique:school'
        ]);

        DB::table('school')->insert([
            'school' => $request->school
        ]);
        return back();
    }
    public function delschool($id)
    {
        DB::table('school')->where('school_id', $id)->delete();
        return back()->with('Record_deleted', 'Record has been successfully deleted!');
    }
    // ---------information--------
    public function getinformation()
    {
        $info = information::orderBy('information', 'ASC')->get();
        return view('information', compact('info'));
    }
    public function addinformation(Request $request)
    {

        $this->validate($request, [

            'information' => 'string|unique:information'
        ]);

        DB::table('information')->insert([
            'information' => $request->information
        ]);
        return back();
    }
    public function delinformation($id)
    {
        DB::table('information')->where('information_id', $id)->delete();
        return back()->with('Record_deleted', 'Record has been successfully deleted!');
    }
    // =======user========
    public function adduser(Request $request)
    {

        DB::table('user')->insert([
            'user' => $request->user
        ]);
        return back();
    }
    // ==============application================public function Coworking()
    public function mystudent()
    {
        $user_id = auth()->user()->id;
        $user_role = DB::select("SELECT users.role_id FROM users WHERE users.id=$user_id");
        // $role=$user_role;
        // if($role[0]->role_id == 1){dd($role[0]->role_id);}
        // $role=$user_role;
        // dd($user_role);
        // dd($user_id);
        // return view('coworking.dashboard');
        // $user_id = auth()->user()->id;
        if($user_role[0]->role_id == 2){
        $application = DB::select("SELECT * FROM application WHERE application.`user_id` = $user_id");
        $title = Title::orderBy('title_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
        $countrycodes = Country_code::orderBy('country_code_id', 'ASC')->get();
        $countries = Country::orderBy('country_id', 'ASC')->get();
        $relationships = Relationship::orderBy('relationship_id', 'ASC')->get();
        $states = State::orderBy('state_id', 'ASC')->get();
        $course = Course::orderBy('course_id', 'ASC')->get();
        $school = School::orderBy('school_id', 'ASC')->get();
        $programs = Program_type::orderby('program_type_id', 'ASC')->get();
        $visa = Visa::orderBy('visa_id', 'ASC')->get();
        $cas = Cas::orderBy('cas_id', 'ASC')->get();
        $offer = Offer::orderBy('offer_id', 'ASC')->get();
        // dd( $application );


        return view('my-students', compact('user_id', 'user_role', 'application', 'title', 'genders','cas', 'countrycodes','school', 'course', 'offer', 'visa', 'countries', 'relationships', 'states', 'programs'));
        }
        elseif($user_role[0]->role_id == 1){
        $application = DB::select("SELECT * FROM application");
        $title = Title::orderBy('title_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
        $countrycodes = Country_code::orderBy('country_code_id', 'ASC')->get();
        $countries = Country::orderBy('country_id', 'ASC')->get();
        $relationships = Relationship::orderBy('relationship_id', 'ASC')->get();
        $states = State::orderBy('state_id', 'ASC')->get();
        $course = Course::orderBy('course_id', 'ASC')->get();
        $school = School::orderBy('school_id', 'ASC')->get();
        $programs = Program_type::orderby('program_type_id', 'ASC')->get();
        $visa = Visa::orderBy('visa_id', 'ASC')->get();
        $cas = Cas::orderBy('cas_id', 'ASC')->get();
        $offer = Offer::orderBy('offer_id', 'ASC')->get();
        //  dd( $application );


        return view('my-students', compact('user_id', 'user_role', 'application', 'title', 'genders','cas', 'countrycodes','school', 'course', 'offer', 'visa', 'countries', 'relationships', 'states', 'programs'));
        }
    }

    public function applicationform()
    {
        // return view('coworking.dashboard');
        // $user_id = auth()->user()->id;
        // $application = DB::select("SELECT * FROM application");
        $title = Title::orderBy('title_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
        $countrycodes = Country_code::orderBy('country_code_id', 'ASC')->get();
        $countries = Country::orderBy('country_id', 'ASC')->get();
        $relationships = Relationship::orderBy('relationship_id', 'ASC')->get();
        $states = State::orderBy('state_id', 'ASC')->get();
        $programs = Program_type::orderby('program_type_id', 'ASC')->get();
        $visa = Visa::orderBy('visa_id', 'ASC')->get();
        $cas = Cas::orderBy('cas_id', 'ASC')->get();
        $school = School::orderBy('school_id', 'ASC')->get();
        $course = Course::orderBy('course_id', 'ASC')->get();
        $offer = Offer::orderBy('offer_id', 'ASC')->get();
        // foreach($school as $sc){
        // dd($sc->school_id);}

        return view('application', compact('title', 'genders', 'countrycodes', 'visa','cas', 'offer', 'course','school', 'countries', 'relationships', 'states', 'programs'));
    }



    public function getapplication($id)
    {

        $application = DB::select("SELECT *, application.id as application_id FROM application
        LEFT JOIN gender ON gender.`gender_id` = application.`gender`
        LEFT JOIN title ON title.`title` = application.`salutation`
        LEFT JOIN country ON country.`country_id` = application.`country_of_birth`
        LEFT JOIN visa ON visa.`visa_id` = application.`visa`
        LEFT JOIN offer ON offer.`offer_id` = application.`offer`
        LEFT JOIN course ON course.`course_id` = application.`course`
        LEFT JOIN school ON school.`school_id` = application.`school`
        LEFT JOIN cas ON cas.`cas_id` = application.`cas`
        
        LEFT JOIN country AS country_rsd ON country_rsd.`country_id` = application.`country_of_residence`
        LEFT JOIN country AS country_pnok ON country_pnok.`country_id` = application.`province_of_nok`
        LEFT JOIN country AS country_nok ON country_nok.`country_id` = application.`country_of_nok`

        LEFT JOIN country_code ON country_code.`country_code_id` = application.`mobile_short_code`
        LEFT JOIN relationship ON relationship.`relationship_id` = application.`relationship_to_applicant`
        WHERE application.id = $id");
       

        $amounta = count($application);
        $title = Title::orderBy('title_id', 'ASC')->get();;
        $genders = Gender::orderBy('gender_id')->get();
        $countrycodes = Country_code::orderBy('country_code_id')->get();
        $countries = Country::orderBy('country_id')->get();
        $relationships = Relationship::orderBy('relationship_id')->get();
        $states = State::orderBy('state_id')->get();
        $school = School::orderBy('school_id', 'ASC')->get();
        $course = Course::orderBy('course_id', 'ASC')->get();
        $programs = Program_type::orderby('program_type_id', 'ASC')->get();
        $visa = Visa::orderBy('visa_id', 'ASC')->get();
        $cas = Cas::orderBy('cas_id', 'ASC')->get();
        $offer = Offer::orderBy('offer_id', 'ASC')->get();
        return view('profile', compact('application', 'title', 'genders','cas', 'countrycodes','course','school', 'visa', 'offer', 'countries', 'relationships', 'states', 'amounta', 'programs'));
    }

    public function addapplication(Request $request)
    {

        // $this->validate($request, [


        //     // 'first_name' =>  'string|nullable',
        //     // 'middle_name' => 'string|nullable',
        //     // 'surname' => 'string|nullable',
        //     // 'email' => 'required|email|unique:enquiry',
        //     'homephone' => 'required',
        //     'mobilephone' => 'required',
        //     'phonenok' => 'required'

        // ]);

        $post = new Application();

        
        $user_id = auth()->user()->id;
        // dd($user_id);
        $post->user_id = $user_id;

        $post->salutation = $request->salutation;
        $post->surname = $request->surname;
        $post->firstname = $request->firstname;
        $post->middlename = $request->middlename;
        $post->date = $request->dob;
        $post->date_app_created = $request->date_app_created;
        $post->email = $request->email;
        $post->gender = $request->gender;
        $post->mobile_short_code = $request->mobileshortcode;
        $post->mobile_phone = $request->mobilephone;
        $post->home_short_code = $request->homeshortcode;
        $post->home_phone = $request->homephone;
        $post->birth_place = $request->birthplace;
        $post->country_of_birth = $request->countryofbirth;
        $post->citizenof = $request->citizenof;
        $post->home_street_address = $request->homestreetaddress;
        $post->city = $request->city;
        $post->postal_code = $request->postalcode;
        $post->country_of_residence = $request->countryofresidence;
        $post->relationship_to_applicant = $request->relationship;
        $post->firstname_of_nok = $request->firstnameofnok;
        $post->lastname_of_nok = $request->lastnameofnok;
        $post->street_address_of_nok = $request->streetaddressnok;
        $post->city_of_nok = $request->citynok;
        $post->postal_code_of_nok = $request->postalcodeofnok;
        $post->province_of_nok = $request->provincenok;
        $post->country_of_nok = $request->countrynok;
        $post->visa = $request->visa;
        $post->offer = $request->offer;
        $post->student_number = $request->student_number;
        $post->phone_of_nok = $request->phonenok;
        $post->email_of_nok = $request->emailnok;
        // $post->alevel = $request->alevel;
        $post->school = $request->school;
        $post->course = $request->course;
        // $post->ssce = $request->ssce;
        // $post->sponsor_letter = $request->sponsorletter;
        // $post->academic_ref_letter = $request->refletter;
        // $post->work_ref_letter = $request->refletterwork;
        // $post->testimonial = $request->testimonial;
        // $post->proficiency = $request->proficiency;
        $post->personal_statement = $request->personalstatement;
        // $post->data_page = $request->datapage;
        $post->passport_number = $request->passport_number;
        $post->app_fee = $request->appfee;
        $post->service_fee = $request->servicefee;
        // $post->program_type = $request->progtype;
        // $post->diploma_transcript = $request->diplomatranscript;
        // $post->tuberculosis=$request->tuberculosis;
        $post->cas = $request->cas;
        // $post->enrollment= $request->enrollment;
        // $post->tuition = $request->tuition;
        // $post->offerletter = $request->offerletter;
        // $post->degree_cert = $request->degreecert;
        // $post->undergrad_transcript = $request->undergradtranscript;
        // $post->cv = $request->cv;
        $document = $request->file('ssce');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->ssce = $imageName;
        }

        $document = $request->file('refletterwork');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->refletterwork = $imageName;
        }

        $document = $request->file('alevel');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->alevel = $imageName;
        }

        $document = $request->file('refletter');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->refletter = $imageName;
        }

        $document = $request->file('testimonial');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->testimonial = $imageName;
        }

         $document = $request->file('tuition');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->tuition = $imageName;
        }

         $document = $request->file('offerletter');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->offerletter = $imageName;
        }

         $document = $request->file('proficiency');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->proficiency = $imageName;
        }

        $document = $request->file('letterofsponsor');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->letterofsponsor = $imageName;
        }

        $document = $request->file('datapage');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->datapage = $imageName;
        }

        // $document = $request->file('personalstatement');
        // if (isset($document)) {
        //     $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
        //     $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
        //     $document->move(public_path('documents'), $imageName);
        //     $post->personalstatement = $imageName;
        // }

        $document = $request->file('diplomatranscript');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->diplomatranscript = $imageName;
        }

        $document = $request->file('undergradtranscript');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->undergradtranscript = $imageName;
        }

        $document = $request->file('degreecert');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->degreecert = $imageName;
        }
        
        $document = $request->file('cv');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->cv = $imageName;
        }

        $document = $request->file('tuberculosis');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->tuberculosis = $imageName;
        }

        $document = $request->file('enrollment');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageName);
            $post->enrollment = $imageName;
        }



        $image = $request->file('passport');
        if (isset($image)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $image->extension();
            $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $image->move(public_path('applicant_images'), $imageName);
            $post->passport = $imageName;
        }


// dd($post);

        $post->save();
        return back()->with('Record_updated', 'Your record has been successfully saved!');
    }
    // function index()
    // {
    //     return view('signin');
    // }
    // function checklogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     $user_data = array(
    //         'email' => $request->get('email'),
    //         'password' => $request->get('password'),
    //     );
    //     if (Auth::attempt($user_data)) {
    //         return redirect('main/successlogin');
    //     } else {
    //         return back()->with('error', 'Wrong details');
    //     }
    // }
    // function sucesslogin()
    // {
    //     return view('successlogin');
    // }
    // function logout()
    // {
    //     Auth::logout();
    //     return redirect('main');
    // }




    public function getreport()
    {
        return view('report');
    }



    public function editapplication($id)
    {
        $application = DB::select("SELECT *, application.id as main_id FROM application
                                 
        LEFT JOIN gender ON gender.`gender_id` = application.`gender`
        LEFT JOIN title ON title.`title` = application.`salutation`
        LEFT JOIN visa ON visa.`visa_id` = application.`visa`
        LEFT JOIN offer ON offer.`offer_id` = application.`offer`
        LEFT JOIN country ON country.`country_id` = application.`country_of_birth`
        LEFT JOIN country AS country_rsd ON country_rsd.`country_id` = application.`country_of_residence`
        LEFT JOIN country AS country_pnok ON country_pnok.`country_id` = application.`province_of_nok`
        LEFT JOIN country AS country_nok ON country_nok.`country_id` = application.`country_of_nok`
        LEFT JOIN school ON school.`school_id` = application.`school`
        LEFT JOIN course ON course.`course_id` = application.`course`
        
        LEFT JOIN cas ON cas.`cas_id` = application.`cas`

        LEFT JOIN country_code ON country_code.`country_code_id` = application.`mobile_short_code`
        LEFT JOIN relationship ON relationship.`relationship_id` = application.`relationship_to_applicant`
        WHERE application.id = $id");
        $title = Title::orderBy('title_id', 'ASC')->get();;
        $genders = Gender::orderBy('gender_id')->get();
        $countrycodes = Country_code::orderBy('country_code_id')->get();
        $countries = Country::orderBy('country_id')->get();
        $relationships = Relationship::orderBy('relationship_id')->get();
        $states = State::orderBy('state_id')->get();
        $school = School::orderBy('school_id', 'ASC')->get();
        $course = Course::orderBy('course_id', 'ASC')->get();
        $programs = Program_type::orderby('program_type_id', 'ASC')->get();
        $visa = Visa::orderBy('visa_id', 'ASC')->get();
        $cas = Cas::orderBy('cas_id', 'ASC')->get();
        $offer = Offer::orderBy('offer_id', 'ASC')->get();

        return view('editapplication', compact('application', 'title', 'genders','school','cas', 'visa','course', 'offer', 'countrycodes', 'countries', 'relationships', 'states', 'programs'));
    }

    public function updateapplication(Request $request)
    {
        $application = DB::select("SELECT * FROM application
        WHERE application.id = $request->application_id");
        // dd($application);

        $oldfile1 = public_path('documents').'/'.$application[0]->ssce;

        // dd($oldfile1);
        if($request->file('ssce') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile1)){
                unlink($oldfile1);
            }    
        $document = $request->file('ssce');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNamessce = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNamessce);
        }
        }elseif($request->file('ssce') == null){
            $imageNamessce = $application[0]->ssce;
        }

        $oldfile2 = public_path('documents').'/'.$application[0]->refletterwork;

        if($request->file('refletterwork') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile2) && !is_dir(public_path('documents').'/')){
                unlink($oldfile2);
            } 
        $document = $request->file('refletterwork');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNamerefletterwork = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNamerefletterwork);
        }
        }elseif($request->file('refletterwork') == null){
            $imageNamerefletterwork = $application[0]->refletterwork;
        }

        $oldfile3 = public_path('documents').'/'.$application[0]->alevel;

        if($request->file('alevel') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile3) && !is_dir(public_path('documents').'/')){
                unlink($oldfile3);
            } 
        $document = $request->file('alevel');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNamealevel = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNamealevel);
        }
        }elseif($request->file('alevel') == null){
            $imageNamealevel = $application[0]->alevel;
        }

        $oldfile4 = public_path('documents').'/'.$application[0]->refletter;

        if($request->file('refletter') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile4) && !is_dir(public_path('documents').'/')){
                unlink($oldfile4);
            } 
        $document = $request->file('refletter');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNamerefletter = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNamerefletter);
        }
        }elseif($request->file('refletter') == null){
            $imageNamerefletter = $application[0]->refletter;
        }

        $oldfile5 = public_path('documents').'/'.$application[0]->testimonial;

        if($request->file('testimonial') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile5) && !is_dir(public_path('documents').'/')){
                unlink($oldfile5);
            } 
        $document = $request->file('testimonial');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNametestimonial = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNametestimonial);
        }
        }elseif($request->file('testimonial') == null){
            $imageNametestimonial = $application[0]->testimonial;
        }

        $oldfile6 = public_path('documents').'/'.$application[0]->tuition;

        if($request->file('tuition') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile6) && !is_dir(public_path('documents').'/')){
                unlink($oldfile6);
            } 
         $document = $request->file('tuition');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNametuition = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNametuition);
        }
        }elseif($request->file('tuition') == null){
            $imageNametuition = $application[0]->tuition;
        }

        $oldfile7 = public_path('documents').'/'.$application[0]->offerletter;

        if($request->file('offerletter') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile7) && !is_dir(public_path('documents').'/')){
                unlink($oldfile7);
            }
         $document = $request->file('offerletter');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNameofferletter = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNameofferletter);
        }
        }elseif($request->file('offerletter') == null){
            $imageNameofferletter = $application[0]->offerletter;
        }

        $oldfile8 = public_path('documents').'/'.$application[0]->proficiency;

        if($request->file('proficiency') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile8) && !is_dir(public_path('documents').'/')){
                unlink($oldfile8);
            }
         $document = $request->file('proficiency');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNameproficiency = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNameproficiency);
        }
        }elseif($request->file('proficiency') == null){
            $imageNameproficiency = $application[0]->proficiency;
        }

        $oldfile9 = public_path('documents').'/'.$application[0]->letterofsponsor;

        if($request->file('letterofsponsor') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile9) && !is_dir(public_path('documents').'/')){
                unlink($oldfile9);
            }
        $document = $request->file('letterofsponsor');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNameletterofsponsor = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNameletterofsponsor);
        }
        }elseif($request->file('letterofsponsor') == null){
            $imageNameletterofsponsor = $application[0]->letterofsponsor;
        }

        $oldfile10 = public_path('documents').'/'.$application[0]->datapage;

        if($request->file('datapage') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile10) && !is_dir(public_path('documents').'/')){
            // DD($application[0]->datapage);
                unlink($oldfile10);
            }
        $document = $request->file('datapage');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNamedatapage = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNamedatapage);
        }
        }elseif($request->file('datapage') == null){
            $imageNamedatapage = $application[0]->datapage;
        }

        // $oldfile11 = public_path('documents').'/'.$application[0]->personalstatement;

        // if($request->file('personalstatement') !== null){

        //     //delete old image from the file if it exist.
        //     if(file_exists($oldfile11)){
        //         unlink($oldfile11);
        //     }
        // $document = $request->file('personalstatement');
        // if (isset($document)) {
        //     $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
        //     $imageName = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
        //     $document->move(public_path('documents'), $imageName);
        //     $post->personalstatement = $imageName;
        // }
        // }

        $oldfile12 = public_path('documents').'/'.$application[0]->diplomatranscript;

        if($request->file('diplomatranscript') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile12) && !is_dir(public_path('documents').'/')){
                unlink($oldfile12);
            }
        $document = $request->file('diplomatranscript');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNamediplomatranscript = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNamediplomatranscript);
        }
        }elseif($request->file('diplomatranscript') == null){
            $imageNamediplomatranscript = $application[0]->diplomatranscript;
        }

        $oldfile13 = public_path('documents').'/'.$application[0]->undergradtranscript;

        if($request->file('undergradtranscript') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile13) && !is_dir(public_path('documents').'/')){
            // dd($oldfile13);
                unlink($oldfile13);
            }
        $document = $request->file('undergradtranscript');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNameundergradtranscript = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNameundergradtranscript);
        }
        }elseif($request->file('undergradtranscript') == null){
            $imageNameundergradtranscript = $application[0]->undergradtranscript;
        }

        $oldfile14 = public_path('documents').'/'.$application[0]->degreecert;

        if($request->file('degreecert') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile14) && !is_dir(public_path('documents').'/')){
                unlink($oldfile14);
            }
        $document = $request->file('degreecert');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNamedegreecert = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNamedegreecert);
        }
        }elseif($request->file('degreecert') == null){
            $imageNamedegreecert = $application[0]->degreecert;
        }

        $oldfile15 = public_path('documents').'/'.$application[0]->cv;

        if($request->file('cv') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile15) && !is_dir(public_path('documents').'/')){
                unlink($oldfile15);
            }
        $document = $request->file('cv');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNamecv = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNamecv);
        }
        }elseif($request->file('cv') == null){
            $imageNamecv = $application[0]->cv;
        }

        $oldfile16 = public_path('documents').'/'.$application[0]->tuberculosis;

        if($request->file('tuberculosis') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile16) && !is_dir(public_path('documents').'/')){
                unlink($oldfile16);
            }
        $document = $request->file('tuberculosis');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNametuberculosis = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNametuberculosis);
        }
        }elseif($request->file('tuberculosis') == null){
            $imageNametuberculosis = $application[0]->tuberculosis;
        }

        $oldfile17 = public_path('documents').'/'.$application[0]->enrollment;

        if($request->file('enrollment') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldfile17) && !is_dir(public_path('documents').'/')){
                unlink($oldfile17);
            }
        $document = $request->file('enrollment');
        if (isset($document)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $document->extension();
            $imageNameenrollment = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $document->move(public_path('documents'), $imageNameenrollment);
        }
        }elseif($request->file('enrollment') == null){
            $imageNameenrollment = $application[0]->enrollment;
        }

        $oldimage = public_path('applicant_images').'/'.$application[0]->passport;

        if($request->file('passport') !== null){

            //delete old image from the file if it exist.
            if(file_exists($oldimage) && !is_dir(public_path('documents').'/')){
                unlink($oldimage);
            } 

        $image = $request->file('passport');
        if (isset($image)) {
            $imageName1 = time() . date("Y") . date("m") . date("d") . date("H") . date("i") . date("s") . rand(1, 999) . '.' . $image->extension();
            $imageNamepassport = str_replace(['/', '\'', '_', '*', '?', '<', '>', '(', ')', '|', ' '], '', $imageName1);
            $image->move(public_path('applicant_images'), $imageNamepassport);
            
        // dd($imageNamepassport);
        }
        }elseif($request->file('passport') == null){
            $imageNamepassport = $application[0]->passport;
        }

        DB::table('application')->where('id', $request->application_id)->update([

            'salutation' => $request->salutation,
            'surname' => $request->surname,
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'date' => $request->dob,
            'date_app_created'=> $request->date_app_created,
            'email' => $request->email,
            'gender' => $request->gender,
            'mobile_short_code' => $request->mobileshortcode,
            'mobile_phone' => $request->mobilephone,
            'home_short_code' => $request->homeshortcode,
            'home_phone' => $request->homephone,
            'birth_place' => $request->birthplace,
            'country_of_birth' => $request->countryofbirth,
            'citizenof' => $request->citizenof,
            'home_street_address' => $request->homestreetaddress,
            'city' => $request->city,
            'postal_code' => $request->postalcode,
            'country_of_residence' => $request->countryofresidence,
            'relationship_to_applicant' => $request->relationship,
            'firstname_of_nok' => $request->firstnameofnok,
            'lastname_of_nok' => $request->lastnameofnok,
            'street_address_of_nok' => $request->streetaddressnok,
            'city_of_nok' => $request->citynok,
            'postal_code_of_nok' => $request->postalcodeofnok,
            'province_of_nok' => $request->provincenok,
            'country_of_nok' => $request->countrynok,
            'phone_of_nok' => $request->phonenok,
            'email_of_nok' => $request->emailnok,
            'alevel' => $imageNamealevel,
            'ssce' => $imageNamessce,
            'letterofsponsor' => $imageNameletterofsponsor,
            'refletter' => $imageNamerefletter,
            'refletterwork' => $imageNamerefletterwork,
            'testimonial' => $imageNametestimonial,
            'proficiency' => $imageNameproficiency,
            'personal_statement' => $request->personalstatement,
            'datapage' => $imageNamedatapage,
            'passport_number' => $request->passport_number,
            'app_fee' => $request->appfee,
            'service_fee' => $request->servicefee,
            'school' => $request->school,
            'course' => $request->course,
            'enrollment' => $imageNameenrollment,
            'visa' => $request->visa,
            'offer' => $request->offer,
            'student_number' => $request->student_number,
            'program_type' => $request->progtype,
            'diplomatranscript' => $imageNamediplomatranscript,
            'tuberculosis'=>$imageNametuberculosis,
            'offerletter' => $imageNameofferletter,
            'tuition'=> $imageNametuition,
            'degreecert' => $imageNamedegreecert,
            'undergradtranscript' => $imageNameundergradtranscript,
            'cv' => $imageNamecv,
            'passport' => $imageNamepassport,



        
        
        ]);
        return redirect('/my-students')->with('Record_updated', 'Record successfully updated');
    }

    public function appreport()
    {
        $application = DB::select("SELECT *, application.id as main_id FROM application
                    lEFT JOIN title ON title.`title` = application.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = application.`gender`
                    LEFT JOIN country ON country.`country_id` = application.`country_of_birth`
                    
                    LEFT JOIN program_type ON program_type.`program_type_id` = application.`program_type`");


        $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
        $countries = Country::orderBy('country_id', 'ASC')->get();
        $visa = Visa::orderBy('visa_id', 'ASC')->get();
        $cas = Cas::orderBy('cas_id', 'ASC')->get();
        $offer = Offer::orderBy('offer_id', 'ASC')->get();





        return view('apreport', compact('application', 'title', 'course', 'genders', 'cas', 'visa','countries','offer', 'course', 'school', 'program_type'));
    }

    public function app_report(Request $request)
    {



        $start_date = Carbon::parse($request->start_date)
            ->toDateString();

        $end_date = Carbon::parse($request->end_date)
            ->toDateString();

        $gender = $request->gender;
        $country = $request->country_of_birth;
        $program_type = $request->program_type;
        
        if(isset($start_date) && ($end_date) && ($gender)){ 
        $application = DB::select("SELECT *, DATE(created_at), application.id as main_id FROM application
                    LEFT JOIN title ON title.`title` = application.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = application.`gender`
                    LEFT JOIN country ON country.`country_id` = application.`country_of_birth`
                    LEFT JOIN program_type ON program_type.`program_type_id` = application.`program_type` WHERE DATE(created_at) between '$start_date' and '$end_date' AND '$gender' = application.`gender`");


        $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
        $countries = Country::orderBy('country_id', 'ASC')->get();
         $visa = Visa::orderBy('visa_id', 'ASC')->get();
        $cas = Cas::orderBy('cas_id', 'ASC')->get();
        $offer = Offer::orderBy('offer_id', 'ASC')->get();


         
        
        return view('apreport', compact('application', 'title', 'countries', 'genders',   'program_type'));
}else{
        $application = DB::select("SELECT *, DATE(created_at), application.id as main_id FROM application
                    LEFT JOIN title ON title.`title` = application.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = application.`gender`
                    LEFT JOIN country ON country.`country_id` = application.`country_of_birth`
                    LEFT JOIN program_type ON program_type.`program_type_id` = application.`program_type` WHERE DATE(created_at) between '$start_date' and '$end_date' OR '$gender' = application.`gender` OR '$country' = application.`country_of_birth` OR '$program_type' = application.`program_type`")->paginate(7);

        


        $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
        $countries = Country::orderBy('country_id', 'ASC')->get();
         $visa = Visa::orderBy('visa_id', 'ASC')->get();
        $cas = Cas::orderBy('cas_id', 'ASC')->get();
        $offer = Offer::orderBy('offer_id', 'ASC')->get();


        
        return view('apreport', compact('application', 'title', 'countries', 'genders',   'program_type'));
        }

        if(isset($start_date) && ($end_date) && ($program_type)){ 
        $application = DB::select("SELECT *, DATE(created_at), application.id as main_id FROM application
                    LEFT JOIN title ON title.`title` = application.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = application.`gender`
                    LEFT JOIN country ON country.`country_id` = application.`country_of_birth`
                    LEFT JOIN program_type ON program_type.`program_type_id` = application.`program_type` WHERE DATE(created_at) between '$start_date' and '$end_date' AND '$gender' = application.`gender`");


        $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
        $countries = Country::orderBy('country_id', 'ASC')->get();
         $visa = Visa::orderBy('visa_id', 'ASC')->get();
        $cas = Cas::orderBy('cas_id', 'ASC')->get();
        $offer = Offer::orderBy('offer_id', 'ASC')->get();


        
        return view('apreport', compact('application', 'title', 'countries', 'genders',   'program_type'));
}else{
        $application = DB::select("SELECT *, DATE(created_at), application.id as main_id FROM application
                    LEFT JOIN title ON title.`title` = application.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = application.`gender`
                    LEFT JOIN country ON country.`country_id` = application.`country_of_birth`
                    LEFT JOIN program_type ON program_type.`program_type_id` = application.`program_type` WHERE DATE(created_at) between '$start_date' and '$end_date' OR '$gender' = application.`gender` OR '$country' = application.`country_of_birth` OR '$program_type' = application.`program_type`");



        $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
        $countries = Country::orderBy('country_id', 'ASC')->get();
         $visa = Visa::orderBy('visa_id', 'ASC')->get();
        $cas = Cas::orderBy('cas_id', 'ASC')->get();
        $offer = Offer::orderBy('offer_id', 'ASC')->get();


        
        return view('apreport', compact('application', 'title', 'countries', 'genders',   'program_type'));
}

if(isset($start_date) && ($end_date) && ($country)){ 
        $application = DB::select("SELECT *, DATE(created_at), application.id as main_id FROM application
                    LEFT JOIN title ON title.`title` = application.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = application.`gender`
                    LEFT JOIN country ON country.`country_id` = application.`country_of_birth`
                    LEFT JOIN program_type ON program_type.`program_type_id` = application.`program_type` WHERE DATE(created_at) between '$start_date' and '$end_date' AND '$gender' = application.`gender`");


        $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
        $countries = Country::orderBy('country_id', 'ASC')->get();
         $visa = Visa::orderBy('visa_id', 'ASC')->get();
        $cas = Cas::orderBy('cas_id', 'ASC')->get();
        $offer = Offer::orderBy('offer_id', 'ASC')->get();


        
        
        return view('apreport', compact('application', 'title', 'countries', 'genders',   'program_type'));
}else{
        $application = DB::select("SELECT *, DATE(created_at), application.id as main_id FROM application
                    LEFT JOIN title ON title.`title` = application.`salutation`
                    LEFT JOIN gender ON gender.`gender_id` = application.`gender`
                    LEFT JOIN country ON country.`country_id` = application.`country_of_birth`
                    LEFT JOIN program_type ON program_type.`program_type_id` = application.`program_type` WHERE DATE(created_at) between '$start_date' and '$end_date' OR '$gender' = application.`gender` OR '$country' = application.`country_of_birth` OR '$program_type' = application.`program_type`");



        $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
        $countries = Country::orderBy('country_id', 'ASC')->get();
         $visa = Visa::orderBy('visa_id', 'ASC')->get();
        $cas = Cas::orderBy('cas_id', 'ASC')->get();
        $offer = Offer::orderBy('offer_id', 'ASC')->get();


         
        
        return view('apreport', compact('application', 'title', 'countries', 'genders',   'program_type'));
}
    }

    public function applicantStatus()
    {
        

        $title = Title::orderBy('title_id', 'ASC')->get();
        $course = Course::orderby('course_id', 'ASC')->get();
        $information = Information::orderby('information_id', 'ASC')->get();
        $school = School::orderby('school_id', 'ASC')->get();
        $program_type = Program_type::orderby('program_type_id', 'ASC')->get();
        $subject_area = Subject_area::orderBy('subject_area_id', 'ASC')->get();
        $genders = Gender::orderBy('gender_id', 'ASC')->get();
        $countries = Country::orderBy('country_id', 'ASC')->get();
        $offer = Offer::orderBy('offer_id', 'ASC')->get();
        $visa = Visa::orderBY('visa_id', 'ASC')->get();

        $application = DB::table('application')
            ->select('*', 'application.id as main_id')
            ->paginate(7);
        // dd($application);
        // $applications = Application::orderBy('id', 'ASC');
        // dd($applications);



        return view('applicant-status', compact('application', 'title', 'course', 'genders', 'visa', 'offer', 'program_type'));
    }

    public function viewdoc($id)
    {
        $application = DB::select("SELECT *, application.id as main_id FROM application WHERE application.id = $id");

        return view('view-documents', compact('application'));
    }

    public function trackPayment()
    {
        return view('track-payment');
    }

    public function dashboard()
    {

        $capplication = DB::select("SELECT *, application.id as application_id FROM application");

        $xenquiry = DB::select("SELECT *, enquiry.id as main_id FROM enquiry");

         $xschools = school::orderBy('school', 'ASC')->get();

        $amounta = count($capplication);
        $amountc = count($xenquiry);
        $amountx = count($xschools);
        // dd($amounta);
        return view('dashboard', compact('capplication', 'xenquiry','xschools', 'amountx', 'amounta','amountc'));
    }
}
