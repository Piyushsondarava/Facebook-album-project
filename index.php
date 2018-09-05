<?php
error_reporting(1);
//session_start();
require './Fb-Initilize.php';
?>
<?php if(!isset($_SESSION['access_token'])):?>

  <!--<a href='<?php echo $loginUrl; ?>'>Login to FaceBook</a>-->
<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Facebook-Login</title>

    <!-- Bootstrap core CSS -->
    <link href="files/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="files/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="files/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Login Here</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="https://sondaravapiyush777.000webhostapp.com/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Errors & Warnings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Welcome To My site<p>
                Login Here to see your Profile
              </p></strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">This site is The challenge of <b>rtCamp</b> </p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="<?php echo $loginUrl; ?>">Login With Facebook</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Errors</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">
            

    Warning: file_get_contents(https://graph.facebook.com/v3.1/536012703499302/photos?fields=images,name,link&limit=9&access_token=EAAHngC7JhCYBAPtYt03X4YteiJQZA8xHS59bvprgsXtywSUveGnYTBZAdiYEmqd01bTT61nJnjRlCaXJ3tAVZCVBdra0n
    FNnmveZCOUZAZB19A9UZCPpJZCiyhHUSeJqS6Ssy3AE5wpW2MUo25BZBJPQKDijyGPpbaY96vw9bUz0YmidysGRN5R0fr7ZCJ5zvg
    2CUZD): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request in /storage/ssd3/995/6826995/public_html/index.php on line 79



Warning: Invalid argument supplied for foreach() in /storage/ssd3/995/6826995/public_html/index.php on line 82
            </p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="https://sondaravapiyush777.000webhostapp.com/index.php">Website Here</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Sturdy </h3>
              <p class="text-muted mb-0"></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Ready to Ship</h3>
              <p class="text-muted mb-0"></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Up to Date</h3>
              <p class="text-muted mb-0"></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Made with Love</h3>
              <p class="text-muted mb-0"></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    
<section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">This was the really great opportunity to build this project.If you give me the chance for an interview so,I'll try my best to prove myself.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>8320126020</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:sondaravapiyush777@gmail.com">sondaravapiyush777@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">


  
  <?php else:?>
<?php $access_token=$_SESSION['access_token'];
 ?>
 
 <link
 
        href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
 
        rel = "stylesheet">

 
  <?php if($_SESSION['fb_id']) {?>
 
 
        
        <div class = "container">
 
           <div class = "jumbotron">
 
              <h1>Hello <?php echo $_SESSION['fb_name']; ?></h1>
 
              <p>Welcome to MyFacebook</p>
              
             <center> <h1><a class="btn btn-light btn-xl sr-button" href="logout.php">Logout</a></h1></center>
 
           </div>
 
              <ul class = "nav nav-list">
 
                 <h4>Image</h4>
 
                 <li><?php echo $_SESSION['fb_pic']?></li></ul>
        <center><table border=0><tr>
                 <th><h4>Facebook ID        :</h4></th>
 
                 <td><?php echo  $_SESSION['fb_id']; ?></td></tr>
                 
                 <tr><th><h4>Facebook fullname      :</h4></th>
 
                 <td><?php echo $_SESSION['fb_name']; ?></td></tr>
 
                 <tr><th><h4>Facebook Email     :</h4></th>
 
                 <td><?php echo $_SESSION['fb_email']; ?></td></tr>
        </table>
              </center>
            </div>
          
 
      
<?php } ?>
 



        </h2>
        
      </div>
      
    </section> 
    
<section><div><center><h2>Your Information is here!</h2><center></center></div></section>
    
    <!-- Bootstrap core JavaScript -->
    <script src="files/jquery/jquery.min.js"></script>
    <script src="files/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="files/jquery-easing/jquery.easing.min.js"></script>
    <script src="files/scrollreveal/scrollreveal.min.js"></script>
    <script src="files/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
          <?php endif; ?>

<?php
//$accesstoken="EAADIlXDT1moBACFz5E0GQy4OSCrOXh46I3J5lbtzdlmIflGf64FQn6XHonx7HZARps6z6GLjMWZAMvZB4iYRLfWKnovDTtCUNtJy3mQQcwpajuiuPFZCoXZCryKHZCa6XcDQSEtusJk1upSrsdKHEiGbuPGckYfPfy1zHvcg31AZAvBpgAHAk7Ey2Wm3VDG6NMZD";

//$fb_page_id='2162858847304618';

// Get photo albums of Facebook page using Facebook Graph API
?>

