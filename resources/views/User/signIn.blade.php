
<!DOCTYPE html>
<html>
<head>
    <title>Signin Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="/css/app.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>
<body>
<!-- main -->
<div class="main-w3layouts wrapper">
    <h1> SignIn </h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <form action="/" method="Get">
                @csrf

                <input class="text email" type="email" name="email" placeholder="Email" required="">
                <input class="text" type="password" name="password" placeholder="Password" required="">
                <div class="wthree-text">

                    <div class="clear"> </div>
                </div>
                <input type="submit" value="SIGNIN">
            </form>
            <p>Don't have an Account? <a href="/register"> signup Now!</a></p>
        </div>
    </div>


</div>
<!-- //main -->
</body>
</html>
