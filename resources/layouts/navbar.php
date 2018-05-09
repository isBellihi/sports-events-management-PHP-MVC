<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sport Facile</title>
 <style>
#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}
body{
     background-image:url(uploads/backe/background7.jpg) ;
     background-size: cover;
    padding: 0;
    margin: 0;

}
</style>
    <link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
   
      <!-- Plugin CSS -->
    

    <!-- Theme CSS pour changer la coleur de nav bar -->
    <link href="../../public/css/creative.min.css" rel="stylesheet" type="text/css">

    <script src="../../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/jquery.js"></script>


</head>
<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" >
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="padding-top: 10px">
                <a class="navbar-brand page-scroll" href="/" style="margin-top: -10px"><i class="fa fa-2x     fa-home" ></i>Sport Facile</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="{{url('/home')}}">logements</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="{{url('/#contact')}}">Contact</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Notifications <span class="badge" style="margin-left: 5px; background-color: rgba(0, 102, 255,0.5);"></span></b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu" style="background: rgba(102, 102, 255,0.5);">
                
                            <li class="btn-link ">notification</li>
                            <li class="btn-link ">notification</li>
                            <li class="btn-link ">notification</li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Login via</h5>
                                        <div class="social-buttons">
                                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                        </div>
                                        or
                                        <form class="form" role="form" method="post" action="{{ route('login') }}" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="sr-only">E-Mail Address</label>
                                            <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                            <span class="help-block">
                                                <strong></strong>
                                            </span>
                                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="sr-only">Password</label>

      
                                <input id="password" type="password" class="form-control" name="password" required>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                <div class="help-block text-right"><a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a></div>
                        </div>

                        <div class="form-group">
                                             <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                        <div class="checkbox">
                                             <label>
                                             <input type="checkbox" name="remember"> Remember Me
                                             </label>
                                        </div>
                                 </form>
                            </div>
                            <div class="bottom text-center">
                                New here ? <a href="{{ route('register') }}"><b>Join Us</b></a>
                            </div>
                     </div>
                </li>
            </ul>
        </li>
                </ul>
            </div>
        </div>
    </nav>  
    
    <?php $content; ?>


    <script src="../../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/creative.min.js"></script>
    
</body>
</html>