@extends('layouts.employee')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Services</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('service.index')}}">Service List</a></li>
              <li class="breadcrumb-item active">Edit Service</li>
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
                 <h3 class="card-title">Edit Service - {{ $services->name }}</h3>
                <a href="{{route('service.index')}}" class="btn btn-primary">Go Back To Services List</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
             <div class="row">
             <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
 <!-- form start -->
 <form action= "{{ route('service.update',$services->id)}}" method="POST">
                 @csrf
                 @method('PUT')
                <div class="card-body">
                @include('includes.errors')
                  <div class="form-group">
                    <label for="name">Service Name</label>
                    <input type="name" name="name" class="form-control" id="name" value = " {{ $services -> name }} " placeholder="Enter service name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="description" id="description" rows="4" class="form-control" placeholder="Enter description"> {{ $services->description }} </textarea>
                    </div>

                  <div class="form-group">
                    <label for="price">Price</label>
                    <textarea name="price" id="price" rows="2" class="form-control" placeholder="Enter price"> {{ $services->price }} </textarea>
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-lg btn-primary">Update Service</button>
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