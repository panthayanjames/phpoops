<?php
include_once 'inc/classcrud.php';
$crud = new db_class();
?>
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
                <a class="nav-link" href="#">Tutorial of OOPS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
    </div>
</nav></br/>
<!--HEADER END-->


<!--main content -->
<div class="container">


<!--jumbutron -->
<div class="jumbotron text-center">
  <h1>Php Oops Learning Tutorial</h1>
  <p>ted Programming (PHP OOP), is a type of programming language principle added to php5, that helps in building complex, reusable web applications </p> 
</div>
<!--end of jumbutron -->


    <table class="table">

         <tr>
            <td colspan="5"><a href="add_records.php">add new</a></td>
        </tr>

        <?php
        $res = $crud->read();
        if(mysqli_num_rows($res)>0)
        {
            while($row = mysqli_fetch_array($res))
            {?>
                <tr>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['user_city']; ?></td>
                    <td><a href="edit_records.php?edt_id=<?php echo $row['user_id']; ?>">edit</a></td>
                    <td><a href="dbcrud.php?del_id=<?php echo $row['user_id']; ?>">delete</a></td>
                </tr>
            <?php
            }	
        }
        else
        {
            //no Records found or fetch from database
            ?><tr><td colspan="5">Nothing here... add some new</td></tr><?php
        }
        ?>
    </table>

    <!-- FOOTER CONTENT -->
    <div class="footer">
     Visit <a href="#">About us</a> for more tutorials...
    </div>

</div>
</body>
</html>