<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body style="margin: 10%;">
<div class="container">
 
<div class="panel panel-primary">
    <div class="panel-heading">
        <h4 style="font-weight: bold;">Login</h4>
    </div>
<div class="panel-body">
    <form method="post" action="<?php echo base_url('index.php/login/Login'); ?>">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="username">Username</label>
                <input required id="username" class="form-control" type="text" name="username_admin"></input>
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col-md12">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="password">Password</label>
                <input required id="password" class="form-control" type="password" name="password_admin"></input>
            </div>
        </div>
    </div>
 
 
    <center><button type="submit" class="btn btn-success">Submit</button></center>
</form>
</div>
</div>
</div>
</body>

</html>