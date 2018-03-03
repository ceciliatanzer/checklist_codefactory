@extends('layouts.app')
@section('content')
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Laravel</title>
        

       
    </head>
    <body>




<div class="container-fluid">
<div class="row w3-container w3-center" style="padding:110px 16px">
<div class="col-lg-6 col-lg-offset-3">

  <h1 class="w3-jumbo">What are you waiting for?</h1>
  <div class="w3-xlarge">
  
    <p>Average Full-Stack Developer Salary $88,488</p>
    <p>Life Changing Experience</p>
    <p>In-Demand Career</p>
    <br>
    <p>Refer a friend and receive 10% off your cost up to $10,000</p>  
    </div>
    <a href="{{url('/register')}}" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Register</a>
  

</div>
</div>


<br>


<div class="row">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 polaroid">

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 con">

<img src="/img\chris.png" alt="CTO" width="100%" height="100%">
<div class="overlay">
    <div class="text">-Christoph Pirringer <br> CTO</div>
  </div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 cont">
<h3>"Coding is THE most important skill of the 21st century. With it, you can change everything."</h3>
</div>
</div>
</div>


<div class="row">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 polaroid">
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 cont">
<h3>"At CodeFactory, I learned more professional skills in such a short time than I ever thought possible. Even before the End of the course, I had companies looking to hire me!"</h3>

</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 con">

<img src="/img\stu.png" alt="CTO" width="100%" height="100%">
<div class="overlay">
    <div class="text">-Simona Mirauta</div>
  </div>
</div>
</div>
</div>



</div>

<div class="row">

<div class="col-lg-offset-3 col-lg-6">
<h2 style="color: #831213; font-family: Chivo !important">Get a new career and the experience of a lifetime </h2>
</div>
</div>

<div class="row">
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
</div>

<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
    <h3 style="color: #831213; font-family: Chivo !important">The Package:</h3>
    <ul>
        <li>4 Months Full-Time Course in Vienna</li>
        <li>Housing and Flights</li>
        <li>HTML5, CSS3, JavaScript, JQuery, Bootstrap, Project Documentaion, TypeScript, AngularJS 4.0</li>
        <li>SQL(MySQL), SCRUM, PHP, AJAX, Symphony PHP framework, WorldPress, Software Testing AND Many other Skills</li>
        <li>Only $18.500</li>
    </ul>
</div>

<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
    <h3 style="color: #831213; font-family: Chivo !important">Additional Perks:</h3>
    <ul>
        <li>Graduation in Salzburg, Austria</li>
        <li>Food and Insurance</li>
        <li>Finals Week on the beach</li>
        <li>Tours, Hackthons, enjoying Vienna's nightlife, and other fun group activities</li>
    </ul>
</div>

<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
</div>

</div>







<div class="row">
    <div class="col-lg-12">
        <img src="/img\wien4.jpg" alt="wien" width="100%" height="313px">
    </div>
    

    <div class="col-lg-offset-2 col-lg-8">
    <h2 style="color: #831213; font-family: Chivo !important">Contact Us Here:</h2>
    <br>
    <h4><a href="https://www.facebook.com/CodeFactoryVienna/">https://www.facebook.com/CodeFactoryVienna/</a></h4>
    <h4>office@codefactory.wien</h4>
    <h4 style="color: #831213;">+43 699 12255185</h4>
    <br>
    <img src="/img\logo.png" alt="LOGO" width="330px" height="120px">
    </div>
    
</div>





</div> <!-- end container-->

        
    </body>
    @endsection
