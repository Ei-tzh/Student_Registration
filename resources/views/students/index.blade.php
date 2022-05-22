@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Student Lists</h3>
                <div class="card-tools">
                    <a href="{{ route('students.create')}}" class="btn btn-primary">Add students</a>
                </div>
              </div>
              <!-- /.card-header -->
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
                        <td>
                            @foreach ($student->courses as $course )
                                <span class="badge bg-success bg-opacity-75">{{ $course->name }}</span>
                            @endforeach
                        </td>
                        <td>
                            <a href="" title="Edit" class="btn btn-primary">
                                <i class="fas fa-edit blue"></i>
                            </a>
                            <a href="" title="Delete" class="btn btn-danger">
                                <i class="fas fa-trash red"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                  
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection


