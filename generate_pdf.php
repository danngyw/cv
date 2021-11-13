<?php

namespace Dompdf;
require_once 'dompdf/autoload.inc.php';

//if( isset($_REQUEST['submit_val']) ) {
if( 1 == 1 ){
	$dompdf = new Dompdf();
	$type= 1;
	$url 	= SITE_URL;

	if($type ==1 ){
		$html 	= file_get_contents($url);

		// $text = convert_html_to_text($html);
		// echo '<pre>';
		// var_dump($text);
		// echo '</pre>';
		// die();
	} else if($type == 2) {
		$opts = array(
		  	'http'=>array(
		    	'method'=>"GET",
		    	'header'=>"Accept-language: en\r\n" .
		              "Cookie: foo=bar\r\n"
		  	)
		);
		$context 	= stream_context_create($opts);
		$html 		= @file_get_contents($url, false, $context);
	} else {

		$check = $dompdf->loadHtmlFile($url);
		var_dump($check);

		//ob_start();
	    //be sure this file exists, and works outside of web context etc.)
	    //require("admin/store/orders/45/invoice/print");
	    //$dompdf = new DOMPDF();
	    //$dompdf->load_html(ob_get_clean());
	    $dompdf->render();
	}
	//$dompdf->loadHtml($html);

	$dompdf->setPaper('A4', 'landscape');
	$dompdf->render();
	$dompdf->stream("",array("Attachment" => false));
	exit(0);
}

?>