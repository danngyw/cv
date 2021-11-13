<?php
require_once('define.php');
// require_once 'dompdf/autoload.inc.php';
require_once "vendor/autoload.php";
//use FastSimpleHTMLDom\Document;

//require 'vendor/autoload.php';
use Dompdf\Dompdf;

//if( isset($_REQUEST['submit_val']) ) {
if( 1 == 1 ){
	$dompdf = new Dompdf();
	$type= 1;
	$url 	= SITE_URL;
	$url = $site_url =  'https://vnexpress.net/';

	if($type ==1 ){
		//$html 	= file_get_contents($url);
		// if(function_exists('curl_init')) {
		//     $content = http::fetch_content($url);
		// } else {
		//     $content = file_get_contents($url);
		// }
		//$content  = fetch_url($url);

		$opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
	    //Basically adding headers to the request
	    $context = stream_context_create($opts);

	    $html = new Document(file_get_contents($site_url,false,$context));

		$dompdf->loadHtml($content);

	} else if($type == 2) {
		$opts = array(
		  	'http'=>array(
		    	'method'=>"GET",
		    	'header'=>"Accept-language: en\r\n" .
		              "Cookie: foo=bar\r\n"
		  	)
		);
		$context 	= stream_context_create($opts);
		$html 		= file_get_contents($url, false, $context);
	} else {

		$check = $dompdf->loadHtmlFile($url);

		//ob_start();
	    //be sure this file exists, and works outside of web context etc.)
	    //require("admin/store/orders/45/invoice/print");
	    //$dompdf = new DOMPDF();
	    //$dompdf->load_html(ob_get_clean());
	    $dompdf->render();
	}
	//$dompdf->load_html_file($url);

	$dompdf->setPaper('A4', 'landscape');
	$dompdf->render();
	$dompdf->stream("",array("Attachment" => false));
	exit(0);
}

?>