<?php 
    $id = "";
    
    if(isset($_GET["id"]) && $_GET["id"] != ""){
	    $id = preg_replace('#[^a-zA-Z0-9]#', '', $_GET['id']);
    } else {
	    header("location: card_create.php");
        exit();	
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card <?php echo $id; ?></title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <style>
        body{ font-family: Arial, Helvetica, sans-serif; }
        button{ padding:5px 10px; font-size:17px; cursor:pointer; }
    </style>
</head>
<body>
    <img src="<?php echo "card_images/".$id.".jpg"; ?>" alt="card">
</body>
</html>
