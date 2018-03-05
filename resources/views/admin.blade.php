

@extends('layouts.app')

@section('content')
@if (Auth::guard('admin')->check())
<div class="container">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    @component('components.who')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
    <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Phone number</th>
        <th>Checklist status</th>
      </tr>
    </thead>
    <tbody>
   
    
   @foreach($students as $student)
        @foreach ($student->checklist as $checklist)
      <tr>
        <td><a href="{{ URL::to('detail/' . $student->id . '/edit') }}" >{{$student->firstname}}</a></td>
        <td>{{$student->lastname}}</td>
        <td>{{$student->phone}}</td>
        <td><a href="{{ URL::to('detailchecklist/' . $checklist->id ) }}">details...</a></td>
        <td><form action="{{ url('detail/' . $student->id )}}" method="post">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button>DELETE</button>
            </form>  
        </td>      
      </tr> 
        @endforeach
       @endforeach
    </tbody>
  </table>
</div>
@else
 <script>window.location = "/admin/login";</script> 

@endif
@endsection