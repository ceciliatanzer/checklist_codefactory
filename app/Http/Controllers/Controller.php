<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\checklist;
use Auth;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert (Request $req)
    {
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

        return redirect()->route('checklist');
    }

function insert_passport (Request $request){
     $checklist = \App\checklist::updateOrCreate([
    'user_id'   => Auth::user()->id,],
    [
    'passport'  => $request->get('passport'),
    ]);
return redirect()->route('checklist');
   }
  
function insert_financing (Request $request){
     $checklist = \App\checklist::updateOrCreate([
    'user_id'   => Auth::user()->id,],
    [
    'financing' => $request->get('financing'),
    ]);
return redirect()->route('checklist');
   }

function insert_insurance (Request $request){
    $checklist = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'insurance' => $request->get('insurance'),
   ]);
return redirect()->route('checklist');
  }

function insert_pass(Request $request){
    $pass = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'pass' => $request->get('pass'),
   ]);
return redirect()->route('checklist');
  }

function insert_visaform(Request $request){
    $visaform = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'visaform' => $request->get('visaform'),
   ]);
return redirect()->route('checklist');
  }

function insert_picture(Request $request){
    $picture = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'picture' => $request->get('picture'),
   ]);
return redirect()->route('checklist');
  }

function insert_travelreservation(Request $request){
    $travelreservation = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'travelreservation' => $request->get('travelreservation'),
   ]);
return redirect()->route('checklist');
  }

function insert_hotelreservation(Request $request){
    $hotelreservation = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'hotelreservation' => $request->get('hotelreservation'),
   ]);
return redirect()->route('checklist');
  }
  
function insert_employment(Request $request){
    $employment = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'employment' => $request->get('employment'),
   ]);
return redirect()->route('checklist');
  }

function insert_travelinsurance(Request $request){
    $travelinsurance = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'travelinsurance' => $request->get('travelinsurance'),
   ]);
return redirect()->route('checklist');
  }

function insert_financial_means(Request $request){
    $financial_means = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'financial_means' => $request->get('financial_means'),
   ]);
return redirect()->route('checklist');
  }

 function insert_passcopy(Request $request){
    $passcopy = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'passcopy' => $request->get('passcopy'),
   ]);
return redirect()->route('checklist');
  }

function insert_consularfee(Request $request){
    $consularfee = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,],
   [
   'consularfee' => $request->get('consularfee'),
   ]);
return redirect()->route('checklist');
  }

}
