@extends('layout')

@section('content')
<div class="text-center">
    <h3>ONLINE APPLICATION</h3>
</div>

<form action="{{route('student.register')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">

        <label for="first_name"><b>First Name:</b></label>

    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{old('first_name')}}" placeholder="Your First Name" required>

        @error('first_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group">
        <label for="last_name"><b>Last Name:</b></label>
        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{old('last_name')}}" placeholder="Your Last Name" required>

        @error('last_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror


    </div>

    <div class="form-group">
        <label for="address"><b>Address:</b></label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{old('first-name')}}" placeholder="Your Contact Address" required>

        @error('address')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group">
        <label for="marital_status"><b>Marital Status:</b></label>
        <input type="text" class="form-control @error('marital_status') is-invalid @enderror" name="marital_status" value="{{old('marital_status')}}" placeholder="Your Marital Status" required>

        @error('marital_status')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group">
        <label for="education"><b>Educational Background:</b></label>
        <input type="text" class="form-control @error('education') is-invalid @enderror" name="education" value="{{old('education')}}" placeholder="Your Educational Background" required>

        @error('education')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group col-md-8">

        <label for="education"><b>Select Best Subject(s)</b></label>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="subject" value="Mathematics" checked>
            <label class="form-check-label" for="Mathematics">
              Mathematics
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="subject" value="English">
            <label class="form-check-label" for="English">
              English
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="subject" value="Science">
            <label class="form-check-label" for="Science">
              Science
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="subject" value="Government">
            <label class="form-check-label" for="Government">
              Government
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="subject" value="Art">
            <label class="form-check-label" for="Art">
              Art
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="subject" value="Civic">
            <label class="form-check-label" for="Civic">
              Civic
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="subject" value="Computer">
            <label class="form-check-label" for="Computer">
              Computer
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="subject" value="History">
            <label class="form-check-label" for="History">
              History
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="subject" value="Agriculture">
            <label class="form-check-label" for="Agriculture">
              Agriculture
            </label>
          </div>

    </div>

   
     <div class="col-md-8">
            <label for="gender"><b>Religion:</b></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="religion" value="christianity" checked>
                <label class="form-check-label" for="christianity">
                     Christianity
                 </label>
            </div>
            <div class="form-check">
                 <input class="form-check-input" type="radio" name="religion" value="islam">
                 <label class="form-check-label" for="islam">
                    Islam
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="religion" value="traditional">
                <label class="form-check-label" for="traditional">
                    Traditional
                </label>
            </div>
     </div>

    <div class="form-group">
        <label for="state"><b>State of Origin:</b></label>
        <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{old('state')}}" placeholder="Your State of Origin" required>

        @error('state')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group">
        <label for="birthdate"><b>Date of Birth:</b></label>
        <input type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" required>

        @error('birthdate')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror


    </div>

    <div class="form-group d-flex flex-column">
        <label for="image"><b>Upload Your Image</b></label>
        <input type="file" class="@error('image') is-invalid @enderror" name="image" required>

        @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror


    </div>

    <div class="form-group d-flex justify-content-center align-item-center">
       <button type="submit" class="btn btn-primary">SUBMIT APPLICATION</button>
    </div>
    
</form>

    
@endsection