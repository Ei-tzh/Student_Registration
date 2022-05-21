@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <div class="card bg-light">
                <h5 class="card-header py-3 bg-success text-white bg-opacity-75">Student Lists</h5>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date OF Birth</th>
                            <th scope="col">Email</th>
                            <th scope="col">NRC</th>
                            <th scope="col">Courses</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as$student )
                            <tr>
                                <th scope="row">{{ $student->id }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->date_of_birth }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->NRC }}</td>
                                <td>{{ $student->NRC }}</td>
                                <td>
                                    <a href="#" class="text-danger">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                          
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection