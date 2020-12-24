<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/CSS/styleIndex.css')}}">
     <title>Online Diagnostic Center</title>
</head>
<body style="background: whitesmoke;">

  <!--Header Start-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top text-light" style="background: rgb(226, 191, 226);">
            <a class="navbar-brand" href="#" style="font-weight: bold;"></b>TARA<br>DIAGNOSTIC <br><i class="fa fa-medkit" style="font-size:48px;color:rgb(146, 61, 75)"></i></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto" id="navigation">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>

                
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('services')}}">Services <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{url('diagnosisShop')}}">Diagnosis Shop <span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link" href="{{url('reportCollection')}}">Report Collection <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="{{url('contact')}}">Contact <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="{{url('feedback')}}">Feedback <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="{{url('aboutUs')}}">About US <span class="sr-only">(current)</span></a>
                  </li>

                 
                
              </ul>

<ul style="margin-right:2%">
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight:bold;color:black">
    LogIn
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  
  <a style="cursor:pointer" class="nav-link text-white" data-toggle="modal" data-target="#ModalMiddle">
                  <h6  style='font-weight: bold ;color:rgb(0, 0, 0);'>Employee</h6>
                    </a>
					
	<a style="cursor:pointer" class="nav-link text-white" data-toggle="modal" data-target="#ModalRight">
                   <h6  style='font-weight: bold ;color:rgb(0, 0, 0);'>Admin</h6>
                    </a>
   <!--  <a class="dropdown-item" href="#" style="font-weight:bold;color:black">User</a>
    <a class="dropdown-item" href="{{url('employeeRegister')}}" style="font-weight:bold;color:black">Employee</a>
    <a class="dropdown-item" href="#" style="font-weight:bold;color:black">Admin</a>
   --></div>
</div>
      </ul>

              
            </div>
          </nav>
        </header>
         <!--Header end-->
         <!--Modal start-->
        

<div class="modal fade" id="ModalMiddle" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div  class="modal-header">
        <h5 class="modal-title" id="ModalLongTitle">
         Employee
        </h5>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     

  

      <form method="POST" action="{{ route('login') }}"  autocomplete="off" id="form" class="text-center border border-dark p-5">
      @csrf
        <p class="h4 mb-4">
        Login Form
        </p>
        <input type="text" name="username" id="username" class="form-control mb-4" placeholder="Email">
        <input type="password" name="password" id="password" class="form-control mb-4" placeholder="Password">
        <button style="color: aqua;" name="login_button" id="login_button" type="submit" class="btn btn-warning btn-lg btn-block">Login</button>
        <br><br>
        <section id="modal-adjustment">
        <div class="left-collumn-modal">
          <p >New Employee?</p>
        </div>
        <div class="right-collumn-modal" >
          <a href="{{url('employeeRegister')}}" > 
          <button type="button" class="btn btn-dark btn-lg btn-block" >Create An Account</button>
        </a>
        </div>
      </section>

		
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="ModalRight" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div  class="modal-header">
        <h5 class="modal-title" id="ModalLongTitle">
         Admin
        </h5>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     

  

      <form method="POST" action="{{ route('login') }}" autocomplete="off" id="form" class="text-center border border-dark p-5">
      @csrf
        <p class="h4 mb-4">
        LogIn Form
        </p>

        <input type="text" name="username" id="username" class="form-control mb-4" placeholder="Email">
        <input type="password" name="password" id="password" class="form-control mb-4" placeholder="Password">
        <button style="color: aqua;" name="login_button" id="login_button" type="submit" class="btn btn-warning btn-lg btn-block">Login</button>
        <br><br>
       </form>
    </div>
  </div>
</div>
         <!--modal End-->
    <!--carousel start-->
    <main role="main" style="z-index: -1;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-bottom: 2rem;
        ">
         <!--  <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           
          </ol> -->
          <div class="carousel-inner">
            <div class="carousel-item active" style=" height: 42rem;
            background-color: #777;">
              <img class="d-block w-100" src="{{asset('asset/images/p7.jpg')}}" alt="First slide" style="position: absolute;
              top: 0;
              left: 0;
              min-width: 100%;
              height: 42rem;">
              <div class="carousel-caption d-none d-md-block" style=" bottom: 3rem;
              z-index: 10;">
                <h5 style="color:yellow;">Healthy Heath Life & Balance</h5>
                <p style="font-size: larger; color:rgb(179, 11, 11); font-family: 'Pangolin', cursive;" >“The doctor of the future will give no medicine, but will instruct his patients in care of the human frame, in diet, and in the cause and prevention of disease.” – Thomas Edison</p>
              </div>
            </div>  
          </div>
        </div>
        <!--carousel end-->


              
            
