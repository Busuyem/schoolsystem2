@extends('layout')

@section('content')
<div class="container">
    <div>
        <h3>YOUR APPLICATION DETAILS</h3>
    </div>
    <div>
         <img src="{{asset('storage/'.$student->image)}}" alt="No Image" class="thumbnail">
    </div>
    <hr>
    <div>
        <p>Dear<b> {{$student->first_name}} {{$student->last_name}}</b>, your application details have been received.</p>
         <p>Your Access Code is <b>{{$student->access}}.</b> Kindly go through the details.</p>
    
    </div>
    <hr>
    <div class="table-stripped">
        <tbody>
            <tr>
                <p><td>Address:</td> <b>{{$student->address}}</b></p>
                <p><td>Marital Status:</td> <b>{{$student->marital_status}}</b></p> 
                <p><td>Educational Background:</td> <b>{{$student->education}}</b></p> 
                <p><td>Selected Best Subject(s):</td> <b>{{$student->subject}}</b></p> 
                <p><td>Religion:</td> <b>{{$student->religion}}</b></p>
                <p><td>Date of Birth:</td> <b>{{$student->birthdate}}</b></p> 
            </tr>


        </tbody>
    </div>

    <div>
        <a href="{{route('confirm', $student->id)}}" class="btn btn-info float-right mb-3 mt-1">Go Back</a>
    </div>
   
</div>
@endsection