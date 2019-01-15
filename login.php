
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>THE Art Gallery | Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="css/styles.css" rel="stylesheet">
  </head>

<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
        <div class="container">
            <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">The art gallery</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                        <a href="shop.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="shop.php">All art</a></li>
                            <li><a href="shop.php">Paintings</a></li>
                            <li><a href="shop.php">Drawings</a></li>
                            <li><a href="shop.php">Sculptures</a></li>
                            <li><a href="shop.php">Junk art</a></li>
                        </ul>
                        </li>
                        <li><a href="application.php">Artist Application</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <form action="#" class="navbar-form navbar-left" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="login.php">Sign in</a></li>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 0</a></li>     
                    </ul>
                </div>
            </div>
            </nav>
        </div>
    </div>

     <!-- main section 
    ====================================================-->
    <section class="form pimg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Sign in</a></li>
                        <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="login">
                            <form class="well" id="login" action="index.html">
                                <div class="form-group">
                                    <label for="header"><h3>Sign in <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></h3></label>
                                </div>
                                <div class="form-group">
                                    <label for="email-login">Email Address</label>
                                    <input id="email-login" type="email" class="form-control" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="password-login">Password</label>
                                    <input id="password-login" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="pull-left">
                                    <label for="remember-me">Remember me</label>
                                    <input id="remember-me" type="checkbox" value="remember">
                                </div>
                                <button id="login-btn" type="submit" class="btn btn-default btn-block">Login</button>
                                <div class="form-group">
                                    <p class="pull-right"><a href="">Forgot password?</a></p>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="register">
                            <form class="well" id="login" action="index.html">
                                <div class="form-group">
                                    <label for="header"><h3>Register as new user <span class="glyphicon glyphicon-user" aria-hidden="true"></span></h3></label>
                                </div>
                                <div class="form-group">
                                    <label for="first-name">Fisrt name</label>
                                    <input id="first-name" type="text" class="form-control" placeholder="Enter first name">
                                </div>
                                <div class="form-group">
                                    <label for="last-name">Last name</label>
                                    <input id="last-name" type="text" class="form-control" placeholder="Enter last name">
                                </div>
                                <div class="form-group">
                                    <label for="email-register">Email</label>
                                    <input id="email-register" type="email" class="form-control" placeholder="Enter e-mail">
                                </div>
                                <div class="form-group">
                                    <label for="contact">Mobile number</label>
                                    <input id="mobile-number" type="text" class="form-control" placeholder="Re-enter password">
                                </div>
                                <div class="form-group">
                                    <label for="password-register">Password</label>
                                    <input id="password-register" type="password" class="form-control" placeholder="Enter password">
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">Confirm password</label>
                                    <input id="password-confirm" type="password" class="form-control" placeholder="Re-enter password">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FOOTER -->
    <footer id="footer">
      <div class="container">
        <p class="pull-right"><a href="#navbar">Back to top</a></p>
        <p>&copy; 2017 The Art Gallery</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
