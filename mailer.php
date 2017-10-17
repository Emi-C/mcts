<?
$data=$_POST["data"];
$ora=$_POST["ora"];
$quanti=$_POST["quanti"];
$nome=$_POST["nome"];
$mail=$_POST["mail"];
$tel=$_POST["tel"];

$headers = "From: Prenotazione Michetta's <".$mail.">";
$sent=mail( 'info@michettas.com', 'Nuova prenotazione da '.$nome.' - '.$tel , 'Data: '.$data.' - Ora: '.$ora.' - Per '.$quanti.' persone', $headers);
if ( !$sent ) {   http_response_code(400);} else {   http_response_code(200);}
?>
