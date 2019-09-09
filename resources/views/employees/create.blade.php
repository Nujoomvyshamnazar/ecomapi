@extends('layouts.app')

@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
    <div class="row">
    <form method="post" action="{{url('employees')}}">
      @method('POST')
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">First Name:</label>
            <input type="text" class="form-control" name="first_name"/>
        </div>

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">last Name:</label>
            <input type="text" class="form-control" name="last_name"/>
        </div>

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Middle Name:</label>
            <input type="text" class="form-control" name="middle_name"/>
        </div>

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">phone:</label>
            <input type="text" class="form-control" name="phone"/>
        </div>

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">	email:</label>
            <input type="text" class="form-control" name="email"/>
        </div>

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">	job title:</label>
            <input type="text" class="form-control" name="job_title"/>
        </div>


        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">	city:</label>
            <input type="text" class="form-control" name="city"/>
        </div>

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">	country:</label>
            <input type="text" class="form-control" name="country"/>
        </div>
      
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
