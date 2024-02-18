

<?php 

include 'facebook1.php';
include 'head.php';
?>


<body style= "">
 <div class= "container" style= "margin-top: 20dvh;">
    <br />
    <h4 style= "text-align:left; color:#485563; font-family:Montesorrat; font-weight:bold;"> Signin using Facebook Account </h4>
    <br />
    <div class= "panel panel-default">
        <?php 
         if(isset($facebook_login_url)) {
            echo $facebook_login_url;
         }else {
            echo '<div class= "panel-heading"> Welcome User</div><div class= "panel-body">';
            echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
            echo '<h3><b>Name :</b> '.$_SESSION['user_name'].'</h3>';
            echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
            echo '<h3><a> href= "logout.php">Logout</h3></div>';
         }
        ?>
    </div>
 </div>


</body>
</html>

