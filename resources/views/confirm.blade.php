@extends('layout')

@section('content')

<div class="container cont">

    <h3>YOUR APPLICATION CONFIRMATION PAGE</h3>

    <div>
        <p>Dear {{$student->first_name}} {{$student->last_name}},</p>
    </div>

    <div>
        <p>Your application with the access code <b>{{$student->access}}</b> is successful.</p>
    </div>

    <div>

        <p>Kindly print Application Status and Application Details by clicking the buttons below:</p>
    </div>

    <div>

        <a href="{{route('status', $student->id)}}" class="btn btn-danger">Application Status</a>

        <a href="{{route('detail', $student->id)}}" class="btn btn-danger">Application Details</a>
    </div>

    
    <div>
        <a href="{{route('apply')}}" class="btn btn-info float-right mb-3 mt-2">Go Back</a>
    </div>
   
</div>

    
@endsection