<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
</head>
<body style="background-color: #09192A">
    <div class="col-md-4 col-md-offset-4 form-login">
        <p><p>

            <div class="outter-form-login">
                <form  method="post" action="<?php echo base_url('index.php/login/Login'); ?>">
 <?php echo $this->session->flashdata('message');?>
                    <h3 class="text-center title-login"> <h4 style="font-weight: bold; color:white">Login <em class="glyphicon glyphicon-user"></em></h4></h3>

                    <div class="form-group">
                        <input type="text" class="form-control" name="email_user" placeholder="Email" required oninvalid="this.setCustomValidity('Email tidak boleh kosong')" oninput="setCustomValidity('')">>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password_user" placeholder="Password" required oninvalid="this.setCustomValidity('Password tidak boleh kosong')" oninput="setCustomValidity('')">>
                    </div>

                    <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                </form>
            </div>
        </div>

    </body>
    </html>
   <script src="<?php echo base_url('assets/js/jquery-1.10.2.js')?>"></script>
    <!-- Bootstrap Js -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>" ></script>
    <!-- Metis Menu Js -->
   