<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E&#45;Commerce</title>
    
    <link rel="stylesheet" href="css/bootstrap_.min.css">
    <link rel="stylesheet" href="css/myStyle.css">
    <script src="js/jquery_.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    {{ View::make('layouts.header')}}
    <div class="container">
       <div class="mastermt">
            @yield('content')
        </div>
    </div>
    {{ View::make('layouts.footer')}}
    
</body>
<script>
    
    /*
    $(document).ready(function(){
        $("button").click(function(){
            alert('Clicked');
        });
    });
    */
</script>
</html>