<!DOCTYPE html>
<html> 

<head>
  <meta charset="utf-8">
  <title> Responsive Navbar </title>
  <meta name="viewport"> 
  <link rel="stylesheet" type="text/css" href="css/Contact.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">  

</head>
<body style="background-image: url('images/5.jpeg');">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #17a2b8;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">VALKIE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buy.php">Buy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sell.php">Sell</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  
      
  <div class="container" style="margin-top: 100px; margin-bottom: 70px;">
  <form class="container" action="action_page.php"><div class="container">

    <div class="row">
      <div class="col-md-8">
        <form  class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
          <legend>Contact us</legend>


          <div class="form-group">
            <label class="control-label col-xs-3">Email:</label>
            <div class="col-xs-4">
              <input type="input" class="form-control" name="email" required >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3">your Comment:</label>
            <div class="col-xs-4">
              <textarea class="form-control" name="comment"  row=10 ></textarea>
            </div>
          </div>
          <div class="form-group">
              <input type="submit" name="send_comment" value="submit" class="btn btn-primary" />
          </div>
        </fieldset>
      </form>

      </div>

      <div class="col-md-4">

        <ul class="list-group">
        <b>Our Offices</b>
          <li class='list-group-item'>
            <b>Nairobi Branch</b><br>
            P.O BOX 2151-1234,<br>
            Kileleshwa<br>
          </li>
          <li class='list-group-item'>
            <b>Diani</b><br>
            P.O BOX 2151-80100,<br>
            Mombasa<br>
          </li>
          <li class='list-group-item'>
            <b>Kisumu Branch</b><br>
            P.O BOX 2151-1234,<br>
            kisumu<br>
            Along Raila Ondiga road.<br>
          </li>
        </ul>
      </div>

    </div>
  </div>


<div class="py-2 bg-dark fixed-bottom">
  <div class="container">
    <p style="text-align:center; color:#6610f2;;">&copy 2020 VALKIE</p>
  </div>
</div>
      
   

<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>