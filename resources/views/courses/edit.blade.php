@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content py-5">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-lg-12">
              <!-- general form elements -->
                <div class="card card-success">
                    <div class="card-header">
                    <h3 class="card-title">Edit Course</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('courses.update',$course->id)}}" method="POST">
                        @method('put')
                        @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Course Name:</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Course name" name="name" value="{{ $course->name }}">
                            @error('name')
                                <small id="bodyhelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('courses.index')}}" class="btn btn-danger">Back</a>
                    </div>
                    </form>
                </div>
            </div>
          </div>
    </section>
</div>
@endsection
