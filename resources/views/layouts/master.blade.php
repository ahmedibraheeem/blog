
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Ahmad Ibarhim's Personal Blog</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="{{URL::asset('css/blog.css')}}" rel="stylesheet">
</head>

<body>

@include ('layouts.nav')
<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">Ahmad Ibarhim's Personal Blog</h1>
        <p class="lead blog-description">you can follow my posts here.</p>
    </div>
</div>

<div class="container">

    <div class="row">

                @yield ('content')


            @include('layouts.sidebar')
        </div><!-- /.blog-main -->


    </div><!-- /.row -->

</div><!-- /.container -->
            @include ('layouts.footer')

</body>
</html>
