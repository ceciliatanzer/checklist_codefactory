<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\checklist;
use App\Students;
use View;
use Auth;
use DB;

class Controller extends BaseController
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    
    public function index(){
      $id = Auth::id();
      $students = DB::table('students')->where('user_id','=',$id)->pluck('id');
     
      return View::make('checklist', compact('students', 'id')); 
             

      }
      public function show($id)
      {
          
          $students = Students::find($id);
          return View::make('checklist')
                  ->with('students', $students);
      }

     

    function insert (Request $req)
    {


      $this->validate(request(), [
        'firstname' => 'required',
        'lastname' => 'required',
        'phone' => 'required',
        'occupation' => 'required',
        'birthdate' => 'required',
        'street' => 'required',
        'street_number' => 'required',
        'plz' => 'required',
        'city' => 'required',
        'country' => 'required',
        'essay' => 'required'
    ]);



        $firstname = $req->input('firstname');
        $lastname = $req->input('lastname');
        $phone = $req->input('phone');
        $occupation = $req->input('occupation');
        $birthdate = $req->input('birthdate');
        $street = $req->input('street');
        $street_number = $req->input('street_number');
        $plz = $req->input('plz');
        $city = $req->input('city');
        $country = $req->input('country');
        $essay = $req->input('essay');
        $id = Auth::id();
        $data = array (
        'firstname' => $firstname,
        'lastname' => $lastname,
        'phone' => $phone,
        'occupation' => $occupation,
        'birthdate' => $birthdate,
        'street' => $street,
        'street_number' => $street_number,
        'plz' => $plz,
        'city' => $city,
        'country' => $country,
        'essay' => $essay,
        'user_id' => $id
    );

        DB::table('students')->insert($data);

        return Redirect::to('checklist');
    }

function insert_passport (Request $request){
     $checklist = \App\checklist::updateOrCreate([
    'user_id'   => Auth::user()->id,],
    [
    'passport'  => $request->get('passport'),
    ]);
    return Redirect::to('checklist');
   }
  
function insert_financing (Request $request){
     $checklist = \App\checklist::updateOrCreate([
    'user_id'   => Auth::user()->id,],
    [
    'financing' => $request->get('financing'),
    ]);
    return Redirect::to('checklist');
   }

function insert_insurance (Request $request){
    $checklist = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'insurance' => $request->get('insurance'),
   ]);
   return Redirect::to('checklist');
  }

function insert_pass(Request $request){
    $pass = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'pass' => $request->get('pass'),
   ]);
   return Redirect::to('checklist');
  }

function insert_visaform(Request $request){
    $visaform = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'visaform' => $request->get('visaform'),
   ]);
   return Redirect::to('checklist');
  }

function insert_picture(Request $request){
    $picture = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'picture' => $request->get('picture'),
   ]);
   return Redirect::to('checklist');
  }

function insert_travelreservation(Request $request){
    $travelreservation = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'travelreservation' => $request->get('travelreservation'),
   ]);
   return Redirect::to('checklist');
  }

function insert_hotelreservation(Request $request){
    $hotelreservation = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'hotelreservation' => $request->get('hotelreservation'),
   ]);
   return Redirect::to('checklist');
  }
  
function insert_employment(Request $request){
    $employment = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'employment' => $request->get('employment'),
   ]);
   return Redirect::to('checklist');
  }

function insert_travelinsurance(Request $request){
    $travelinsurance = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'travelinsurance' => $request->get('travelinsurance'),
   ]);
   return Redirect::to('checklist');
  }

function insert_financial_means(Request $request){
    $financial_means = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'financial_means' => $request->get('financial_means'),
   ]);
   return Redirect::to('checklist');
  }

 function insert_passcopy(Request $request){
    $passcopy = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'passcopy' => $request->get('passcopy'),
   ]);
   return Redirect::to('checklist');
  }

function insert_consularfee(Request $request){
    $consularfee = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'consularfee' => $request->get('consularfee'),
   ]);
   return Redirect::to('checklist');
  }

}
