<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

<nav class="navbar navbar-light bg-faded">
  <div class="row">
  <div class="col-lg-2">
  <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img\logo.png" alt="LOGO" width="100%" height="50px">
</a>
  </div>
  </div>
</nav>
    <div id="app">
    <nav class="navbar navbar-inverse bg-inverse">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                    CodeFactory
                    </a>

                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li class="col-lg-4"><a href="{{ url('/login') }}">Login</a></li>
                        <li class="col-lg-4"><a href="{{ url('/register') }}">Register</a></li>
                    
                        @else

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li><a href="{{ url('/checklist') }}">checklist</a></li>

                             
                                   
                                       <li><a href="{{ URL::to('myaccount/' . $students[0]) }}">myaccount</a></li>

                              
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>


@if (count($errors))
<div class="form-group col-lg-12">
<h2>Please fill these fields up</h2>
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
</div>
@endif

<div class="container-fluid">
  <div style="margin-top: -40px;" class="row">
    <div class="col-md-12 text-center">
    <div class="col-md-4 col-sm-4 col-xs-12"> <a href="#" class="btn btn-sm animated-button thar-one" onclick="openCity(event, 'Passport')">Step 1 Passport</a> </div>
    <div class="col-md-4 col-sm-4 col-xs-12"> <a href="#" class="btn btn-sm animated-button thar-two" onclick="openCity(event, 'Finance')"> Step 2 Finance and Insurance</a> </div>
    <div class="col-md-4 col-sm-4 col-xs-12"> <a href="#" class="btn btn-sm animated-button thar-one" onclick="openCity(event, 'Visa')" >Step 3 Visa</a> </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div id="Passport" class="col-md-12 tabcontent">  
<script src="{{ asset('js/app.js') }}"></script>
<div class="col-md-2">
</div>
<div class="col-md-8 text-center">
<form action="/insert_passport" method="post">
{{csrf_field()}}
Do you have a passport? <br>
Yes 
<input type="checkbox" name="passport" id="passportYes" value="1" onchange="this.form.submit()"/>
No
<input type="checkbox" name="passport" id="passportNo" value="0"/>
<div>
What you need for a passport <a href="https://www.usps.com/international/passports.htm">Link</a>
</div>
</form>
</div>
<div class="col-md-2">
</div>
</div>



<div class="container-fluid">
  <div class="row">
    <div id="Finance" class="col-md-12 tabcontent">  
<script src="{{ asset('js/app.js') }}"></script>
<div class="col-md-2">
</div>
<div class="col-md-8 text-center">
<form action="/insert_financing" method="post">
{{csrf_field()}}
(You must have financing available or be approved for financing in order to obtain your VISA. 
We recommend getting approved, getting your VISA, and then taking the loan out.) <br>

I already have 18,500$ 
<input type="checkbox" name="financing" id="financingYes" value="1" onchange="this.form.submit()"/>
<br>
I need financing
<input type="checkbox" name="financing" id="financingNo" value="0"/>
<input type="submit" name"submit" value="Add">

<div>
b.i. Since we are a coding bootcamp, traditional student financing is not an option. The best option is to obtain a ‘personal loan.’ We also recommend stating the purpose of the loan as “Travel.”  
b.i.1. We recommend applying to your local bank first.
b.i.2. Another good place to start is www.lendingtree.com Lending Tree also offers a free credit rating. 
b.i.3. https://personalloans.com/
b.i.4. https://www.lendingclub.com/loans/personal-loans
b.i.5. https://apply.santanderbank.com/personal/forms/ploan.aspx
b.i.6. https://www.marcus.com/us/en
b.i.7. Credit Card
</div>

<br><br><br>

</form>

<form action="/insert_insurance" method="post">
{{csrf_field()}}
Insurance form filled out
Yes 
<input type="checkbox" name="insurance" id="insuranceYes" value="1" onchange="this.form.submit()"/>

No
<input type="checkbox" name="insurance" id="insuranceNo" value="0"/>
<input type="submit" name"submit" value="Add">

<div>
Info info info
</div>
</form>
</div>
<div class="col-md-2">
</div>
</div>

<div class="container-fluid">
  <div class="row">
    <div id="Visa" class="col-md-12 tabcontent">  
<script src="{{ asset('js/app.js') }}"></script>
<div class="col-md-1">
</div>
<div class="col-md-10">

<div id="list_visa" >
    This course is 4 months long and will require a D VISA. The application process can take up to 15 days. We recommend applying 2 months before the course start date.
</div>

<div id="list_visa" style="padding-top:10px;">
    You can view a complete form and learn more about the process here: <a href="http://www.austria.org/visa-application/">austria.org/visa-application</a>
