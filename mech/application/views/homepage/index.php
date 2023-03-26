<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
    <title>Mechanic Record System</title>
  
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }

  button{
    background-color: #818181;
    color:black;
    height: 35px;
  }
  button:hover{
    background-color: red;
    color:white;
  }
  .button1 {
  background-color: black; 
  color: white; 
  border: 2px solid black;
  border-radius: 8px;
  }
  .button1:hover {
  background-color: white;
  color: black;
  border-radius: 8px;
  }
  .button2 {
  background-color: #008CBA; 
  color: white; 
  border: 2px solid #008CBA;
  border-radius: 8px;
  }
  .button2:hover {
  background-color: white;
  color: #008CBA;
  border-radius: 8px;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #236B8E;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }

  .panel-heading {
    color: #fff !important;
    background-color:black !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .navbar {
    margin-bottom: 0;
    background-color: black;
    z-index: 9999;
    border: 0;
    font-size: 14px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: black!important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  .bg-4 { 
    background-color: #2f2f2f;
    color: #fff;
  }
  .central{
    padding-top:3%; 
    padding-left: 6%; 
    color: black;
  }
  .Admin{
    padding-left: 42%; 
    color:black;
  }
  .adminh{
    text-transform:none;
    padding-left: 18%;
    padding-right: 18%;
  }
  .Mechanic{
    text-transform:none;
    padding-left: 18%;
    padding-right: 18%;
    color: #008CBA;
  }
  </style>
  </head>
  
  
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <div id="root"></div>

      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.html"><img src="https://wtsevent.org/faceofamerica/wp-content/uploads/sites/2/2022/02/WTS-FOA-Lockup-Stacked-2color-RGB.gif" alt="LOGO" width="200px" length="100px"></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?= base_url('mechanic'); ?>">MECHANIC</a></li>
              <li><a href="<?= base_url('admin'); ?>">ADMIN</a></li>
             
            </ul>
          </div>
        </div>
      </nav>
      
      <div class="jumbotron text-center">
        <h1>Face of America</h1> 
        <p>Mechanic Record System</p> 
        <form>
          <div class="input-group">
            <input type="email" class="form-control" size="50" placeholder="Email Address" required>
            <div class="input-group-btn">
              <button type="button" class="btn btn-warning">Subscribe</button>
            </div>
          </div>
        </form>
      </div>


    <h1 style="padding-top:3%; padding-left: 6%; color: black;" class="text-center">Central login</h1>
    <div class="container-fluid" style = "padding-top: 3%;">
      <div class="row">
        <div class="col-sm-6">
          <h1 style="padding-left: 42%; color:black">Admin</h1>
          <a href="<?= base_url('admin'); ?>">
            <span class="glyphicon glyphicon-user" style= "color:black; padding-left: 35%; font-size:200px; padding-top: 3%;"></span>
          </a>
          <a href="<?= base_url('admin'); ?>">
            <button class="button button1" style="height: 80px; width: 150px; margin-left: 38%; margin-top: 4%;">Login</button>
          </a>
        </div>
        <div class="col-sm-6">
          <h1 style="padding-left: 37%; color:#008CBA">Mechanic</h1>
          <a href="<?= base_url('mechanic'); ?>">
            <span class="glyphicon glyphicon-wrench" style= "color:#008CBA; padding-left: 35%; font-size:200px; padding-top: 3%;"></span>
          </a>
          <a href="<?= base_url('mechanic'); ?>">
          <button class="button button2" style="height: 80px; width: 150px; margin-left: 38%; margin-top: 3.5%;">Login</button>
          </a>
        </div>
      </div>
    </div>


    <footer class="container-fluid bg-4 text-center">
      <p>Mechanic Record System Made By Team Eagles</p> 
    </footer>



     

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
