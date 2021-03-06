<!DOCTYPE html>
<html lang="en" style="overflow: hidden;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Styles/modelConfig.css">
    <link rel="stylesheet" href="Styles/allPageStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <script type="text/javascript" src="JS/ConfigPage.js"></script>
    <script src="JS/Header.js"></script>
    <title>Model configurator</title>
</head>

<body>

    <?php
    include_once('header.php');
    ?>

    <div class="container-fluid">
        <div class="row" style="margin-top: 100px;">
            <div class="col d-flex justify-content-center">
                <h1>Mazda 2</h1>
            </div>

            <div class="col typeConfigSeperator">
                <div class="typeConfigClick" onclick="openNav()">
                    <div class="row">
                        <div class="typeConfig"></div>
                    </div>
                    <div class="row">
                        <h4 class="typeConfigText">Motor</h2>
                    </div>
                </div>

                <div class="typeConfigClick" onclick="openNav()">
                    <div class="row">
                        <div class="typeConfig"></div>
                    </div>
                    <div class="row">
                        <h4 class="typeConfigText">Farve</h2>
                    </div>
                </div>

                <div class="typeConfigClick" onclick="openNav()">
                    <div class="row">
                        <div class="typeConfig"></div>
                    </div>
                    <div class="row">
                        <h4 class="typeConfigText">Interi??r</h2>
                    </div>
                </div>

                <div class="typeConfigClick" onclick="openNav()">
                    <div class="row">
                        <div class="typeConfig"></div>
                    </div>
                    <div class="row">
                        <h4 class="typeConfigText">F??lge</h2>
                    </div>
                </div>

                <div class="typeConfigClick" onclick="openNav()">
                    <div class="row">
                        <div class="typeConfig"></div>
                    </div>
                    <div class="row">
                        <h4 class="typeConfigText">Udstyr</h2>
                    </div>
                </div>
            </div>

            <div class="col d-flex justify-content-center">
                <h1>159.000 kr.</h1>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <?php
                if(isset($_GET["model"])){
                    echo '<img src="'.$_GET["model"].'" style="height: 80vh;">';
                }
                else{
                    echo '<img src="Images/Mazda2Config.jpg" alt="Mazda2" style="height: 80vh;">';
                }
                ?>
                
            </div>
        </div>

    </div>

    <div id="mySidebar" class="sidebar">
        <div class="col">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">??</a>

            <!-- Motor selection -->
            <div class="card sidebarOption" onclick="closeNav()">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h2>SKYACTIV-G 1.5</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h3>90 (66) HK (KW) | BENZIN</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h3>200.000 KR</h3>
                    </div>
                </div>


                <div class="row" style="margin: 10px;">

                    <div class="col">
                        <h4 class="sidebarCardHeaderText">TR??KKENDE HJUL</h4>
                        <h4 class="sidebarCardUnderText">Forhjulstr??k</h4>
                    </div>
                    <div class="col">
                        <h4 class="sidebarCardHeaderText">GEARKASSE</h4>
                        <h4 class="sidebarCardUnderText">6-trins manuel Gearkasse</h4>
                    </div>
                    <div class="col">
                        <h4 class="sidebarCardHeaderText">BR??NDSTOF??KONOMI</h4>
                        <h4 class="sidebarCardUnderText">20,8 km/l</h4>
                    </div>
                    <div class="col">
                        <h4 class="sidebarCardHeaderText">Co2-emissioner</h4>
                        <h4 class="sidebarCardUnderText">109 g/km</h4>
                    </div>

                </div>

            </div>

            <div class="card sidebarOption" onclick="closeNav()">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h2>SKYACTIV-G 1.5</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h3>115 (85) HK (KW) | BENZIN</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h3>215.000 KR</h3>
                    </div>
                </div>


                <div class="row" style="margin: 10px;">

                    <div class="col">
                        <h4 class="sidebarCardHeaderText">TR??KKENDE HJUL</h4>
                        <h4 class="sidebarCardUnderText">Forhjulstr??k</h4>
                    </div>
                    <div class="col">
                        <h4 class="sidebarCardHeaderText">GEARKASSE</h4>
                        <h4 class="sidebarCardUnderText">6-trins manuel Gearkasse</h4>
                    </div>
                    <div class="col">
                        <h4 class="sidebarCardHeaderText">BR??NDSTOF??KONOMI</h4>
                        <h4 class="sidebarCardUnderText">20,0 km/l</h4>
                    </div>
                    <div class="col">
                        <h4 class="sidebarCardHeaderText">Co2-emissioner</h4>
                        <h4 class="sidebarCardUnderText">113 g/km</h4>
                    </div>

                </div>

            </div>

        </div>
    </div>

</body>

</html>