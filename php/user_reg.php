<!DOCTYPE html>
<?php
include('Admin/conn.php');
	$msg="";
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $nm=trim($_POST['name1']);
			$ph=trim($_POST['phone']);
            $ad=trim($_POST['adress']);
        
        $ml=$_POST['mail'];
        $gen=$_POST['mf'];
        	$pass=trim($_POST['password']);
			$dbpass=md5($pass);
        
    
    
    
	$sql = "INSERT INTO user(name,phone,address,gender,mail,pwd)	VALUES('$nm','$ph','$ad','$gen','$ml','$dbpass')";
	$current_id = mysqli_query($link, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($link));
	if(isset($current_id)) {
		header("Location: index.php");
	}
}


?>


<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User Registration</title>
		<link href=".images/icon.png" rel="icon">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="Admin/style.css" rel="stylesheet">
        <link href="maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <style>
    body
    {
        background-image: url(images/user_login.jpg);
        background-repeat: repeat-y;
        background-size: cover;
    }
    
    
    </style>

	</head>

	<body>
	

		
		<nav class="navbar navbar-inverse top-menu">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">Art Gallery</a>
			</div>
			<div>
			  
				<ul class="nav navbar-nav navbar-right">
				<li><a href="#" style="color:#fff"><span class="glyphicon glyphicon-user"></span> Registration</a><li>
				<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<div class="container">
			<div class="panel panel-primary admin-login">
				<div class="panel-heading">
					<h3>Registration</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" >
					  <div class="bg-danger error_msg"><?php echo $msg;?></div>
					  <div class="form-group input-group">
							<span class="input-group-addon glyphicon glyphicon-user" style="top:0"></span><input type="text" name="name1" class="form-control"placeholder="Enter Full Name">
					  </div>
                        <div class="form-group input-group">
							<span class="input-group-addon glyphicon glyphicon-user" style="top:0"></span><input type="text" name="phone" class="form-control"placeholder="Enter Phone Number">
					  </div>
                        <div class="form-group input-group">
							<span class="input-group-addon glyphicon glyphicon-user" style="top:0"></span><input type="text" name="adress" class="form-control"placeholder="Enter the Address">
					  </div>
                        
                        <div class="form-group input-group">
							<span class="input-group-addon glyphicon glyphicon-user" style="top:0"></span><input type="text" name="mail" class="form-control"placeholder="Enter the Email">
					  </div>
                        <div class="form-group input-group">
							<span class="input-group-addon glyphicon glyphicon-user" style="top:0"></span><input type="password" name="password" class="form-control"placeholder="Enter the Password">
					  </div>
                        
                    <div class="form-group input-group">
                        <label class="radio-inline">Gender:</label>                  
                        <label class="radio-inline">
                            <input type="radio" name="mf" value="Male" checked>Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="mf" value="Female">Female
                        </label>
                        </div>
                        
                        
                        
                        
                        
                        <div class="form-group"> 
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                        
                    </div>
                    </form>
				</div>
			</div>
		</div>
        
        <div class="container">
	
</div>
	
			</body>
    
    <script type="text/javascript">
    $(function() {
        $( "#datepicker" ).datepicker({
            dateFormat : 'mm/dd/yy',
            changeMonth : true,
            changeYear : true,
            yearRange: '-100y:c+nn',
            maxDate: '-1d'
        });
    });
    
    
    </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</html>