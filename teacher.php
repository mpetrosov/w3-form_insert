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

    <title>teachers</title>
</head>
<body>
    <div class="col-1">
        <div class="register-form">
            <h1>Teacher</h1>
            <form class="form" action="#" method="POST">
                <input class="fname" type="text" name="tfname" placeholder="first name">
                <input class="sname" type="text" name="tsname" placeholder="second name">
                <input class="email" type="text" name="temail" placeholder="E-mail" >
                <button class="button-back" type="submit" name="tsubmit">submit</button>
            </form>
        </div>
    </div>
    
    <div class="message">
        <h2>Dear teacher!</h2>
        
        <?php 
            $tfname = $_POST['tfname'];
            $tsname = $_POST['tsname'];
            $temail = $_POST['temail'];

            if (!isset($_POST['tsubmit']) || empty( $tfname) || empty($tsname) || empty($temail)) {
                echo  '<h3 class="error">You mised first name, last name, or email</h3>';
            }else{
                echo "<h2>Hallo! ".$tfname. " ". $tsname. "<br>"." Your email: ". $temail."</h2>";
            } 
        ?> 
        
    </div> 
    
    <a href="projects.php" class="button"> projects</a>
</body>
</html>