<div class="w3-top navBar">
        <div class="w3-bar" id="myNavbar">

            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right"
                href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>
            <a href="Index.php" class="w3-bar-item w3-button w3-hide-small"> HOME</a>
            <a href="modeloverview.php" class="w3-bar-item w3-button">MODELLER</a>
            <?php 
            session_start();
            if(isset($_SESSION['username'])){
                echo '<a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-sign-out"></i> Logout</a>';
            }
            ?>
            <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-user"></i> MY MAZDA</a>

            </a>
        </div>
        <div class="navbarLogo">
            <img  src="Images/MazdaLogoNew.png" alt="logo">
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
            <a href="MY MAZDA" class="w3-bar-item w3-button" onclick="toggleFunction()">MY MAZDA</a>
            <a href="MODELLER" class="w3-bar-item w3-button" onclick="toggleFunction()">MODELLER</a>
        </div>
    </div>