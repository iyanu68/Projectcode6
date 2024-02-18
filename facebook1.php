
<?php  

include 'config.php';

$facebook_output = '';

$facebook_helper = $facebook->getRedirectLoginHelper();

if(isset($_GET['code'])) {
    if(isset($_GET['access_token'])) {
        $access_token = $_SESSION['access_token'];
    }else {
        $access_token = $facebook_helper->getAccessToken();

        $_SESSION['access_token'] = $access_token;

        $facebook->setDefaultAccessToken($_SESSION['access_token']);
    }

    $graph_response = $facebook->get("/me?fields=name,email", $access_token);

    $facebook_user_info = $graph_response->getGraphUser();

    if(!empty($facebook_user_info['id'])) {
        $_SESSION['user_image'] = 'http://graph.facebook.com/'.$facebook_user_info['id'].'/picture';
    }

    if(!empty($facebook_user_info['name'])) {
        $_SESSION['user_name'] = $facebook_user_info['name'];
    }

    if(!empty($facebook_user_info['email'])) {
        $_SESSION['user_email_address'] = $facebook_user_info['email'];
    }

}else {
    $facebook_permissions = ['email'];

    $facebook_login_url = $facebook_helper->getLoginUrl('https://projectcode6.adejanecode001.com.ng/', $facebook_permissions);

    $facebook_login_url = '<div align="left"> <a href= "'.$facebook_login_url.'"> <img src= "login-with-facebook.png" style = "width:35%; " /></a></div>';
}

?>
