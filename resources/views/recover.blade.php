@extends('layout')
  

@section('content')
<div class="d-flex justify-content-center align-item-center cont">
    <form action="{{route('recover.check')}}" method="post">
        @csrf
        <h3 for="Login">Recover Your Details</h3>
        <div class="wrapper">
            <div class="form-group">
                
                <label for="access">Access Code:</label>

                <input type="text" class="form-control @error('access') is-invalid @enderror" name="access" required>

                @error('access')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
       
        <div class="d-flex justify-content-center align-item-center">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </div>
    </form>
</div>
  @endsection
   