<?php

class InputUtil {
	public static function isEmpty($input) {
		foreach ($input as $item) {
			if (!empty($item)) {
				return true;
			}
		}
		
		return false;
	}
}
