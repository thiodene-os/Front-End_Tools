<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/php/common.php');
// This verifies the login credentials of the user after Login attempt
// sends back the script for the login_container

$dbc = db_connect_map() ;
$my_ajax_html = '' ;
if (isset($_GET['signup'])) 
{
  
  // Get the selected company ID from GET
  $e = trim(strtolower($_GET['email'])) ;
  $p = trim($_GET['password']) ;
  $country = $_GET['country'] ;
  $country_code = '+' . $_GET['country_code'] ;
  $phone = $_GET['phone'] ;
  
  // Get the country ID
  switch ($country)
  {
    case 'canada': $country_id = '1' ; break ;
    case 'usa': $country_id = '2' ; break ;
    default: $country_id = '1' ; break ;
  }

  //g-recaptcha-response has the string sent by google recapcha 
  $captcha = '' ;
  if(isset($_GET['g_recaptcha_response']))
	$captcha = $_GET['g_recaptcha_response'];

  $ip = $_SERVER['REMOTE_ADDR'];
  
  // SecretKey assign by google recapcha
  $secretKey = "6LXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";  
  
  // use curl to POST secretkey,response and ip to google URL         
  $opts = array(
			  'remoteip' => $ip,
			  'response' => $captcha,
			  'secret' => $secretKey
			  );

  $url = "https://www.google.com/recaptcha/api/siteverify";
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_POST, 1); // Means the curl method is POST
  curl_setopt($curl, CURLOPT_POSTFIELDS,$opts);

  // receive server response in json format...
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $server_output = curl_exec ($curl);
  $server_output_json = json_decode($server_output,true);
  curl_close ($curl);  
  
  // If success=1 means user is not robot 

  if($server_output_json['success'] == 1)
  {
	  // Verify that the email/password belong in SIMS
	  // Query the database.
	  $query = "SELECT id
				FROM members 
				WHERE email='$e'";
	  
	  $result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br>MySQL Error: " . mysqli_error($dbc));
	  if (@mysqli_num_rows($result) == 0) 
	  {	// No previous signup.
	    
		// Verification codes for email and phone
		$pdigit = 4;
		$phone_code = rand(pow(10, $pdigit-1), pow(10, $pdigit)-1);
		$edigit = 6;
		$email_code = rand(pow(10, $edigit-1), pow(10, $edigit)-1);
		// Create the verification token for Verify page
		$a = md5(uniqid(rand(), true));
	  
		$query2 = "INSERT INTO members (email, password, phone_country_code, phone_number, country_id, email_verified_code, phone_verified_code, verification_token, added_dt) VALUES ('" 
				. $e . "', SHA('". $p . "'), '" . $country_code . "', '" . $phone . "', '" . $country_id . "', '" . $email_code . "', '" . $phone_code . "', '" . $a . "',NOW()); " ;
		$result2 = mysqli_query($dbc, $query2) or trigger_error("Query: $query2\n<br>MySQL Error: " . mysqli_error($dbc)) ;
		
		$my_ajax_html = $a ; // 32 characters long, no other Ajax responses can be 32 long!!
	  
	  }
	  else
	  {
		$my_ajax_html = '<span>The email address is already signed up!</span>' ; 
	  }
  } 
  else
  {
	$my_ajax_html = '<span>Your not-a-robot verification failed!</span>' ; 
  }
}
else
{
  // If no equipment ID HTML has to be empty
  $my_ajax_html = '<span>Sign up attempt failed, try again!</span>' ;
}

db_close_map($dbc) ;

echo $my_ajax_html ;

?>
