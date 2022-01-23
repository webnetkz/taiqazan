<?php

	header('Content-Type: text/html; charset=utf-8');
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);

	set_time_limit (0);
	//require_once 'db.php';

	// Функция для обрезания лишних символов в строке
	function trimm($b1) {
		$b1 = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $b1);
        $b1 = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    ', '￥', '&nbsp;'), '', $b1);
		return $b1;
	}

	function getPage($url) {
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => $url,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
			'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
			'User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Mobile Safari/537.36'
		  ),
		));
		$err = curl_error($curl);
		$res = curl_exec($curl);
		return $res;
	}

	function x($data) {
		echo '<pre>';
		var_dump($data);
		exit();
	}
