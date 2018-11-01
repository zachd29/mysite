<!DOCTYPE html>
<html lang="en">
<head>
   <title>Bootstrap 4 Example</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script 
src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script 
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script 
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

  
<body style="background-color: <?=$color?>;color:<?=$text?>;">


 <!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-light">

   <!-- Links -->
   <ul class="navbar-nav btn-group">

     <li class="nav-item">
       <a class="nav-link active" href="index.php">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="music.php">Information</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="pictures.php">Pictures</a>
     </li>
   </ul>

</nav>