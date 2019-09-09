@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
  <div class="table-responsive">
    <table class="table">
<tr>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Middle Name</th>
  <th>Phone</th>
  <th>email</th>
  <th>Designation</th>
  <th>City</th>
  <th>country</th>
<th>  Actions </th>
</tr>
      @foreach ($employees as $employee)


        <tr>
          <td>{{ $employee->first_name }}</td>
          <td>{{ $employee->last_name }}</td>
          <td>{{ $employee->middle_name }}</td>
          <td>{{ $employee->phone }}</td>
          <td>{{ $employee->email }}</td>
          <td>{{ $employee->job_title }}</td>
          <td>{{ $employee->city }}</td>
          <td>{{ $employee->country }}</td>
          <td><a href="{{ route('employees.edit',$employee->id)}}" class="btn btn-primary">Edit</a>
            <form action="{{ route('employees.destroy', $employee->id)}}" method="post">
                             @csrf
                             @method('DELETE')
                             <button class="btn btn-danger" type="submit">Delete</button>
                           </form>
          </td>
        </tr>

      @endforeach
    </table>

      </div>
    </div>
</div>
@endsection
