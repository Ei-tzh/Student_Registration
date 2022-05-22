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
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Edit Student</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('students.update',$student->id)}}" method="POST">
                        @method('put')
                        @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter name" name="name" value="{{ $student->name }}">
                            @error('name')
                                <small id="bodyhelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="birth">Date of birth:</label>
                            <div class="input-group date" id="birth">
                                <div class="input-group-prepend" data-target="#birth">
                                    <div class="input-group-text @error('birth') bg-danger @enderror"><i class="fa fa-calendar"></i></div>
                                </div>
                                    <input type="text" class="form-control datetimepicker-input @error('birth') is-invalid @enderror" name="birth" data-target="#birth" value="{{ $student->date_of_birth }}"/>
                            </div>
                            @error('birth')
                                <small id="bodyhelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email" name="email" value="{{ $student->email }}">
                            @error('email')
                                <small id="bodyhelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- nrc --}}
                        <div class="form-group">
                            <label for="nrc">NRC:</label>
                            <input type="text" class="form-control @error('nrc') is-invalid @enderror" id="nrc" placeholder="Eg-12/KMY(N)123456" name="nrc" value="{{ $student->NRC }}">
                            @error('nrc')
                                <small id="bodyhelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- course --}}
                        <div class="form-group">
                            <label for="courses">Choose courses:</label>
                            <select class="form-control @error('courses') is-invalid @enderror" id="courses" name="courses[]" multiple >
                                @foreach ($courses as $course )
                                    <option value="{{ $course->id }}" 
                                        @foreach ($student->courses as $student_course )
                                            @if ($student_course->id==$course->id)
                                                {{ 'selected' }}
                                            @endif
                                        @endforeach
                                        
                                        >{{ $course->name }}</option>
                                @endforeach
                            </select>
                            @error('courses')
                                <small id="bodyhelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('students.index')}}" class="btn btn-danger">Back</a>
                    </div>
                    </form>
                </div>
            </div>
          </div>
    </section>
</div>
@endsection
@push('datepicker')
<script type="text/javascript">
    $(document).ready(function(){
        $('#birth').datepicker({
            format: 'yyyy/mm/dd',
            todayHighlight: true,
            orientation: "bottom auto",
        });
        $('#courses').select2({
                theme: 'bootstrap4',
                placeholder:"Choose one or more courses you want to attend",
                tags:true
            });
    });
   </script>
@endpush