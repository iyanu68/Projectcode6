

<?php 

include 'google1.php';
include 'head.php';

?>

<body>
 <div class="container">
  <br />
  <h4 style="text-align: left; color:#4e4376; margin-left:25.5em; font-family:monteserrat; font-weight:bold; "> Signin using Google Account </h4>
  <br />
  <div class= "panel panel-default">
    <?php  
    
    if(!empty($_SESSION['access_token'])) {

     echo '<div class="panel-heading"> Welcome User</div><div class= "panel-body">';
     echo '<img src="'.$_SESSION['profile_picture'].'" class="img-responsive img-circle img-thumbnail" />';
     echo '<h3><b>Name : </b>' .$_SESSION["first_name"].' '.$_SESSION['last_name']. '</h3>';
     echo '<h3><b>Email :</b> '.$_SESSION['email_address']. '</h3>';
     echo '<h3><a href="logout.php"> Logout </h3></div>';

    }else {
        echo '<div style= "text-align: center;">'.$login_button . '</div>';
    }
    
    ?>
  </div>
 </div>
</body>
</html>
