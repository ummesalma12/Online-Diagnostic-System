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
    <link rel="stylesheet"  href="{{asset('asset/CSS/contactCss.css')}}" >
    
    <title>Contact</title>
</head>
<body>
<!--Header Start-->
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top text-light " style="background: rgb(226, 191, 226);">
        <a class="navbar-brand " href="{{url('/')}}" style="font-weight: bold; margin-left: 7%;"></b>TARA<br>DIAGNOSTIC <br><i class="fa fa-medkit" style="font-size:48px;color:seagreen"></i></a>
    
    </nav>
</header>
<!--header End-->
<h3>Contact Form</h3>

<div class="container">
  <form action="{{route('contactt.store')}}" method="POST">
  @csrf
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Email Address</label>
    <input type="email" id="email" name="email" placeholder="Your email..">

    <label for="lname">Phone Number</label>
    <input type="text" id="number" name="number" placeholder="Your phone number..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Dhaka">Dhaka</option>
      <option value="Chattrogram">Chattogram</option>
      <option value="Cumilla">Cumilla</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
 
</body>
</html>