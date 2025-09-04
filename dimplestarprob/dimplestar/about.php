<?php
include 'php_includes/connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dimple Star Transport</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="icon" href="images/icon.ico" type="image/x-con">
<style>

</style>
</head>
</head>
<body>
<div id="wrapper">
<?php include 'navbar.php'; ?>
    <div id="content">
        <div class="about-container">
            <div class="about-header">
                <h1 class="about-title">ABOUT US</h1>
            </div>
            
            <div class="about-content">
                <div class="about-image">
                    <img src="images/oldbus.jpg" alt="Dimple Star Transport History">
                </div>
                
                <div class="about-text">
                    <div class="about-section">
                        <h3 class="section-title">History</h3>
                        <div class="section-content">
                            Photo taken on October 16, 1993. Napat Transit (now Dimple Star Transport) NVR-963
                            (fleet No 800) going to Alabang and jeepneys under the Light Rail Line in Taft Ave near
                            United Nations Avenue, Ermita, Manila, Philippines.
                            <br><br>
                            Year 2004 of May changes has been made, Napat Transit became Dimple Star Transport.
                        </div>
                    </div>
                    
                    <div id="fb">
                        <?php include_once("php_includes/fblike.php"); ?>
                    </div>
                </div>
            </div>
            
            <div class="mission-vision">
                <div class="mission-card">
                    <h3 class="card-title"> Mission</h3>
                    <p class="card-content">To provide superior transport service to Metro Manila and Mindoro Province commuters.</p>
                </div>
                
                <div class="vision-card">
                    <h3 class="card-title">Vision</h3>
                    <p class="card-content">To lead the bus transport industry through its innovation service to the riding public.</p>
                </div>
            </div>
        </div>
    </div>
   
    <div id="footer">
        <a href="index.php"><img src="images/logo.png" alt="Dimple Star Transport" class="logo-img"></a>
        <p>&copy; Dimple Star Transport<br /></p>
    </div>
</div>
</body>
</html>
