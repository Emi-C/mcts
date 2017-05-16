<?php$name=$_POST["name"];$cog=$_POST["cog"];
$mail=$_POST["mail"];
$msg=$_POST["msg"];

$headers = "From: Michetta's <no-reply@michettas.it>"";
echo $headers;
$sent=mail( 'emil.costanzo@gmail.com', 'Nuovo messaggio da '.$name.' '.$cog.' - '.$mail, $msg, $headers);
if ( !$sent ) {   http_response_code(400);} else {   http_response_code(200);}?>
