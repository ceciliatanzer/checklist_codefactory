

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
    
   @foreach($checklist as $students => $value)

      <tr>
        <td><a href="{{ URL::to('detail/' . $value->id . '/edit') }}" >{{$value->firstname}}</a></td>
        <td>{{$value->lastname}}</td>
        <td>{{$value->phone}}</td>
        <td><a href="{{ URL::to('detailchecklist/' . $value->id ) }}">details...</a></td>
        <td><form action="{{ url('detail/' . $value->id )}}" method="post">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button>DELETE</button>
            </form>  
        </td>      
      </tr>

       @endforeach
    </tbody>
  </table>
</div>
@else
 <script>window.location = "/admin/login";</script> 

@endif
@endsection