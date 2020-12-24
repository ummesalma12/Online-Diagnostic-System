@extends('layouts.employee')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Generate Reports</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('report.index')}}">Report List</a></li>
              <li class="breadcrumb-item active">Create Report</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <div class="card">
              <div class="card-header" >
                 <div class="d-flex justify-content-between align-items-center">
                 <h3 class="card-title">Create Reports</h3>
                <a href="{{route('report.index')}}" class="btn btn-primary">Go Back To Reports List</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
             <div class="row">
             <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
 <!-- form start -->




 <form action="{{route('report.store')}}" method="POST" enctype="multipart/form-data">
 
 @csrf

  <div class="form-group">
  <label>Enter Invoice Number</label>
  <input type="text" name="number">
    <label for="exampleFormControlFile1">Click on the "Choose File" button to upload a file</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>

  <div class="card-footer">
    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
     </div>
</form>



             </div>
             </div>
             
            
              </div>
              <!-- /.card-body -->
            </div>
            </div>
         </div>
        </div>
    </div>
@endsection