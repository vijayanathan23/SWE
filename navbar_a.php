
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
      <nav class="navbar navbar-inverse" >
     	<div class="container-fluid">
	<div class="navbar-header">
	 		<a class="navbar-brand active">NEWS TORRENT #NOT PIRATED</a></div>
	   	
	   		
           <?php
               if(isset($_SESSION['admin']))
              { ?>
                <ul class="nav navbar-nav navbar-right">
              	
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                    
                  </ul>
                <?php 
             
               }
               else
               {?>
               	   <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"> HOME</span></a></li>
                    <li>
            <a href="#"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a>
            <ul class="dropdown">
                <li><a href="customer_login.php">USER</a></li>
                <li><a href="vendor_login.php">VENDOR</a></li>
                <li><a href="Admin_login.php">ADMIN</a></li>
            </ul>
        </li>
                     <li>
            <a href="#"><span class="glyphicon glyphicon-pencil"><b> REGISTER</b></span></a>
            <ul class="dropdown">
                <li><a href="user_reg.php">USER</a></li>
                <li><a href="vendor_reg.php">VENDOR</a></li>
                
            </ul>
        </li>
                     
	   		       </ul>
	   		     <?php
               }
            ?>
            

               
	   		</div>
	   	</nav>
</body>
</html>