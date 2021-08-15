<?php

namespace App\Helpers;

class Helper
{
	public static function first_and_last_name( $first_or_last = '', $name = '' ) // Added: 08/15/2021.
	{
		$parts = explode( ' ', $name );

		if( count( $parts ) > 1 ) {
			$last_name = array_pop( $parts );
			$first_name = implode( ' ', $parts );
		}
		else {
			$first_name = $name;
			$last_name = '';
		}

		if( $first_or_last === 'first' ) {
			return $first_name;
		}
		elseif( $first_or_last === 'last' ) {
			return $last_name;
		}
	}
}
