<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- normalisation of styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <!-- own styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- webstyles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Handlee|Source+Code+Pro" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/icons8-toolbox-50.png">

    <title>students</title>
</head>
<body>
    <div class="container"> 
        <h1>Student</h1>
        <div class="row">
            <div class="col-1">
                
            </div>
            <div class="col-1">
                <form class="form" action="#" method="POST">
                    <input class="fname" type="text" name="fname" placeholder="first name"><br>
                    <input class="sname" type="text" name="sname" placeholder="second name"><br>
                    <input class="email" type="text" name="semail" placeholder="E-mail"><br><br>
                    <button class="button-back" type="submit" name="ssubmit">submit</button>
                </form>
            </div>
            
            <div class="col-1">
                    <h2>Dear student!</h2>
                    <h>Hallo! 
                    <?php 
                        if (!isset($_POST['ssubmit']) || empty($fname) || empty($sname) || empty($semail)) {
                            $fname = $_POST['fname'];
                            $sname = $_POST['sname'];
                            $semail = $_POST['semail'];
                            echo "<h2>Hallo! ".$fname. " ". $sname. "<br>"." Your email: ". $semail."</h2>";
                        }else{
                            echo  '<h3 class="error">You mised first name, last name, or email</h3>';
                        } 
                    ?> 
            </div>
        </div>
    </div>
    <a href="teacher.php" class="button"> teacher</a>
</body>
</html>