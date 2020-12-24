<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="{{asset('asset/CSS/styleIndex.css')}}">
    <title>Cart Page</title>

</head>
<body>
  <!--Header Start-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top text-light " style="background: rgb(226, 191, 226);">
        <a class="navbar-brand " href="{{url('/')}}" style="font-weight: bold;"></b>TARA<br>DIAGNOSTIC <br><i class="fa fa-medkit" style="font-size:48px;color:seagreen"></i></a>
    
    </nav>
  </header>
  <!--header End-->
  <div style="margin-top: 15%;margin-left: 20%;">
  
  <h1 style="color: rgb(251, 115, 138);"><b><marquee>Here is all your ordered items</marquee></b></h1>
</div>

<!--cards start-->
<form  action="{{route('product.store')}}" method="POST">
@csrf
<div class="container">
        <h1 class="text-center">Cart Page</h1>
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th width="50%">Service</th>
                    <th width="10%">Price</th>
                    <th width="8%">Quantity</th>
                    <th width="22%">Sub Total</th>
                    <th width="10%"></th>
                </tr>
                </thead>
                <tbody>
                @php $total = 0; @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $services)
                        @php
                            $sub_total = $services['price'] * $services['quantity'];
                            $total += $sub_total;
                        @endphp
                        <tr>
                            <td>
                                <span>{{$services['name']}}</span>
                            </td>
                            <td>৳{{$services['price']}}</td>
                            <td>{{$services['quantity']}}</td>
                            <td>৳{{$sub_total}}</td>
                            <td>
                                <a href="{{route('remove', [$id])}}" class="btn btn-danger btn-sm">X</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
                <tfoot>
                <tr>
                    <td>
                        <a href="{{url('diagnosisShop')}}"
                           class="btn btn-warning"
                        >Continue Shopping</a></br></br>

                       <a href="{{url('pay')}}" type="submit"
                        class="btn btn-success"
                        >Proceed To CheckOut</a></br></br> 
                        
                     <!--   <form action="{{route('pay')}}" method="post">
                            @csrf
                            @method('GET')
                            <input type="hidden" name="amount" value="{{$total}}">
                            <button type="submit"
                               class="btn btn-success"
                            >Proceed To CheckOut</button></br></br>

                        </form>  -->

                    </td>
                    <td colspan="2"></td>
                    <td><strong>Total ৳{{$total}}</strong></td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    </form>
  <!--cards end-->
  <section id="footer">
    <div class="container">
<hr>
<p style="font-weight: bold; text-align: center;">adibahazari@yahoo.com</p>
<p style="font-weight: bold; text-align: center;">Copyright 2020 UMME SALMA</p>

    </div>
</section>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
</body>
</html>