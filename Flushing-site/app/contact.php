<?php

// require 'vendor/autoload.php';

if(0){	

	$mailContact = new PHPMailer;

	// Email to Contact
	$mailContact->From = 'guillermonovillo@gmail.com';
	$mailContact->FromName = 'Flushing Commons';
	$mailContact->addAddress($_POST['email']);
	$mailContact->addReplyTo('guillermonovillo@gmail.com', 'Flushing Commons');
	$mailContact->addBCC('gnovillo@bridgerconway.com');
	$mailContact->isHTML(true);

	$mailContact->Subject = 'Thank You';
	$mailContact->Body    = 'Thank you for your contacting to Flushing Commons. We will be back to you soon.<br/><br/>'
					. 'F&T.<br/><br/>'
					. '<img src="http://dev.bridgerconwaydigital.com/flushing_commons/site/img/logo-mail.png"/>';
	// $mailContact->AltBody = 'Thank for your subscription to Sorgente Developments.';

	if(!$mailContact->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mailContact->ErrorInfo;
	} else {

		$mailNotification = new PHPMailer;
		
		// Notification to FlushingCommons
		$mailNotification->From = $_POST['email'];
		$mailNotification->FromName = $_POST['name'] . ' ' . $_POST['lastName'];
		$mailNotification->addAddress('guillermonovillo@gmail.com');
		$mailNotification->addReplyTo('guillermonovillo@gmail.com', 'Flushing Commons');
		$mailNotification->addBCC('gnovillo@bridgerconway.com');
		$mailNotification->isHTML(true);

		$mailNotification->Subject = 'New Information request from website';
		$mailNotification->Body    = 'New Information request from website<br/><br/>'
						. '<b>First Name:</b> ' . $_POST['first'] . '<br/><br/>'
						. 'Middle Name: ' . $_POST['middle'] . '<br/><br/>'
						. 'Last Name: ' . $_POST['last'] . '<br/><br/>'
						. 'Address: ' . $_POST['address'] . '<br/><br/>'
						. 'City: ' . $_POST['city'] . '<br/><br/>'
						. 'State: ' . $_POST['state'] . '<br/><br/>'
						. 'Zip: ' . $_POST['zip'] . '<br/><br/>'
						. 'Email: ' . $_POST['email'] . '<br/><br/>'
						. 'Phone: ' . $_POST['phone'] . '<br/><br/>'
						. 'Country: ' . $_POST['country'] . '<br/><br/>'
						. 'Are you represented By a Broker?: ' . $_POST['broker'] . '<br/><br/>'
						. 'How Did Your Hear About Flushing Commons?: ' . $_POST['how_hear'] . '<br/><br/>'
						. 'Comments: ' . $_POST['comments'] . '<br/><br/>'
						. '<img src="http://dev.bridgerconwaydigital.com/flushing_commons/site/img/logo-mail.png"/>';
		$mailNotification->AltBody = 'New Flushing Commons information request. Please contact: ' . $_POST['email'];
		
		if(!$mailNotification->send())
			echo 'Mailer Error: ' . $mailNotification->ErrorInfo;
	}
}


//Captura de campos

$field_first	 = isset($_POST['first'])	 ? $_POST['first'] 		: null;
$field_middle	 = isset($_POST['middle'])	 ? $_POST['middle'] 	: null;
$field_last		 = isset($_POST['last'])	 ? $_POST['last'] 		: null;
$field_address	 = isset($_POST['address'])	 ? $_POST['address'] 	: null;
$field_city	 	 = isset($_POST['city'])	 ? $_POST['city'] 		: null;
$field_state	 = isset($_POST['state'])	 ? $_POST['state'] 		: null;
$field_zip	 	 = isset($_POST['zip'])		 ? $_POST['zip'] 		: null;
$field_email	 = isset($_POST['email'])	 ? $_POST['email'] 		: null;
$field_phone	 = isset($_POST['phone'])	 ? $_POST['phone'] 		: null;
$field_country	 = isset($_POST['country'])	 ? $_POST['country'] 	: null;
$field_broker	 = isset($_POST['broker'])	 ? $_POST['broker'] 	: null;
$field_how_hear	 = isset($_POST['how_hear']) ? $_POST['how_hear'] 	: null;
$field_comments	 = isset($_POST['comments']) ? $_POST['comments'] 	: null;


//Definicion de reglas de validacion

$rule_first		 = '/^[a-zA-Z\.]+(\s?[a-zA-Z\.]+)*$/';
$rule_middle	 = '/^[a-zA-Z\.]+(\s?[a-zA-Z\.]+)*$/';
$rule_last		 = '/^[a-zA-Z\.]+(\s?[a-zA-Z\.]+)*$/';
$rule_address	 = '/^[a-zA-Z\.]+(\s?[a-zA-Z\.]+)*$/';
$rule_city	 	 = '/^[a-zA-Z\.]+(\s?[a-zA-Z\.]+)*$/';
$rule_state		 = '/^[a-zA-Z\.]+(\s?[a-zA-Z\.]+)*$/';
$rule_zip	 	 = '/^[0-9]{5}(?:-[0-9]{4})?$/';
$rule_email		 = '/^[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}$/';
$rule_phone		 = '/^(\(+[0-9]+\)+)?[0-9\s]([0-9]?[\s\-\.]?)+$/';
$rule_country	 = '/^[a-zA-Z\.]+(\s?[a-zA-Z\.]+)*$/';
$rule_broker	 = '/^[a-zA-Z\.]+(\s?[a-zA-Z\.]+)*$/';
$rule_how_hear	 = '/^[a-zA-Z_\.]+(\s?[a-zA-Z_\.]+)*$/';
$rule_comments	 = '/.*/s';


