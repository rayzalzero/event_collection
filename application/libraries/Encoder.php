<?php
use Hashids\Hashids;
class Encoder {

	var $CI;

	function  __construct() {
		$this->CI =& get_instance();
		$this->encryption_key = '2017_larizo_pos';
		$this->hash = new Hashids($this->encryption_key);
	}

	function encrypt($data) {
		return $this->hash->encode($data);
	}

	function decrypt($data) {
		$decoded = $this->hash->decode($data);
		if (count($decoded) == 1) {
			return $decoded[0];
		} else {
			return $decoded;
		}
	}
}
