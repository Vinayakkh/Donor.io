<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">BBMS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="index.php" method="post">
                                        <?php 
                                            if(isset($_POST['name'])){
                                                $name = $_POST["name"];    
                                                $guardiansname = $_POST["guardiansname"];
                                                $gender = $_POST["gender"];
                                                $dob = $_POST["dob"];
                                                $weight = $_POST["weight"];
                                                $bloodgroup = $_POST["bloodgroup"];
                                                $email = $_POST["email"];
                                                $address = $_POST["address"];
                                                $contact = $_POST["contact"];
                                                $username = $_POST["username"];
                                                $password = $_POST["password"];

                                                include '../pages/dbconnect.php';
                                                //code after connection is successfull
                                                $qry = "insert into donor(name,guardiansname,gender,dob,weight,bloodgroup,email,address,contact,username,password) values ('$name','$guardiansname','$gender','$dob','$weight','$bloodgroup','$email','$address','$contact', '$username', '$password')";
                                                $result = mysqli_query($conn,$qry); //query executes
                                                if(!$result){
                                                    echo"ERROR";
                                            }
                                            else {
                                                echo" <div style='text-align: center'><h1>SUBMITTED SUCCESSFULLY</h1>";
                                                echo" <a href='..\userlog\userlogin.php' div style='text-align: center'><h3>Go Back</h3>";

                                            }

                                            }else{
                                                echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='..\userlog\userlogin.php'> DASHBOARD </a></h3>";
                                            }


                                        ?>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
<div>

<h2 style="color:#ffff00;">Thanks for Being the reason for someone's heartbeat <span style="color:#ff704d">&#10084</span></h2>

</div>

<style>
h2    {
margin-left: 250px;


    text-align: center; 
    background-color: black; 
}
</style>

</body>

<footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By Versha And Vinayak</p>
    </footer>
	
	<style>
	footer{
   background-color: #424558;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
	</style>

</html>