</div>
 
<div id="list_visa" style="padding-top:10px;">
    Please note that Coding Bootcamps are not recognized by the USA or Austria as accredited schools. You must apply for the D VISA as a tourist and state you are attending a bootcamp.
</div>
 
<div style="width:100%; font-family: Chivo !important; font-size:18px;  color:#000; padding-left:8px; padding-top:10px;">
<i> <b>  You will need the following:</b></i>
    </div>
<div id="list2">
   <ol>
      <li><p style="font-family: Chivo !important; font-size:18px; color:#000;" >Proof of financing. Once approved by a bank you will need the letter of approval. We recommend not taking the loan out until after you have received your VISA.</li>
      <li><p style="font-family: Chivo !important; font-size:18px; color:#000;">The Consular Fee:<a href="http://www.austria.org/consular-fees"> consular-fees</a></p></li>
      <li><p style="font-family: Chivo !important; font-size:18px; color:#000;">ALL visa applicants must appear in person at the Austrian Embassy/Consulate. The Austrian Embassy and Consulates General do not accept visa applications by mail.</p></li>
      <li><p style="font-family: Chivo !important; font-size:18px; color:#000;">If you wish to have your documents returned by U.S. mail, please enclose a self-addressed, stamped envelope (including the Certified Mail Receipt) with your application. The Austrian Embassy or Consulate General is not responsible for documents after they are mailed.</p></li>
      </ol>
    </div>

    <div style="width:100%; font-family: Chivo !important; font-size:18px;  color:#000; padding-left:8px;">
    <i> <b> You will need to check the follwing list to be able to enroll:</b></i>
    </div>
    <div id="list2">
        <ol>
        <form action="/insert_pass" method="post">{{csrf_field()}} 
        <li><p style="font-family: Chivo !important; font-size:18px; color:#000;">
        Valid and signed passport or travel document (passport/travel document must be valid for at least three months after the date of departure from Austria or the Schengen zone. Further, the first issue date of your passport must not be more than 10 years ago, and it must provide at least two empty pages. In the case of minors, a notarized signature of parent or guardian is required.)
        <br>
        Yes 
        <input type="checkbox" name="pass"  value="1" onchange="this.form.submit()"/>
        No
        <input type="checkbox" name="pass"  value="0"/>
        <input class="btn-sm btn-default"  type="submit" name"submit" value="Add">  
        </p></li> </form> 

        <form action="/insert_visaform" method="post">{{csrf_field()}} 
        <li><p style="font-family: Chivo !important; font-size:18px; color:#000;">
        <a href="https://static1.squarespace.com/static/54b9309be4b06e38ad5da1ca/t/55e75a54e4b0c94c8afbdc59/1441225300774/Formular_D_Antrag.pdf">D VISA Form</a>
<br>
        Yes 
<input type="checkbox" name="visaform"  value="1" onchange="this.form.submit()"/>
No
<input type="checkbox" name="visaform"  value="0"/>
<input class="btn-sm btn-default"  type="submit" name"submit" value="Add">  
</p></li> </form> 

 <form action="/insert_picture" method="post">{{csrf_field()}}
        <li><p style="font-family: Chivo !important; font-size:18px; color:#000;">
       One (1) recent passport picture, which strictly has to meet the following criteria: max. head size 1.4 inch (36 mm), min. eye distance 0.3 inch (8mm), american picture format accepted.
<Br>
       Yes 
<input type="checkbox" name="picture"  value="1" onchange="this.form.submit()"/>
No
<input type="checkbox" name="picture"  value="0"/>
<input class="btn-sm btn-default"  type="submit" name"submit" value="Add">
</p></li> </form> 

<form action="/insert_travelreservation" method="post">{{csrf_field()}}
        <li><p style="font-family: Chivo !important; font-size:18px; color:#000;">
        Travel itinerary/ airline reservation (showing dates of travel) for entire journey. (These do not need to be booked. We will provide you with an itinerary.)
<br>
        Yes 
<input type="checkbox" name="travelreservation"  value="1" onchange="this.form.submit()"/>
No
<input type="checkbox" name="travelreservation"  value="0"/>
<input class="btn-sm btn-default"  type="submit" name"submit" value="Add">
</p></li> </form> 

<form action="/insert_employment" method="post">{{csrf_field()}}
        <li><p style="font-family: Chivo !important; font-size:18px; color:#000;">
        Letter of employment in the U.S.
<bR>
        Yes 
<input type="checkbox" name="employment"  value="1" onchange="this.form.submit()"/>
No
<input type="checkbox" name="employment"  value="0"/>
<input class="btn-sm btn-default"  type="submit" name"submit" value="Add">
</p></li> </form> 


