<?php
class ApiMain
{ 
	public $url;
	public $apikey=" ";
	function __construct($url1)
	{
		$this->url=$url1;
	}
	function curl_request($params)
	{
		$this->url.="?apikey=".$this->apikey;
		foreach($params as $param => $value)
		{
			$this->url.="&".$param."=".$value;
		}
		$ch = curl_init();
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0); 
		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		if (curl_errno($ch)) 
		{
		    echo 'Error:' . curl_error($ch);
		}
		curl_close ($ch);
		$final=json_decode($result,TRUE);
		return $final;
	}
}?>
