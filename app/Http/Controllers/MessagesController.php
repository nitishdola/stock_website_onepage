<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator, Redirect, App\Message;
class MessagesController extends Controller
{
    public function send_mail(Request $request) {
    	$validator = Validator::make($data = $request->all(), Message::$rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();

    	// multiple recipients
		$to  = 'nitish.dola@gmail.com';

		// subject
		$subject = 'You have a message !';

		$name 	= $request->name;
		$email 	= $request->email;
		$msg 	= $request->message;
		// message
		$message = '
		<html>
		<head>
		  <title>Message from website</title>
		</head>
		<body>
		  <p> From : '.$name.'</p>
		  <p> Email : '.$email.'</p>
		  <p>'.$msg.'</p>
		</body>
		</html>
		';

		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Additional headers
		$headers .= 'To: '.$to . "\r\n";
		$headers .= 'From: Web Message <'.$email.'>' . "\r\n";
		/*$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
		$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";*/

		// Mail it
		mail($to, $subject, $message, $headers);
		return true;
    }
}
