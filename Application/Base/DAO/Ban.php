<?php

class Ban {
	
	public static function Exists($key, $value) {
		$count  = count(R::getAll("SELECT `reason` FROM `bans` WHERE `" . $key . "` = :value", array(":value" => $value)));

		if($count != 1) {
			return false;
		}

		return true;
	}
	
}