<!--Card Start-->
<div class="card-group">
  <div class="card" >
    <img src="{{asset('asset/images/p8.jpg')}}" class="card-img-top" alt="no image">
    
    <div class="card-body">
      <h5 class="card-title">Emergency Cases</h5>
      <p class="card-text">In emergency cases every patient can takes services from our system and can contact with us anytime.</p>
      <p class="card-text"><small class="text-muted"><b>Our hot line number is <br>1234</b></small></p>
    </div>
  </div>
  <div class="card" >
    <img src="{{asset('asset/images/p9.jpg')}}" class="card-img-top" alt="no image">
    
    <div class="card-body">
      <h5 class="card-title">Working Hour</h5>
      <p class="card-text">Our employee works all night. Every patient can get services anytime from our system.</p>
      <p class="card-text"><small class="text-muted"><b>24/7 Hours Services</b></small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('asset/images/p10.jpg')}}" class="card-img-top" alt="no image">
    
    <div class="card-body">
      <h5 class="card-title">Expert Lab Technician</h5>
      <p class="card-text">We do all our work with expert technician. So we hope that all our work will done very perfectly.</p>
      <p class="card-text"><small class="text-muted"><b>5 Years Experiences</b> </small></p>
    </div>
  </div>

 


</div>
<!--Card End-->
<div class="line" style="margin-left: 8%;margin-top: 5%;">
  <span class="line-1"></span><br><br>
  <span class="line-2"></span><br><br>
  <span class="line-3"></span>
</div>
<!--news Letter start-->
<section id="contact">
  <div class="container contact-row">
      <div class="contact-left-col">
          <h3 style="color: rgb(240, 168, 75);">Subscribe To Join With Our<br>News Letter</h3>
          <form class="formnewsletter" action="{{route('newsletter.store')}}" method="POST">
          @csrf
              <input type="email" name="email" placeholder="Enter Your Email Address">
             
              <div class="btn-box">
                  <button class="common-btn">Subscribe</button>
                  
              </div>
          </form>
          <div class="line">
              <span class="line-1"></span><br><br>
              <span class="line-2"></span><br><br>
              <span class="line-3"></span>
          </div>
      </div>
      <div class="contact-right-col">
          <img src="{{asset('asset/images/p11.png')}}">
          
      </div>
  </div>
</section>

<!--end newsletter-->
<!--footer start-->
 <!--footer-->
 <section id="footer">
  <div class="container footer-row">
      <hr>
      <div class="footer-left-col">
          <div class="footer-links">
              <div class="link-title">
                  <h4>Product</h4>
                  <small>Our Plan</small><br>
                  <small>Free Trial</small>
              </div>
              <div class="link-title">
                  <h4>About Us</h4>
                  <small>Request Demo</small><br>
                  <small>FAQs</small>
              </div>
              <div class="link-title">
                  <h4>Support</h4>
                  <small>Features</small><br>
                  <small>Contact Us</small>
              </div>
              <div class="link-title">
                  <h4>Explore</h4>
                  <small >Find a nonprofit</small><br>
                  <small>Corporate Solution</small>
              </div>
          </div>
      </div>
      <div class="footer-right-col">
          <div class="footer-info">
              <div class="copyright-text">
                  <small style="font-weight: bold;">adibahazari@yahoo.com</small><br>
                  <small style="font-weight: bold;">Copyright 2020 UMME SALMA</small>
              </div>
              <div class="footer-logo">
                  <img src="{{asset('asset/images/p12.png')}}">
                  
                  <button class="common-btn" style="font-size: 80%;">English</button><br>
                  <p class="top" style="margin-top: 1%;">
                    <a href="#"  style="color: palevioletred;"><b>GO TO TOP</b></a>
                  </p>
              </div>
          </div>

      </div>
  </div>

</section>
<!--footer end-->
<!--side icon start-->
<div class="social-icons" style="margin-top:3%"> 
  <a href="https://www.facebook.com/profile.php?id=100009159459646"><img src="{{asset('asset/images/p13.png')}}"></a>
  <a href="https://www.instagram.com/p/CG6mPe4jpCXcmNC1msPUPpKKl8kNwbB0mvjE6E0/?igshid=10n3oxjcie920"><img src="{{asset('asset/images/p14.png')}}"></a>
  <a><img src="{{asset('asset/images/p15.png')}}" ></a>
  <a><img src="{{asset('asset/images/p16.png')}}" ></a>
  <a href="https://www.youtube.com/channel/UCJxr2kN3Y96jKSakOvBs2tw?view_as=subscriber"><img style="height: 20px;width: 20px;" src="{{asset('asset/images/p17.png')}}"></a>
</div>
<!--side icon end-->
    </main >

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    </body>
    </html>