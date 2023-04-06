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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Mechanic Panel</title>
</head>
<style>

table {
         overflow-x: scroll;
         overflow-y:scroll; 
         display: block;
       //  min-height: 500px;
        
     }

th, td { min-width: 200px;}

body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
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
    background-color: #507786;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    //letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
}
.navbar li a, .navbar .navbar-brand {
    color: #fff !important;
    font-size: 14px;
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

table, th, td {
  border: 1px solid;
}

table, th{
  color:black;
}

table, td{
  color:#6d6969
}
.page-wrapper{
    margin-top: 150px;
    min-height: 455px;
}
</style>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <div id="root2"></div>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="<?= base_url(); ?>"></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?= base_url('mechanic/index'); ?>">REPAIR INFORMATION</a></li>
             
            </ul>
          </div>
        </div>
      </nav>
        <div class="jumbotron text-center" style="background-image: url('https://wtsevent.org/faceofamerica/wp-content/uploads/sites/2/2022/02/WTS-FOA-Lockup-Stacked-2color-RGB.gif');background-repeat: no-repeat;background-size: cover; background-position: center; height: 700px;">
       
       
      </div>

