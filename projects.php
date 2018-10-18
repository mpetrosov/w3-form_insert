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

    <title>projects</title>
</head>
<body>

    <div class="col-1">
        <div class="register-form">
            <h1>Projet</h1>
            <form class="form" action="#" method="POST">
                <input class="name" type="text" name="pname" placeholder="project name">
                <input class="place" type="text" name="place" placeholder="place">
                <button class="button-back" type="submit" name="psubmit">submit</button>
            </form>
        </div>
    </div>
    
    <div class="message">
        <h2>Dear participant</h2>
        <?php 
            $pname = $_POST['pname'];
            $place = $_POST['place'];

            if (!isset($_POST['psubmit']) || empty( $pname) || empty($place)) {
                echo  '<h3 class="error">You mised first name, last name, or email</h3>';
            }else{
                echo "<h2>Welocome to our project: ".$pname. "<br>"." in ". $place."</h2>";
            } 
        ?> 
    </div>
    <a href="main.php" class="button"> home</a> 
</body>
</html>