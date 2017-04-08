<?php
	require_once('nusoap.php');

	$client = new SoapClient("http://tuyetnhi.somee.com/thanhtoan.asmx?WSDL");
	$arr=array('soTien'=>500000,'soCSC'=>1234,'soTK'=>123456,'pass'=>e10adc3949ba59abbe56e057f20f883e);
	$response=$client->thanhToan($arr)->thanhToanResult;
	//$response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $response);
	// $xml = new SimpleXMLElement($response);
	// $body = $xml->xpath('//SBody')[0];
	// $array = json_decode(json_encode((array)$response), TRUE); 
	$result = json_decode(json_encode($response), TRUE); 
	echo $result;
?>