//Definicion de tamanios de dato

$length_first		 = 30;
$length_middle		 = 100;
$length_last		 = 50;
$length_address		 = 500;
$length_city		 = 50;
$length_state		 = 2;
$length_zip		 	 = 5;
$length_email		 = 100;
$length_phone		 = 20;
$length_country		 = 50;
$length_broker		 = 100;
$length_how_hear	 = 100;
$length_comments	 = 1000;

//Validaciones

$passes = array();

$passes['first']		= preg_match( $rule_first , 	$field_first) 		&& ( strlen( $field_first ) 	<= $length_first );
$passes['middle']		= preg_match( $rule_middle , 	$field_middle) 		&& ( strlen( $field_middle ) 	<= $length_middle );
$passes['last']			= preg_match( $rule_last , 		$field_last) 		&& ( strlen( $field_last ) 		<= $length_last );
$passes['address']		= preg_match( $rule_address , 	$field_address) 	&& ( strlen( $field_address ) 	<= $length_address );
$passes['city']			= preg_match( $rule_city , 		$field_city) 		&& ( strlen( $field_city ) 		<= $length_city );
$passes['state']		= preg_match( $rule_state , 	$field_state) 		&& ( strlen( $field_state ) 	<= $length_state );
$passes['zip']			= preg_match( $rule_zip , 		$field_zip) 		&& ( strlen( $field_zip ) 		<= $length_zip );
$passes['email']		= preg_match( $rule_email , 	$field_email) 		&& ( strlen( $field_email ) 	<= $length_email );
$passes['phone']		= preg_match( $rule_phone , 	$field_phone) 		&& ( strlen( $field_phone ) 	<= $length_phone );
$passes['country']		= preg_match( $rule_country , 	$field_country) 	&& ( strlen( $field_country ) 	<= $length_country );
$passes['broker']		= preg_match( $rule_broker , 	$field_broker) 		&& ( strlen( $field_broker ) 	<= $length_broker );
$passes['how_hear']		= preg_match( $rule_how_hear , 	$field_how_hear) 	&& ( strlen( $field_how_hear ) 	<= $length_how_hear );
$passes['comments']		= preg_match( $rule_comments , 	$field_comments) 	&& ( strlen( $field_comments ) 	<= $length_comments );

//Array de los mensajes de error
$error_messages = array();

//Lista los campos requeridos
$required_fields = array('first' , 'middle' , 'last' , 'address' , 'email' , 'phone');

//Mensajes de error de validacion
foreach( $passes as $field => $pass){
	if( !$pass && !empty( $_POST[$field] )){
		//Codigo de error de campo requerido
		$error_messages[$field] = 'Campo ' . $field . ' no es valido.';
	}
}

//Mensajes de campos requeridos que estan imcompletos
foreach( $required_fields as $field){
	if( empty( $_POST[$field] ) ){
		//Codigo de error de campo requerido
		$error_messages[$field] = 'Campo ' . $field . ' es requerido.';
	}
}

//Si existen errores los devuelve y termina el programa
if( count( $error_messages ) ){
	//Si hay errores retorna la lista de errores separados por punto y coma
	echo implode(" ; " , $error_messages);
	return;
}

//Si pasa las validaciones carga las constantes y da formato string que se envia al CMS

//Constantes
$field_community_number = '215';
$field_followup = 'B';
$field_source = 'Home Magazine';
$response_string = "";
$response_url = "http://www.buildercms.com/cms/custom/ProspectImport.aspx?ProspectData=";

//Campos del formulario
$response_string .= $field_first != "" ?  'FirstName:' . $field_first . '~' : '';
$response_string .= $field_last != "" ?  'LastName:' . $field_last . '~' : '';
$response_string .= $field_middle != "" ?  'Custom1:' . $field_middle . '~' : '';
$response_string .= $field_address != "" ?  'StreetAddress:' . $field_address . '~' : '';
$response_string .= $field_city != "" ?  'City:' . $field_city . '~' : '';
$response_string .= $field_state != "" ?  'State:' . $field_state . '~' : '';
$response_string .= $field_zip != "" ?  'Zip:' . $field_zip . '~' : '';
$response_string .= $field_phone != "" ?  'Phone:' . $field_phone . '~' : '';
$response_string .= $field_country != "" ?  'Country:' . $field_country . '~' : '';
$response_string .= $field_broker != "" ?  'Custom2:' . $field_broker . '~' : '';
$response_string .= $field_how_hear != "" ?  'Custom3:' . $field_how_hear . '~' : '';
$response_string .= $field_email != "" ?  'Email:' . $field_email . '~' : '';
$response_string .= $field_comments != "" ?  'Comments:' . $field_comments . '~' : '';

//CMS
$response_string .= 'CommunityNumber:' . $field_community_number . '~';
$response_string .= 'FollowupCode:' . $field_followup . '~';
$response_string .= 'Source:' . $field_source;

//Arma la URL final
$response_string = $response_url . urlencode($response_string);

//Muestra la URL resultante
echo $response_string;

//Envia el formulario al CMS y recupera la respuesta en cms_response
if(0){
	$cms_response = implode('', file($response_string));
	echo $cms_response;
}

?>