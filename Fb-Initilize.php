<?php
//session start
session_start();

//add the initilize file
require './vendor/autoload.php';

$fb =new Facebook\Facebook([
	'app_id'=> '536012703499302',
	'app_secret'=>'638a16233186e65776642f97881b98dd',
	'default_graph_version'=>'v3.1'
	]);

	$helper=$fb->getRedirectLoginHelper();
	$loginUrl=$helper->getLoginUrl("https://sondaravapiyush777.000webhostapp.com/");
	

	try
	{

		$accessToken=$helper->getAccessToken();
		if(isset($accessToken))
		{
			$_SESSION['access_token']=(string)$accessToken;
			//header("Location:index.php");
			
			if (isset($accessToken))
			{
 
                    if (isset($_SESSION['facebook_access_token']))
                    {
 
            $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
 
                    }   
                    else 
                    {
 
// getting short-lived access token
 
                $_SESSION['facebook_access_token'] = (string) $accessToken;
 
  // OAuth 2.0 client handler
 
                $oAuth2Client = $fb->getOAuth2Client();
 
// Exchanges a short-lived access token for a long-lived one
 
                $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
 
                $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
 
// setting default access token to be used in script
 
                $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
 
                }
 
// redirect the user to the profile page if it has "code" GET variable
 
            if (isset($_GET['code'])) 
            {
 
            header('Location: index.php');
 
            }
 
// getting basic info about user
 
        try {
 
        $profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
 
        $requestPicture = $fb->get('/me/picture?redirect=false&height=200'); //getting user picture
 
        $picture = $requestPicture->getGraphUser();
 
        $profile = $profile_request->getGraphUser();
 
        $fbid = $profile->getProperty('id');           // To Get Facebook ID
 
        $fbfullname = $profile->getProperty('name');   // To Get Facebook full name
 
        $fbemail = $profile->getProperty('email');    //  To Get Facebook email
 
        $fbpic = "<img src='".$picture['url']."' class='img-rounded'/>";
 
# save the user nformation in session variable
 
        $_SESSION['fb_id'] = $fbid.'</br>';
 
        $_SESSION['fb_name'] = $fbfullname.'</br>';
 
        $_SESSION['fb_email'] = $fbemail.'</br>';
 
        $_SESSION['fb_pic'] = $fbpic.'</br>';
 
        }
        catch(Facebook\Exceptions\FacebookResponseException $e) {
 
// When Graph returns an error
 
        echo 'Graph returned an error: ' . $e->getMessage();
 
        session_destroy();
 
// redirecting user back to app login page
 
        header("Location: ./");
 
exit;
 
} catch(Facebook\Exceptions\FacebookSDKException $e) {
 
// When validation fails or other local issues
 
echo 'Facebook SDK returned an error: ' . $e->getMessage();
 
exit;
 
}
 
} else {
 
// back to login page
 
}


 

		}

	}
	catch(Exception $exc)
	{
		echo $exc->getTraceAsString();
	}

	
?>