<form action="/insert_travelinsurance" method="post">{{csrf_field()}}
        <li><p style="font-family: Chivo !important; font-size:18px; color:#000;">
        Proof of travel insurance or health/accident insurance providing coverage in the Schengen countries: stating name of insurance company, type of coverage (sickness, accident, medical evacuation, repatriation of human remains), amount of coverage (minimum USD 50,000) and option of direct payment (insurance company must have a service provider in the Schengen area or an arrangement with a service provider in the Schengen area; no deductible, no reimbursement policy accepted) (We will provide this with the itinerary.)
<br>
        Yes 
<input type="checkbox" name="travelinsurance"  value="1" onchange="this.form.submit()"/>
No
<input type="checkbox" name="travelinsurance"  value="0"/>
<input class="btn-sm btn-default"  type="submit" name"submit" value="Add">
</p></li> </form> 

<form action="/insert_financial_means" method="post">{{csrf_field()}}
        <li><p style="font-family: Chivo !important; font-size:18px; color:#000;">
        Proof of financial means (e.g. scholarship, letter of grants, bank statement of last two months, other proof of income). Include the letter of approval from the bank.
<br>
        Yes 
<input  type="checkbox" name="financial_means"  value="1" onchange="this.form.submit()"/>
No
<input type="checkbox" name="financial_means"  value="0"/>
<input class="btn-sm btn-default"  type="submit" name"submit" value="Add">
</p></li> </form> 

<form action="/insert_passcopy" method="post">{{csrf_field()}}
        <li><p style="font-family: Chivo !important; font-size:18px; color:#000;">
        Copy of the passport and copy of the "Green Card" or US visa
<bR>
        Yes 
<input type="checkbox" name="passcopy"  value="1" onchange="this.form.submit()"/>
No
<input type="checkbox" name="passcopy"  value="0"/>
<input class="btn-sm btn-default" type="submit" name"submit" value="Add">
</p></li> </form> 

<form action="/insert_consularfee" method="post">{{csrf_field()}}
        <li><p style="font-family: Chivo !important; font-size:18px; color:#000;">
        Consular fees: payment must be made in US$ per postal money order, cashier's check (payable to Embassy of Austria) or cash (exact change only please).

<bR>
Yes 
<input type="checkbox" name="consularfee"  value="1" onchange="this.form.submit()"/>
No
<input type="checkbox" name="consularfee"  value="0"/>
<input class="btn-sm btn-default" type="submit" name"submit" value="Add">
</p></li> </form> 

    </ol>



   <div id="list_visa">
    Please see this page for more information <a href="http://www.austria.org/visa-application/">www.austria.org/visa-application</a>
    </div>
    </div>
    <div class="col-md-1">
    </div>

<div style="margin-top: 20px;" class="row">

<div class="col-md-5 col-xs-1">
</div>
<div class="col-md-2 col-xs-10">
<a href="{{route('sendEmail')}}" class="btn-lg btn-default">Enroll</a>
</div>
<div class="col-md-5 col-xs-1">
</div>

</div>

</div>


</body>

    <script>
 // for the checkbox just to be clickable once
$("input:checkbox").on('click', function() {
  var $box = $(this);
  if ($box.is(":checked")) {
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});

// for the checkbox passport
$(function () {
        $("#passportNo").click(function () {
            if ($(this).is(":checked")) {
                $("#passportDiv").fadeIn( "slow", function() {});
            } else {
                $("#passportDiv").fadeOut( "slow", function() {});
            }
        });
    });
$(function () {
        $("#passportYes").click(function () {
            $('#passportDiv').fadeOut( "slow", function() {});
        });
    });

// for the checkbox financing
$(function () {
        $("#financingNo").click(function () {
            if ($(this).is(":checked")) {
                $("#financingDiv").fadeIn( "slow", function() {});
            } else {
                $("#financingDiv").fadeOut( "slow", function() {});
            }
        });
    });
$(function () {
        $("#financingYes").click(function () {
            $('#financingDiv').fadeOut( "slow", function() {});
        });
    });

// for the checkbox insurance
$(function () {
        $("#insuranceNo").click(function () {
            if ($(this).is(":checked")) {
                $("#insuranceDiv").fadeIn( "slow", function() {});
            } else {
                $("#insuranceDiv").fadeOut( "slow", function() {});
            }
        });
    });
$(function () {
        $("#insuranceYes").click(function () {
            $('#insuranceDiv').fadeOut( "slow", function() {});
        });
    });

function openCity(evt, Name) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(Name).style.display = "block";
    evt.currentTarget.className += " active";
}

    </script>

</html>
