<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Util 
{
	function alias($str) {
		$str = str_replace("(","",$str);
		$str = str_replace(")","",$str);
		$str = str_replace("'","",$str);
		$str = str_replace(".","-",$str);
		$str = str_replace(":","",$str);
		$str = str_replace("?","-", $str);
		$str = str_replace("%","-", $str);
		$str = str_replace(",","-", $str);
		$str = str_replace("!","-", $str);
		$str = str_replace('"',"",$str);
		//$str = str_replace(' ',"",$str);
		$str = str_replace(" ","-",$str);
		$str = str_replace("---","-",$str);
		$str = str_replace("--","-",$str);
		$str = str_replace("&","-",$str);
		$str = str_replace("/","-",$str);

		#---------------------------------a^
		$str = str_replace("â", "a", $str);
		$str = str_replace("ấ", "a", $str);
		$str = str_replace("ầ","a", $str);
		$str = str_replace("ẩ", "a", $str);
		$str = str_replace("ẫ","a", $str);
		$str = str_replace("ậ", "a", $str);
		#---------------------------------A^
		$str = str_replace("Ấ", "a", $str);
		$str = str_replace("Ầ","a", $str);
		$str = str_replace("Ẩ", "a", $str);
		$str = str_replace("Ẫ","a", $str);
		$str = str_replace("Ậ", "a", $str);
		#---------------------------------ă
		$str = str_replace("ắ", "a", $str);
		$str = str_replace("ằ","a", $str);
		$str = str_replace("ẳ", "a", $str);
		$str = str_replace("ẵ","a", $str);
		$str = str_replace("ặ", "a", $str);
		$str = str_replace("ă", "a", $str);
		#---------------------------------Ă
		$str = str_replace("Ắ", "a", $str);
		$str = str_replace("Ằ","a", $str);
		$str = str_replace("Ẳ", "a", $str);
		$str = str_replace("Ẵ","a", $str);
		$str = str_replace("Ặ", "a", $str);
		$str = str_replace("Ă", "a", $str);
		#---------------------------------a
		$str = str_replace("á", "a", $str);
		$str = str_replace("à","a", $str);
		$str = str_replace("ả", "a", $str);
		$str = str_replace("ã","a", $str);
		$str = str_replace("ạ", "a", $str);
		#---------------------------------A
		$str = str_replace("A", "a", $str);
		$str = str_replace("Á", "a", $str);
		$str = str_replace("À","a", $str);
		$str = str_replace("Ả", "a", $str);
		$str = str_replace("Ã","a", $str);
		$str = str_replace("Ạ", "a", $str);
		#---------------------------------ê
		$str = str_replace("ê", "e", $str);
		$str = str_replace("ế", "e", $str);
		$str = str_replace("ề","e", $str);
		$str = str_replace("ể", "e", $str);
		$str = str_replace("ễ", "e", $str);
		$str = str_replace("ệ", "e", $str);
		#---------------------------------Ê
		$str = str_replace("Ê", "e", $str);
		$str = str_replace("Ế", "e", $str);
		$str = str_replace("Ề","e", $str);
		$str = str_replace("Ể", "e", $str);
		$str = str_replace("Ễ","e", $str);
		$str = str_replace("Ệ", "e", $str);
		#---------------------------------e
		$str = str_replace("é", "e", $str);
		$str = str_replace("è","e", $str);
		$str = str_replace("ẻ", "e", $str);
		$str = str_replace("ẽ","e", $str);
		$str = str_replace("ẹ", "e", $str);
		#---------------------------------E
		$str = str_replace("É", "e", $str);
		$str = str_replace("È","e", $str);
		$str = str_replace("Ẻ", "e", $str);
		$str = str_replace("Ẽ","e", $str);
		$str = str_replace("Ẹ", "", $str);
		#---------------------------------i
		$str = str_replace("í", "i", $str);
		$str = str_replace("ì","i", $str);
		$str = str_replace("ỉ", "i", $str);
		$str = str_replace("ĩ","i", $str);
		$str = str_replace("ị", "i", $str);
		#---------------------------------I
		$str = str_replace("Í", "i", $str);
		$str = str_replace("Ì","i", $str);
		$str = str_replace("Ỉ", "i", $str);
		$str = str_replace("Ĩ","i", $str);
		$str = str_replace("Ị", "i", $str);
		#---------------------------------O
		$str = str_replace("O", "o", $str);
		$str = str_replace("Ô","o", $str);
		$str = str_replace("ô","o", $str);
		$str = str_replace("Ố", "o", $str);
		$str = str_replace("Ồ","o", $str);
		$str = str_replace("Ổ", "o", $str);
		$str = str_replace("Ỗ", "o", $str);
		$str = str_replace("Ộ", "o", $str);
		$str = str_replace("ồ", "o", $str);
		$str = str_replace("ố", "o", $str);
		$str = str_replace("ổ", "o", $str);
		$str = str_replace("ỗ", "o", $str);
		$str = str_replace("ộ", "o", $str);

		$str = str_replace("ơ", "o", $str);
		$str = str_replace("Ơ", "o", $str);
		$str = str_replace("ớ", "o", $str);
		$str = str_replace("ờ", "o", $str);
		$str = str_replace("ở", "o", $str);
		$str = str_replace("ỡ", "o", $str);
		$str = str_replace("ợ", "o", $str);

		$str = str_replace("ư", "u", $str);
		$str = str_replace("Ư", "u", $str);
		$str = str_replace("ứ", "u", $str);
		$str = str_replace("ừ", "u", $str);
		$str = str_replace("ử", "u", $str);
		$str = str_replace("ữ", "u", $str);
		$str = str_replace("ự", "u", $str);
		$str = str_replace("Ứ", "u", $str);
		$str = str_replace("Ừ", "u", $str);
		$str = str_replace("Ử", "u", $str);
		$str = str_replace("Ữ", "u", $str);
		$str = str_replace("Ự", "u", $str);

		$str = str_replace("Y", "y", $str);
		$str = str_replace("ý", "y", $str);
		$str = str_replace("ỳ", "y", $str);
		$str = str_replace("ỷ", "y", $str);
		$str = str_replace("ỹ", "y", $str);
		$str = str_replace("ỵ", "y", $str);
		$str = str_replace("Ỳ", "y", $str);
		$str = str_replace("Ý", "y", $str);
		$str = str_replace("Ỷ", "y", $str);
		$str = str_replace("Ỹ", "y", $str);
		$str = str_replace("Ỵ", "y", $str);

		$str = str_replace("đ", "d", $str);
		$str = str_replace("Đ", "d", $str);
		$str = str_replace("D", "d", $str);

		$str = str_replace("ó", "o", $str);
		$str = str_replace("ò", "o", $str);
		$str = str_replace("ỏ", "o", $str);
		$str = str_replace("õ", "o", $str);
		$str = str_replace("ọ", "o", $str);
		$str = str_replace("Ò", "O", $str);
		$str = str_replace("Ó", "O", $str);
		$str = str_replace("Ỏ", "O", $str);
		$str = str_replace("Õ", "O", $str);
		$str = str_replace("Ọ", "O", $str);

		$str = str_replace("ú", "u", $str);
		$str = str_replace("ù", "u", $str);
		$str = str_replace("ủ", "u", $str);
		$str = str_replace("ũ", "u", $str);
		$str = str_replace("ụ", "u", $str);
		$str = str_replace("Ú", "u", $str);
		$str = str_replace("Ù", "u", $str);
		$str = str_replace("Ủ", "u", $str);
		$str = str_replace("Ũ", "u", $str);
		$str = str_replace("Ụ", "u", $str);

		$str = str_replace("W", "w", $str);
		$str = str_replace("P", "p", $str);
		$str = str_replace("B", "b", $str);
		$str = str_replace("C", "c", $str);
		$str = str_replace("H", "h", $str);
		$str = str_replace("N", "n", $str);
		$str = str_replace("M", "m", $str);
		$str = str_replace("G", "g", $str);
		$str = str_replace("L", "l", $str);
		$str = str_replace("F", "f", $str);
		$str = str_replace("S", "s", $str);
		$str = str_replace("K", "k", $str);
		$str = str_replace("Q", "q", $str);
		$str = str_replace("T", "t", $str);
		$str = str_replace("X", "x", $str);
		$str = str_replace("R", "r", $str);
		$str = str_replace("V", "v", $str);
		$str = str_replace("U", "u", $str);
		$str = str_replace("I", "i", $str);

		return $str;

	}	

	public function timeAgo($session_time) {

		$time_difference = time() - $session_time ;

		$seconds = $time_difference ;
		// Seconds
		if($seconds <= 60) {
			return "$seconds seconds ago";
		}

		$minutes = round( $time_difference / 60 );
		//Minutes
		if($minutes <= 60) {
			if($minutes == 1) {
				return "One minute ago";
			} else {
				return "$minutes minutes ago";
			}
		}
	
		$hours = round( $time_difference / 3600 );
		//Hours
		if($hours <= 24) {
			if($hours == 1) {
				return "One hour ago";
			} else {
				return "$hours hours ago";
			}
		}
	
		$days = round( $time_difference / 86400 );
		//Days
		if($days <= 7) {
			if($days == 1) {
				return "One day ago";
			} else {
				return "$days days ago";
			}
		}
	
		$weeks = round( $time_difference / 604800 );
		//Weeks
		if($weeks <= 4) {
			if($weeks == 1) {
				return "One week ago";
			} else {
				return "$weeks weeks ago";
			}
		}
	
		$months = round( $time_difference / 2419200 );
		//Months
		if($months <= 12) {
			if($months == 1) {
				return "One month ago";
			} else {
				return "$months months ago";
			}
		}
	
		$years = round( $time_difference / 29030400 );
		//Years
		if($years == 1) {
			return "One year ago";
		} else {
			return "$years years ago";
		}

	}
}

/* End of file util.php */
/* Location: ./application/libraries/util.php */