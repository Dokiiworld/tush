<!DOCTYPE html>
<html>
<head>
<title>JSON</title>
<meta name="viewport" content="width=device-width" initial-scale="1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="js/jquery-3.1.1.js">
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>                                                                                                                                                                                                                                     
<script type="text/javascript" src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$("#go").click(function()
		{
			var fname= $('#fname').val();
			var lname= $('#lname').val();
			var phone= $('#phone').val();
			var email= $('#email').val();
			var password= $('#password').val();

			var data={"fname":fname, "lname":lname, "phone":phone, "email":email, "password":password}
			var form= JSON.stringify(data)			
			$.post("process.php",{formdata:form},function(f)
			{
			
			});
		});

		$("#check").click(function(){
			var em= $('#emaill').val();

			var chi={"name":em}
			var dis= JSON.stringify(chi)

			$.post("display.php",{email:dis},function(g)
			
			{
				JSON.parse(g);
				alert(g);
			
			});
		});
	});
</script>
<style type="text/css">
body{background-image: url('image/25.jpg');background-size: cover;}
#r1
	{
		margin-top:20px;
	}
#in input{border:none; border-bottom:1px solid #CCCCCC; background: none; box-shadow: none;}
#log input{border:none; border-bottom:1px solid #CCCCCC; background: none; box-shadow: none;}
</style>
</head>
<body>
	<div class="container">
		<div class="row" id="r1">
			<div class="col-md-3 col-sm-3 alert alert-warning" style="box-shadow: 2px 5px 5px grey;">
				<form method="post">
				<span><center><b>REGISTRATION</b></center></span><hr>
				<div id="in">
					<div class="form-group">
		    			<label>First Name:</label>
		    				<span class="input-group">
            				<span class="input-group-addon">
            				<span class="glyphicon glyphicon-user"></span></span>
								<input type="text" class="form-control" id="fname" required="required" name="fname">
							</span>
					</div>
					<div class="form-group">
		    			<label>Last Name:</label>
		    				<span class="input-group">
            				<span class="input-group-addon">
            				<span class="glyphicon glyphicon-user"></span></span>
								<input type="text" class="form-control" id="lname" required="required" name="lname">
							</span>
					</div>
					<div class="form-group">
		    			<label>Phone Number:</label>
		    				<span class="input-group">
            				<span class="input-group-addon">
            				<span class="glyphicon glyphicon-phone"></span></span>
								<input type="number" class="form-control" id="phone" required="required">
							</span>
					</div>
					<div class="form-group">
		    			<label>Email address:</label>
		    				<span class="input-group">
            				<span class="input-group-addon">
            				<span class="glyphicon glyphicon-envelope"></span></span>
								<input type="email" class="form-control" id="email" required="required">
							</span>
					</div>
					<div class= "form-group">
							<label>Password:</label>
								 <span class="input-group">
            					<span class="input-group-addon">
            					<span class="glyphicon glyphicon-lock"></span></span>
								    <input type="password" class="form-control" id="password" required="required"  placeholder="your secret code">
								</span>
					</div>
					</div>								
					<center><input type="submit" value="Submit" id="go" class="btn btn-warning" style="width:100%;"></center>
				</form><br>
				<span><em><a href="#log" data-toggle="collapse">Click to login</a></em></span>
			</div>

			<div class="col-md-3 col-sm-3 collapse" style="box-shadow: 2px 5px 5px grey; color: white; margin-top: 80px;" id="log">
				<form method="post">
				<span><center><b>LOGIN</b></center></span><hr>
					
					<div class="form-group">		    				
								<input type="email" class="form-control" id="email" required="required" placeholder="Email address">							
					</div>
					<div class="form-group">								 
								    <input type="password" class="form-control" id="password" required="required"  placeholder="Enter Password">								
					</div>								
					<center><input type="submit" value="Submit" id="" class="btn btn-default" style="width:100%; background-color: black;"></center>
				</form>
			</div>

			<div class="col-md-3 col-sm-3" style="box-shadow: 2px 5px 5px grey; color: white; margin-top: 80px;">				
				<hr>					
					<div class="form-group">								 
						<input type="email" class="form-control" id="emaill" required="required"  placeholder="Enter user email">								
					</div>								
					<center><input type="submit" value="Check" id="check" class="btn btn-default" style="width:100%; background-color: black;"></center>				
			</div>

		</div>
	</div>
</body>
</html>