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
    <title>Diagnosis Shop</title>

</head>
<body>
  <!--Header Start-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top text-light " style="background: rgb(226, 191, 226);">
        <a class="navbar-brand " href="{{url('/')}}" style="font-weight: bold;"></b>TARA<br>DIAGNOSTIC <br><i class="fa fa-medkit" style="font-size:48px;color:seagreen"></i></a>
    
        <form class="form-inline my-2 my-lg-0 " style="margin-left: 10%;">

            
            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search" style="font-weight: bold;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="font-weight: bold;">Search</button>
        
            
        </form>
    </nav>
  </header>
  <!--header End-->
  <div style="margin-top: 15%;margin-left: 20%;">
  
  <h1 style="color: rgb(251, 115, 138);"><b><marquee>Here is the all tests,<br> which we are provided.</marquee></b></h1>
</div>

<!--cards start-->
<div class="container">
        <div class="row">
            <div class="card-deck">
                @if(count($services) > 0)
                @foreach ($services as $service)
                        <div class="card">
                            <div class="card-header" style="width: 15rem;">
                            {{ $service->name }}
                                <span class="float-right">{{ $service->amount_with_currency}}</span>
                            </div>
                            <div class="card-body">
                                <p>{{ $service->description }}</p>
                            </div>
                            <div class="card-footer">
                                <a
                                    href="{{route('add-cart', [$service->id])}}"
                                    class="btn btn-success btn-block"
                                >Add To Cart</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
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