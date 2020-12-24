@extends('layouts.employee')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Billing Info List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Billing List</li>
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
                 <h3 class="card-title">Billing Details List</h3>
                 </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Zip</th>
                      <th>Phone Number</th>
                      <th>Invoice</th>
                      
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>





                  <tbody>
                  @foreach ($product as $products)
                    <tr>
                    <td>{{ $products->id }}</td>
                    <td>{{ $products->name }}</td>
                     <td>{{ $products->email }}</td>
                     <td>{{ $products->address }}</td>
                     <td>{{ $products->city }}</td>
                     <td>{{ $products->state }}</td>
                     <td>{{ $products->zip}}</td>
                     <td>{{ $products->phoneNumber }}</td>
                     <td>{{ $products->invoice }}</td>


                     <td class="d-flex">
                      <a href="{{ route('empdashboard') }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                      <form action="{{ route('product.destroy', [$products->id]) }}" class="mr-1" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                       </form>
                      <a href="{{ route('empdashboard') }}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a>
                      <a href="{{ route('invoicesuser',$products->id) }}" class="btn btn-sm btn-warning mr-1"> <i class="fas fa-file-invoice"></i></i> </a>
                        
                    </td>
 
                    </tr>
                    @endforeach
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
