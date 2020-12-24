@extends('layouts.employee')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Report Info List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Report List</li>
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
                 <h3 class="card-title">Reports List</h3>
                 <a href="{{route('report.create')}}" class="btn btn-primary">Create Reports</a>
               
                 </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Invoice Number</th>
                      <th>Reports Image</th>
                     


                      
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($reports as $report)
                    <tr>
                    <td>{{ $report->id }}</td>
                    <td>{{ $report->invoicenumber }}</td>
                     <td>
                     <img style="height:20%;width:20%;" src="uploads/report/{{ $report->image }}">
                     
                     
                     </td>
                    
                     
                      <td class="d-flex">
                      <a href="{{ route('report.index') }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                      <form action="{{ route('report.index') }}" class="mr-1" method="POST">
                         
                        <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                       </form>
                      </td>
                    </tr>
                    @endforeach





                  <tbody>
                 
                  </tbody>
                  








                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
         </div>
        </div>
    </div>
@endsection
