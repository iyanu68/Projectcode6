<?php 

include 'vendor/autoload.php';

    $google_client = new Google_Client();

    $google_client->setClientId(
    "865370624526-6covpvc2s3fa4vl8fjcaloc9u0s0vpa2.apps.googleusercontent.com"
    );

    $google_client->setClientSecret(
    "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"
    );

    $google_client->setRedirectUri(
    'https://projectcode6.adejanecode001.com.ng'
    );

    $google_client->addScope('email');

    $google_client->addScope('profile');

    if(isset($_GET["code"])) {
    
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

        if(!empty($token["access_token"])){
            $google_client->setDefaultAccessToken($token['access_token']);

            $_SESSION['access_token']=$token['access_token'];

            $google_service = new Google_Service_Oauth2($google_client);

            $data = $google_service->userinfo->get();

            $current_datetime = date('Y-m-d H:i:s');


    $_SESSION['first_name']=$data['given_name'];
    $_SESSION['last_name']=$data['family_name'];
    $_SESSION['email_address']=$data['email'];
    $_SESSION['profile_picture']=$data['picture'];




        }
    }


    $login_button = '';

    if(!isset($_SESSION['access_token']) || empty($_SESSION['access_token'])) {

        $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="login-with-google.jpg" style = "width:35%; float:center; margin-top:0.5em;"/></a>';

    }

?>