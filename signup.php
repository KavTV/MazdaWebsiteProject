<?php
if (isset($_POST['username']) && !empty($_POST['password'])) {
    //Set post data
    $postData = array(
        'Username' => $_POST['username'],
        'Password' => $_POST['password'],
    );

    //Set url
    $url = "https://localhost:44307/api/User";
    $ch = curl_init();
    //Settings
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Accept-Encoding: gzip",
        "Content-Type: application/json"
    ));
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For HTTPS
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For HTTPS
    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;

    if ($response == "true") {
        $_SESSION['username'] = $_POST['username'];
        header("Location: mymazda.php");
    } else {
        echo 'Kunne ikke oprette bruger, prøv et andet brugernavn';
    }
}
else{
    echo 'Alle felter skal være udfyldt';
}
