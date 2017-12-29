<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE | Login </title>
        <!-- Custom Theme Style -->
        <link href="<?=base_url('assets/css/login.css')?>" rel="stylesheet">
    </head>
    <body class="login">
        <div class="container">
            <section id="content">
                <form action="#" id="login_form">
                    <h1>Login Form</h1>
                    <div>
                        <input type="text" name="username" placeholder="Username" required="" id="username" />
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Password" required="" id="password" />
                    </div>
                    <div>
                        <input type="submit" value="Log in" />
                        <a href="#">Lost your password?</a>
                        <a href="#">Register</a>
                    </div>
                </form><!-- form -->
            </section><!-- content -->
        </div><!-- container -->
         <!-- jQuery 2 -->
        <script src="<?=base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?=base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
        <!-- validator -->
        <script src="<?=base_url('assets/vendors/jquery-validation/jquery.validate.min.js')?>"></script>
        <script>
            $(document).ready(function() {
                $('#login_form').validate({
                    rules: {
                        username: {
                            required: true
                        },
                        password: {
                            required: true
                        }
                    },
                    submitHandler: function(form) {
                        $.ajax({
                            url: "<?=base_url('auth/do_login')?>",
                            type: 'post',
                            dataType: 'json',
                            data: $('#login_form').serializeArray(),
                            beforeSend: function() {},
                            success: function(data) {
                                $("#password").val('');
                                if (data.error == true) {
                                    alert(data.message);
                                } else {
                                    window.location.href = "<?=base_url('home')?>";
                                }
                            }

                        });
                    }
                });
            }); 
        </script>
    </body>