
<!DOCTYPE html>
<html>
<head>
	<title> User Login and Regisration </title>
	<link rel="stylesheet" type="text/css" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
</head>
<body>
    <h1>Gestion des hopitaux</h1>
	<div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6 login-left">
            <h2>Login here</h2>
            <form method="POST" action="validation.php">
                <div class="form-group">
                    <input type="text" name="username" class="form_control" placeholder="Enter Your Username" required>	
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form_control" placeholder="Enter Your passord" required>
                </div>
                <button type="submit"  class="btn btn-primary">LOGIN </button>
            </form>
        </div>
        <div class="col-md-6 login-right">
            <h2>Register here</h2>
            <form method="POST" action="registration.php">
                <div class="form-group">
                    <input type="text" name="username" class="form_control" placeholder="Enter Your Username" required>	
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form_control" placeholder="Enter Your passord" required>
                </div>
                <button type="submit"  class="btn btn-primary">Register</button>
            </form>
        </div>
        </div>
    </div>
</div>
</body>
</html>