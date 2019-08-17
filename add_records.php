<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css" type="text/css" />

    <!--BOOTSTRAP CDN INCLUD-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--END OF CDN -->
    
    <title>php CONCEPT LESSION</title>
</head>

<body>
<!--header-->
<!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">


    <div class="container">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="index.php">Tutorial of OOPS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
    </div>
</nav><br>
<!--HEADER END-->

<!--main content -->
<div class="container">


<!--jumbutron -->
<div class="jumbotron text-center">
  <h1>Php Oops Learning Tutorial</h1>
  <p>ted Programming (PHP OOP), is a type of programming language principle added to php5, that helps in building complex, reusable web applications </p> 
</div>
<!--end of jumbutron -->


    <form method="post" action="dbcrud.php">
    <table class="table">
    <tr>
    <td><input type="text" name="fname" class="form-control" placeholder="first name" required/></td>
    </tr>
    <tr>
    <td><input type="text" name="lname" class="form-control" placeholder="last name" required/></td>
    </tr>
    <tr>
    <td><input type="text" name="city" class="form-control" placeholder="city" required/></td>
    </tr>
    <tr>
    <td><button type="submit" class="btn btn-primary" name="save">save</button></td>
    </tr>
    </table>
    </form>

    <!-- FOOTER CONTENT -->
    <div class="footer">
         <label>Visit <a href="#">About us</a> for more tutorials...</label>
</div>

</div>
</body>
</html>