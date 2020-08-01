@extends('layout')

@section('content')
<div class="container cont">
    <div>
        <h3>YOUR APPLICATION STATUS</h3>
    </div>
    <div>
         <img src="{{asset('storage/'.$student->image)}}" alt="No Image" class="thumbnail">
    </div>

    <div>
        <p>I <b>{{$student->first_name}} {{$student->last_name}}</b>, applied with the application code <b>{{$student->access}}.</b></p>
    <p>I live at <b>{{$student->address}}</b> and I was born on <b>{{$student->birthdate}}.</b></p>

    <p>My favorite subjects are: <b>{{$student->subject}}.</b></p>
    
    </div>
   
    <div>
        <a href="{{route('confirm', $student->id)}}" class="btn btn-info float-right mb-3 mt-1">Go Back</a>
    </div>

</div>
@endsection