<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>American Disability Solutions</title>

    <!-- Bootstrap Core CSS -->

    <!-- <link href="css/animated.css" rel="stylesheet"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/font-awesome.css" rel="stylesheet" type="text/css"> -->




    <!-- Custom CSS -->
    <!-- <link href="css/agency.css" rel="stylesheet"> -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'> -->

<!--     <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
 -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="http://use.edgefonts.net/montserrat:n4:all.js"></script>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.html">American Disability Solutions</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
                   <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">About<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li> 
                                <a href="overview.html">Overview</a>
                            </li>
                        <li>
                            <a href="examiners.html">Social Security Disability 
                                Examiners</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="page-scroll" href="ourteam.html">Our Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    
<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
                <div class="row">
                <div class="col-lg-12">
                    
                    <br> <br>
                   <div class = "cntr">
                    <div class="wow fadeInLeft">
                        <p class="text-muted">WHEN YOU ARE READY, WE HAVE THE BACKS OF OUR AMERICAN VETERNS.</p>
                        <p class="text-muted">WHEN YOU ARE READY,  WE HAVE THE BACKS OF OUR AMERICAN WORKERS.</p>
                        <p class="text-muted">WE FIGHT FOR YOUR SOCIAL SECURITY BENEFITS.</p>
                        <p class="text-muted">WE FIGHT FOR YOUR DISABILITY BENEFITS.</p>
                        <br>
                        <p class="text-muted">WE FIGHT FOR YOU WITHOUT ANY OUT-OF-POCKET FEES OR EXPENSES. IF YOU DON'T GET PAID, WE DON'T GET PAID.</p>
                        <br>
                        <p class="text-muted enlrg">LET US HELP YOU PUT THE MUCH NEEDED FINANCIAL SECURITY AND STABILITY BACK INTO YOUR HOME.</p>
                       
                        
                           
                        <br>
                        <div class="col-lg-12 text-center">
                                
                                <a href="mailto: david.ammon@americandisabilitysolutions.com">
                                    <button type="button" class="btn btn-xl">Send Message</button>
                                </a>
                            <br>
                                    <div>
                            <p class="text-muted enlrg"> CALL AMERICAN DISABILITY SOLUTIONS,<br> Phone: 913-206-9163 <br> E-Mail: david.ammon@americandisabilitysolutions.com</p>
                            </div>
                            </div>
            </div>
                    </div>
                    </div>
            </div>
        </div>
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   }  else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

    <div class="cntr">
    <h2>Contact Form</h2>

<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   <div class="field">
    <label for="name">Name </label>
       <br>
    <input type="text" name="name">
   <span class="error">*<?php echo $nameErr;?></span>
    </div>
    <div class="field">
   <label for="email">Email</label>
        <br>
    <input type="text" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
    </div>
   <div class="field">
    <label for="message">Message</label>
       <br>
    <textarea name="comment" rows="8" cols="40"></textarea>
    </div>
    <button type="submit" name="submit" value="Submit">Submit</button>
</form>
    </div>

<?php
$to = "ajammon1@gmail.com";
$subject = "new contact form submission";
 $message = "A visitor of americandisabilitysolutions has submitted the following requirements. \n\n: $name\n\nEmail: $email\n\ninquiry: $comment\n\nPlease responsd to this message within 24 hours. ";

mail($to,$subject,$message);
?>

    </section>
      <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>info@americandisabilitysolutions.com</div>
                    <div>
                        Copyright © 2015 American Disability Solutions. All Rights Reserved.
                    </div>
                    
            </div>
               <!-- <div class="col-md-12">
                    <ul class="list-inline social-buttons">
                        <li><a href=""><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href=""><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div> -->
                
            </div>
        </div>
    </footer>

   
   

    <!-- jQuery Version 1.11.0 -->

    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/scripts.js"></script>
    <!-- <script src="js/main-velocity-animations.js"></script> -->
    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
<!--     <script src="http://cdn.jsdelivr.net/velocity/1.1.0/velocity.min.js"></script>
 -->    
<!--     <script src="js/wow.min.js"></script>-->
    <!-- Plugin JavaScript -->
<!--     <script src="js/classie.js"></script> -->
    <!-- <script src="js/cbpAnimatedHeader.js"></script> -->

    <!-- Contact Form JavaScript -->


    <!-- Custom Theme JavaScript -->
    <!-- <script src="js/agency.js"></script> -->
<!-- ScrollReveal Helper -->
    <!-- <script src="js/anijs-min.js"></script> -->
     <!-- <script src="js/anijs-helper-scrollreveal-min.js"></script> -->

    <script src="js/font-bomb.js" type="text/javascript"></script>
    <script>
        new WOW().init();
    </script>
<script>
    (function(f,b,g){
        var xo=g.prototype.open,xs=g.prototype.send,c;
        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
        f._hjSettings={hjid:7600, hjsv:2};
        function ls(){f.hj.documentHtml=b.documentElement.outerHTML;c=b.createElement("script");c.async=1;c.src="//static.hotjar.com/c/hotjar-7600.js?sv=2";b.getElementsByTagName("head")[0].appendChild(c);}
        if(b.readyState==="interactive"||b.readyState==="complete"||b.readyState==="loaded"){ls();}else{if(b.addEventListener){b.addEventListener("DOMContentLoaded",ls,false);}}
        if(!f._hjPlayback && b.addEventListener){
            g.prototype.open=function(l,j,m,h,k){this._u=j;xo.call(this,l,j,m,h,k)};
            g.prototype.send=function(e){var j=this;function h(){if(j.readyState===4){f.hj("_xhr",j._u,j.status,j.response)}}this.addEventListener("readystatechange",h,false);xs.call(this,e)};
        }
    })(window,document,window.XMLHttpRequest);
</script>
    </body>


</html>