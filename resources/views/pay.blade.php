<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="{{asset('asset/CSS/styleIndex.css')}}">
    <title>Payment Proceed</title><style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}



.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}


.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}



.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 20%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
/* @media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }

} */
</style>
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
  
  <h1 style="color: rgb(251, 115, 138);"><b><marquee>CheckOut Process</marquee></b></h1></br>
</div>

<div class="row">
  <div class="col-75">
    <div class="container">
    <h1 class="text-center" style="color:gray;"><b>Billing Details</b></h1>
      <form action="{{route('product.store')}}" method="POST">
      @csrf
      
        <div class="row">
          <div class="col-50">
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="Umme Salma">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="umme@example.com">
            <label for="fname"><i class="fa fa-user"></i> Phone Number</label>
            <input type="text" id="number" name="number" placeholder="Enter Number">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Demra">

            <div class="row " >
              <div class="col-50" >
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="DM">
              </div>
              <div class="col-50" >
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

        
          
        </div>

        <!-- <input type="submit" value="Continue to checkout" class="btn"> -->
        <label ><b>Cash On:</b></label>
        <button type="submit" value="Bkash" class="btn">Bkash</button>
        <button type="submit" value="Cash On Delivary" class="btn">Cash On Delivary</button>
<!--         <input type="submit" value="Bkash" class="btn"> 
        <input type="submit" value="Cash On Delivary" class="btn">  -->
      </form>
    </div>
  </div>

</div>

<section id="footer">
<div >
<hr style="width:80%;border:0;border-top: 1px solid #f67c92;">
<p style="font-weight: bold; text-align: center;">adibahazari@yahoo.com</p>
<p style="font-weight: bold; text-align: center;">Copyright 2020 UMME SALMA</p>

    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   

</body>
</html>
