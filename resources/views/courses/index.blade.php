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
                  <h3 class="card-title">Course Lists</h3>
                <div class="card-tools">
                    <a href="{{ route('courses.create')}}" class="btn btn-primary">Add Courses</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($courses as $course )
                    <tr>
                        <th scope="row">{{ ++$loop->index }}</th>
                        <td>{{ $course->name }}</td>
                        <td>
                            <a href="{{ route('courses.edit',$course->id)}}" title="Edit" class="btn btn-primary">
                                <i class="fas fa-edit blue"></i>
                            </a>
                            @method('DELETE')
                            <a href="{{ route('courses.destroy',$course->id)}}" title="Delete" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this record?');">
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
@push('datepicker')
<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif
    @if(Session::has('danger'))
        toastr.danger("{{ Session::get('danger') }}");
    @endif
</script>
@endpush


