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
     <title>Test Reports List</title>
</head>
<body style="background: whitesmoke;">
<div class="container">
        <a class="navbar-brand" href="{{url('/')}}" style="margin-top: 1%; font-weight: bold;color: #f67c92;"></b>TARA<br>DIAGNOSTIC <br><i class="fa fa-medkit" style="font-size:48px;color:rgb(146, 61, 75)"></i></a>

         </div>

         <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <h3 style="font-weight:bold;">Report</h3>
                        </div>

                        </div>
                        <div class="row p-5">
                        <div class="col-md-12">
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">Invoice Number</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Report Image</th>
                                        </tr>
                                </thead>
                                <tbody>
                               
                        
                                    <tr>
                                       
                                        <td>{{ $reportdata->invoicenumber }}</td>
                                        
                                        <td>
                                 <img style="height:20%;width:20%;" src="uploads/report/{{ $reportdata->image }}">
                     
                     
                     </td>
                                     
                                    </tr>
                                  
                                 
                                   
                                </tbody>
                            </table>
                            </div>
                            </div>
                        </div>






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