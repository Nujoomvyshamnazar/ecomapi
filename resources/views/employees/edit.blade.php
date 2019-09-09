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
    <form method="post" action="{{ route('employees.update', $employee->id) }}">
      @method('PATCH')
          @csrf
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">First Name:</label>
            <input type="text" class="form-control" name="first_name" value="{{ $employee->first_name }}" />
        </div>

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">last Name:</label>
            <input type="text" class="form-control" name="last_name" value="{{$employee->last_name}}"/>
        </div>

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Middle Name:</label>
            <input type="text" class="form-control" name="middle_name" value="{{$employee->middle_name}}" />
        </div>

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">phone:</label>
            <input type="text" class="form-control" name="phone" value="{{$employee->phone}}" />
        </div>

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">	email:</label>
            <input type="text" class="form-control" name="email" value="{{$employee->email}}" />
        </div>

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">	job title:</label>
            <input type="text" class="form-control" name="job_title" value="{{$employee->job_title}}"/>
        </div>


        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">	city:</label>
            <input type="text" class="form-control" name="city" value="{{$employee->city}}"/>
        </div>

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">	country:</label>
            <input type="text" class="form-control" name="country" value="{{$employee->country}}"/>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
