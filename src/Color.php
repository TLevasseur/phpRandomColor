<?php 



class Color{

	public static function randRGB(){
		$r=self::randHex();
		$g=self::randHex();
		$b=self::randHex();
		return "#".dechex($r).dechex($g).dechex($b);
	}

	private static function randHex($min=16,$max=230){
		if(rand(0,1)==1)
			return mt_rand($min,$max);
		return rand($min,$max);
	}

	public static function clearerRGB($rgb){
		$r=hexdec(substr($rgb,1,2))+25;
		$g=hexdec(substr($rgb,3,2))+25;
		$b=hexdec(substr($rgb,5,2))+25;
		return "#".dechex($r).dechex($g).dechex($b);
	}


}
