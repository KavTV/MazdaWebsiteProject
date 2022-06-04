<?php
session_start();

//If the user has not logged in, send him back to mainpage
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
$url = sprintf("https://localhost:44307/api/usercar?username=%s", $_SESSION['username']);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For HTTPS
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For HTTPS
$response = curl_exec($ch);
curl_close($ch);

$json = json_decode($response, true);

//Add values to variables
$kmDriven = $json['kmDriven'];
$model = $json['model'];
$kmLeft = $json['kmLeft'];
$username = $json['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Mazda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Styles/modelConfig.css">
    <link rel="stylesheet" href="Styles/allPageStyle.css">
    <link rel="stylesheet" href="Styles/myMazdaStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <script src="JS/Header.js"></script>
</head>

<body>

    <!-- NAVBAR -->
    <?php
    include_once('header.php');
    ?>

    <div class="container-fluid" style="margin-top:100px;">
        <div class="d-flex justify-content-center">
            <h1>Velkommen til, <?php echo $_SESSION['username']; ?></h1>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center" style="height:30vh">
                <img src="Images/Mazda2Config.jpg" style="height:100%" alt="">
            </div>
        </div>

        <div class="row" style="height: 40vh; gap: 20px; margin: 0px 1%;">

            <div class="col col-md d-flex align-items-center justify-content-center infoBox">
                <h1 id="kmdriven" class="infoText"><?php echo $kmDriven; ?> KM Kørt</h1>
            </div>
            <div class="col col-md d-flex align-items-center justify-content-center infoBox">
                <h1 id="kmleft" class="infoText"><?php echo $kmLeft; ?> KM TILBAGE I TANKEN</h1>
            </div>
            <div class="col col-md d-flex align-items-center justify-content-center infoBox" style="cursor: pointer;">
                <h1 class="infoText">Service</h1>
            </div>

        </div>
    </div>

</body>

</html>