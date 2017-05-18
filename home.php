<?php session_start();
if (!$_SESSION['email']) {
  header("location: index.php");
}
else {

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Smart Parking Web Portal</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
        body {
          font-family: "Open Sans Condensed", sans-serif;
          background: url(assets/img/1.jpg) no-repeat center center fixed;
          background-size: cover;
        }

        .top {
          width: 90%;
          margin: 0px auto;
          color:#bbdefb !important;

        }
        .bg {
          background: rgba(130,130,130,.7);
          border-bottom: 1px solid #eeff41;
        }

        .box {
           background: rgba(130,130,130,.7);
          padding: 4% 10px 8%;
          color:#bbdefb ;
          border-radius: 20px;
        }

.area{
  margin-bottom: 15px;
}

.cart-nav ul li {
  margin:3%;
  padding: 3%;
  color: #0000 !important;
}
    </style>
</head>
<body>
<nav class="row bg">
<div class="top">
  <div class="col-md-4"><h1>Smart Parking </h1></div>
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="dropdown">
      <br><h4 class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['email']; ?>
        <span class="caret"></span>
      </h4 >
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li class="dropdown-header">User Action!!</li>
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
    </div>

  </div>


  </div>
</nav>

<div class="row">
   <div class="container">
     <div class="box row">
         <div class="cart-nav col-xs-4">
           <ul>
             <li class="list-group-item">
               <select class="form-control">
                 <option>----[Search Cartegory 1]----</option>
                 <option>2</option>
                 <option>3</option>
                 <option>4</option>
                 <option>5</option>
               </select>
             </li>

             <li class="list-group-item">
               <select class="form-control">
                 <option>----[Search Cartegory 2]----</option>
                 <option>2</option>
                 <option>3</option>
                 <option>4</option>
                 <option>5</option>
               </select>
             </li>

             <li class="list-group-item">Notifications</li>
             <li class="list-group-item">Porta ac consectetur ac</li>
             <li class="list-group-item">Vestibulum at eros</li>
           </ul>
         </div>

         <div class="content col-xs-8">

<!--Parking spaces to display here-->
<div class="well well-lg">...</div>

         </div>
     </div>
   </div>
</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
<?php } ?>
