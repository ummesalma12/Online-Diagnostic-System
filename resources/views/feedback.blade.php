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
     <link rel="stylesheet"  href="{{asset('asset/CSS/feedbackCss.css')}}" >
    <title>Feedback</title>
</head>
<body>
<!--Header Start-->
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top text-light " style="background: rgb(226, 191, 226);">
        <a class="navbar-brand " href="{{url('/')}}" style="font-weight: bold; margin-left: 7%;"></b>TARA<br>DIAGNOSTIC <br><i class="fa fa-medkit" style="font-size:48px;color:seagreen"></i></a>
    
    </nav>
</header>
<!--header End-->

<div class="imagebg"></div>
<div class="rows ">
    <div class="col-md-6 col-md-offset-3 form-container">
        <h2>Feedback Form</h2>
        <p style="font-weight: bold; color: brown;">
            Please provide your feedback below:
        </p>
        <form role="form" id="reused_form" action="{{route('feedbackk.store')}}" method="POST">
        @csrf
            <div class="row">
                <div class="col-sm-12 form-group">
                <label class="label1">Please rate your overall experience?</label>
                <p>
                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="bad" >
                    Bad
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="average" >
                    Average
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="good" >
                    Good
                    </label>
                </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 form-group">
                <label class="label1">Please rate Our Cleanliness:</label>
                <p>
                    <label class="radio-inline">
                    <input type="radio" name="cleanliness" id="radio_experience" value="bad" >
                    Bad
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="cleanliness" id="radio_experience" value="average" >
                    Average
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="cleanliness" id="radio_experience" value="good" >
                    Good
                    </label>
                </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 form-group">
                <label class="label1">Please Rate Order Accuracy:</label>
                <p>
                    <label class="radio-inline">
                    <input type="radio" name="accuracy" id="radio_experience" value="bad" >
                    Bad
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="accuracy" id="radio_experience" value="average" >
                    Average
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="accuracy" id="radio_experience" value="good" >
                    Good
                    </label>
                </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 form-group">
                <label class="label1">Please Rate Speed Of Service:</label>
                <p>
                    <label class="radio-inline">
                    <input type="radio" name="speed" id="radio_experience" value="bad" >
                    Bad
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="speed" id="radio_experience" value="average" >
                    Average
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="speed" id="radio_experience" value="good" >
                    Good
                    </label>
                </p>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="comments" style=" font-weight: bold; 
                    color: coral;">
                        Comments:</label>
                    <textarea class="form-control" type="textarea" name="comment" id="comments" placeholder="Your Comments" maxlength="6000" rows="7" style=" color:black;
                    font-weight: bold;"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name" style=" font-weight: bold; 
                    color: coral;">
                        Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email" style=" font-weight: bold; 
                    color: coral;">
                        Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

                        <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-warning btn-block" style="font-weight: bold;" >Post </button>
                </div>
            </div>

        </form>
      <!--   <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Posted your feedback successfully!</h3>
        </div>
        <div id="error_message"
                style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3>
                    Sorry there was an error sending your form.

        </div> -->
    </div>
</div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
    
</body>
</html>