@extends('layouts.employee')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Order/Invoices Info List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Order List</li>
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
                 <h3 class="card-title">Order Details List</h3>
                 </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Invoice Number</th>
                      <th>Service</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Subtotal</th>
                      <th>Total</th>

                      
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>





                  <tbody>
                  
                  @foreach ($invoice as $invoices)
                  @php 
                   $total=0;
                    @endphp
                    @php 
                     $total=$total+$invoices->price*$invoices->quantity;
                    @endphp
                    <tr>
                    <td>{{ $invoices->id }}</td>
                    <td>{{ $invoices->invoicenumber }}</td>
                     <td>{{ $invoices->service }}</td>
                     <td>{{ $invoices->price }}</td>
                     <td>{{ $invoices->quantity }}</td>
                     <td>{{ $invoices->price*$invoices->quantity }}</td>
                     <td>{{ $total}}</td>

                   
                                  


                     <td class="d-flex">
                      <a href="{{ route('empdashboard') }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                      <form action="{{ route('invoice.destroy', [$invoices->id]) }}" class="mr-1" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                       </form>
                      <a href="{{ route('empdashboard') }}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a>
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
