

<?php 

require_once 'vendor/autoload.php';

if(!session_id()) {
    session_start();
}

$facebook = new \Facebook\Facebook([
    'app_id'                    =>  '931302818639422',
    'app_secret'                =>  '9218a400773cf37c5f8307f66faa2676',
    'default_graph_version'     =>  'v17.0'
]);

?>