
<!DOCTYPE html>
<html>
<head>
    <title>SignUp Form</title>
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
    <h1> SignUp </h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <form action="/users" method="POST">
                @csrf
                <input type="hidden" name="">
                <input class="text" type="text" name="name" placeholder="name" required="">
                <input class="text email" type="email" name="email" placeholder="Email" required="">
                <input class="text" type="password" name="password" placeholder="Password" required="">
                <input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required="">
                <div class="wthree-text">

                    <div class="clear"> </div>
                </div>
                <input type="submit" value="SIGNUP">
            </form>
            <p>Already have an Account? <a href="/login"> Login Now!</a></p>
        </div>
    </div>
    @if ($errors-> any())
        <div class="w-4/8 m-auto text-center">
            @foreach( $errors->all() as $error )
                <li class="text-red-500 list-none">
                    {{$error}}
                </li>

            @endforeach


        </div>
    @endif
</div>


<!-- //main -->

</body>
</html>
