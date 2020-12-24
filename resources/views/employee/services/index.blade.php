@extends('layouts.employee')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Services List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Service List</li>
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
                 <h3 class="card-title">Services List</h3>
                <a href="{{route('service.create')}}" class="btn btn-primary">Create New Service</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Service Name</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($services as $service)
                    <tr>
                    <td>{{ $service->id }}</td>
                     <td>{{ $service->name }}</td>
                     <td>{{ $service->description }}</td>
                     <td>{{ $service->price }}</td>
                      <td class="d-flex">
                      <a href="{{ route('service.edit', [$service->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                      <form action="{{ route('service.destroy', [$service->id]) }}" class="mr-1" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                       </form>
                      <a href="{{ route('service.show', [$service->id]) }}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a>
                      </td>
                    </tr>
                    @endforeach
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