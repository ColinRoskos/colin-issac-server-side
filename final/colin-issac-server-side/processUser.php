<?php

	include 'includes/db-config.inc.php';

	$userDB = new UserDB($pdo);
	$personDB = new PersonDB($pdo);
	$paymentInfoDB = new PaymentInfoDB($pdo);


	$formValid = true;

	global $fName,
			$lName,
			$email,
			$password,
			$address,
			$city,
			$state,
			$zipCode,
			$country,
			$phone,
			$ccName,
			$ccCvv,
			$ccNumber,
			$ccExpireMonth,
			$ccExpireYear;

	if(isSet($_POST['fName']))
		$GLOBALS['fName'] = $_POST['fName'];
	else
		$formValid = false;
	if(isSet($_POST['lName']) && $formValid)
		$GLOBALS['lName'] = $_POST['lName'];
	else
		$formValid = false;
	if(isSet($_POST['email']) && $formValid)
		$GLOBALS['email'] = $_POST['email'];
	else
		$formValid = false;
	if(isSet($_POST['password']) && $formValid)
		$GLOBALS['password'] = $_POST['password'];
	else
		$formValid = false;
	if(isSet($_POST['confirmPassword']) && $formValid && ($_POST['confirmPassword'] == $_POST['password']))
		$formValid = $formValid;
	else
		$formValid = false;

	// address
	if(isSet($_POST['address']) && $formValid)
		$GLOBALS['address'] = $_POST['address'];
	else
		$formValid = false;
	// second address
	if(isSet($_POST['address2']) && $formValid)
		$GLOBALS['address']  = $GLOBALS['address']  . "\n" . $_POST['address2'];
	// city
	if(isSet($_POST['city']) && $formValid)
		$GLOBALS['city']  = $_POST['city'];
	else
		$formValid = false;
	// state
	if(isSet($_POST['state']) && $formValid)
		$GLOBALS['state']  = $_POST['state'];
	else
		$formValid = false;
	// zip code
	if(isSet($_POST['zipCode']) && $formValid)
		$GLOBALS['zipCode']  = $_POST['zipCode'];
	else
		$formValid = false;
	// country
	if(isSet($_POST['Country']) && $formValid)
		$GLOBALS['country']  = $_POST['Country'];
	else
		$formValid = false;
	// phone
	if(isSet($_POST['phone']) && $formValid)
		$GLOBALS['phone']  = $_POST['phone'];
	else
		$formValid = false;

	//credit card info
	// cc name
	if(isSet($_POST['owner']) && $formValid)
		$GLOBALS['ccName']  = $_POST['owner'];
	else
		$formValid = false;
	// cc cvv
	if(isSet($_POST['cvv']) && $formValid)
		$GLOBALS['ccCvv']  = $_POST['cvv'];
	else
		$formValid = false;
	// cc number
	if(isSet($_POST['creditCard']) && $formValid)
		$GLOBALS['ccNumber']  = $_POST['creditCard'];
	else
		$formValid = false;
	//cc expire
	if(isSet($_POST['expirationMonth']) && $formValid)
		$GLOBALS['expirationMonth']  = $_POST['expirationMonth'];
	else
		$formValid = false;
	if(isSet($_POST['expirationYear']) && $formValid)
		$GLOBALS['expirationYear']  = $_POST['expirationYear'];
	else
		$formValid = false;

	//user agrees
	if(isSet($_POST['agreeToTerms']) && $formValid)
		$formValid = $formValid;
	else
		$formValid = false;


	if ($formValid){
		$userDB->createUser($email, $password);
		$userID = $userDB->findByUserName($email);
		foreach ($userID as $key => $value) {
			echo $key . ": " . $value . "<br>";
			// code...
		}
		$personDB->createPerson($userID[0], $fName, $lName, $address, $city, $state,
									$zipCode, $country,	$phone);

		$paymentInfoDB->createPaymentInfo($userID[0], $fName, $lName, $address, $city, $state, $zipCode,
	                 	$country, $ccNumber, $ccExpireYear, $ccExpireMonth,
						$ccCvv);
		echo "paymentInfo end...";
	}
	else{
		echo "not valid...";
	}

	/*
    if($formValid){
        $newUser = new User(     );
		$newPerson = new Person(   );
		$newPaymentInfo = new PaymentInfo(    );

        if($newUser->createUser()){
			$uid = $newUser->getUID();
			$newPerson->createPerson($uid);
			$newPaymentInfo->addPaymentInfo($uid);
            header('userPage.php');
        }
        else{
            header('failedUser.php');
        }
    }
    else
        head('failedUser.php');

	*/
 ?>
