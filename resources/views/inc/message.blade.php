@if(session('success'))

<span class="alert alert-success mb-2">{{session('success')}}</span>


@endif


@if(session('error'))

<span class="alert alert-danger mb-2">{{session('error')}}</span>


@endif