@extends('layouts.app')

@section('content')

{{--{{ Form::model($studentsnerd, array('route' => array('admin.update', $students->id), 'method' => 'PUT')) }}

 <div class="form-group">
        {{ Form::label('firstname', 'Firstname') }}
        {{ Form::text('firstname', null, array('class' => 'form-control')) }}
    </div> --}}

<form action="{{url('detail/' . $students->id )}}" method="post">


{{method_field('PUT')}}
{{csrf_field()}} 

<div class="row">
<div class="col-lg-6" class="form-group">

    <label>Firstname</label>
    <input type="text" class="form-control"  value="{{$students->firstname}}" name="firstname">
</div>

<div class="col-lg-6" class="form-group">
    <label>Lastname</label>
    <input type="text" class="form-control" value="{{$students->lastname}}" name="lastname">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Phonenumber</label>
    <input type="text" class="form-control" value="{{$students->phone}}" name="phone">
</div>

<div class="col-lg-6" class="form-group">
    <label>Occupation</label>
    <input type="text" class="form-control" value="{{$students->occupation}}" name="occupation">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Birthdate</label>
    <input type="date" class="form-control" value="{{$students->birthdate}}" name="birthdate">
</div>

<div class="col-lg-6" class="form-group">
    <label>Street</label>
    <input type="text" class="form-control" value="{{$students->street}}" name="street">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Streetnumber</label>
    <input type="number" class="form-control" value="{{$students->street_number}}" name="street_number">
</div>

<div class="col-lg-6" class="form-group">
    <label>Postelcode</label>
    <input type="number" class="form-control" value="{{$students->plz}}" name="plz">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>City</label>
    <input type="text" class="form-control" value="{{$students->city}}" name="city">
</div>

<div class="col-lg-6" class="form-group">
    <label>Country</label>
    <input type="text" class="form-control" value="{{$students->country}}" name="country">
</div>
</div>

<div style="margin-top: 10px;" class="row">
<div class="col-lg-12" class="form-group">
<textarea class="form-control" value="{{$students->essay}}" name="essay" rows="5" cols="40" ></textarea>
<input type="hidden"  value="{{$students->user_id}}" name="user_id">
</div>
</div>

<div style="margin-top: 10px;" class="row">
<div class="col-md-5">
</div>
<input class="btn-lg btn-primary col-md-2" type="submit" name="submit" value="Update">
</div>
<div class="col-md-5">
</div>
</form> 




@endsection
