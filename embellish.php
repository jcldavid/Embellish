<?php
/**
 * The most powerful QR Code generator
 * QR for Quick Response
 */
class Embellish {
	private $img;
	/**
	 * @params string - any text you would want the QRCode to have
	 */
	function Embellish($string){
		$config = include 'config.php';
		
		switch($config['source']){
			case 'QRServer': 
				$this->img =  'http://api.qrserver.com/v1/create-qr-code/?size='.$config['size'].'x'.$config['size'].'&data='.trim($string);
				break;
			default:
				$this->img =  'https://chart.googleapis.com/chart?chs='.$config['size'].'x'.$config['size'].'&cht=qr&chl='.trim($string).'&chld=L|0&choe=UTF-8';
		};
				
	}
	/**
	 * fetches the QR Image
	 * @return QRImage
	 */
	function getIMG(){
		return $this->img;
	}
}
