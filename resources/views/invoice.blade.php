<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/CSS/invoiceCss.css')}}">
     <title>Invoice List</title>
</head>
<body style="background: whitesmoke;">

<div class="container">
        <a class="navbar-brand" href="{{url('/')}}" style="margin-top: 1%; font-weight: bold;color: #f67c92;"></b>TARA<br>DIAGNOSTIC <br><i class="fa fa-medkit" style="font-size:48px;color:rgb(146, 61, 75)"></i></a>

         </div>



<div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <h3 style="font-weight:bold;">INVOICE</h3>
                        </div>

                        <div class="col-md-6 text-right">
                            <!-- <p class="font-weight-bold mb-1">Invoice #550</p> -->
                            <p class="text-muted">Due to: 4 Dec, 2019</p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Client Information</p>
                            <p class="mb-1">{{$billingInformation->name}}</p>
                            <p class="mb-1">{{$billingInformation->email}}</p>
                            <p class="mb-1">{{$billingInformation->address}}</p>
                            <p class="mb-1">{{$billingInformation->city}}</p>
                            <p class="mb-1">{{$billingInformation->state}}</p>
                            <p class="mb-1">{{$billingInformation->zip}}</p>
                            <p class="mb-1">{{$billingInformation->phoneNumber}}</p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Billed By:</p>
                            <p class="mb-1"><span class="text-muted">Umme Salma</span></p>
                            <p class="mb-1"><span class="text-muted">Address:East-BoxNagar,Demra,Dhaka </span> </p>
                            <p class="mb-1"><span class="text-muted">Tara Diagnostic Center </span> </p>
                            <p class="mb-1"><span class="text-muted">CEO, TDC </span> </p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">Report ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Invoice Number</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Service</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Unit Price</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Sub Total</th>
                                        <!-- <th class="border-0 text-uppercase small font-weight-bold">Total</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                @php 
                                $total=0;
                                @endphp
                                @foreach ($billing as $billings)
                                    <tr>
                                       
                                        <td>{{ $billings->id }}</td>
                                        <td>{{ $billings->invoicenumber }}</td>
                                        <td>{{ $billings->service }}</td>
                                        <td>{{ $billings->price }}</td>
                                        <td>{{ $billings->quantity }}</td>
                                        <td>{{ $billings->price*$billings->quantity }}</td>
                                        <!-- <td>{{ $billings->total }}</td> -->
                                    </tr>
                                    @php 
                                $total=$total+$billings->price*$billings->quantity;
                                @endphp
                                    @endforeach
                                 
                                   
                                </tbody>
                            </table>
                            <hr>
                            <p class="border-0 text-uppercase small font-weight-bold" style="text-align:center;margin-left:63%;">Total {{$total}}TK.</p>
                                  
                        </div>
                    </div>

                    <!-- <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Grand Total</div>
                            <div class="h2 font-weight-light">$234,234</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Discount</div>
                            <div class="h2 font-weight-light">10%</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Sub - Total amount</div>
                            <div class="h2 font-weight-light">$32,432</div>
                        </div>
                    </div> -->

                    <section id="footer">
    <div class="container">
<hr>
<p style="font-weight: bold; text-align: center;">adibahazari@yahoo.com</p>
<p style="font-weight: bold; text-align: center;">Copyright 2020 UMME SALMA</p>

    </div>
</section>
                </div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    </body>
    </html>