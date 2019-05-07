<?php
/**
 * A port of some of Django's libraries from python to PHP, for interoperability purposes.
 * Copyright (C) 2019  ctrlweb
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace Ctrlweb\DjangoPorts\Utils;


use Ctrlweb\DjangoPorts\Exceptions\NotImplemented;
use Exception;

/**
 * Class Crypto
 * @package Ctrlweb\DjangoPorts\Utils
 */
class Crypto {

	/**
	 * Return the HMAC-SHA1 of 'value', using a key generated from key_salt and a
	 * secret (which defaults to constant SECRET_KEY).
	 *
	 * A different key_salt should be passed in for every application of HMAC.
	 *
	 * @param $key_salt
	 * @param $value
	 * @param null $secret
	 *
	 * @return false|string
	 * @throws Exception
	 */
	public static function salted_hmac( $key_salt, $value, $secret = null ) {

		if ( $secret === null ) {
			if ( ! defined( 'SECRET_KEY' ) ) {
				throw new Exception( "SECRET_KEY is not defined." );
			}
			$secret = SECRET_KEY;
		}

		$key = sha1( $key_salt . $secret, true);

		return hash_hmac( 'sha1', $value, $key, true );
	}

	/**
	 * Return a securely generated random string.
	 *
	 * The default length of 12 with the a-z, A-Z, 0-9 character set returns
	 * a 71-bit value. log_2((26+26+10)^12) =~ 71 bits
	 *
	 * @param int $length
	 * @param string $allowed_chars
	 *
	 * @throws NotImplemented
	 */
	public static function get_random_string($length = 12, $allowed_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') {
		throw new NotImplemented();
	}

}
echo bin2hex(Crypto::salted_hmac('danidou', 'stiktecavv', 'ctrlweb'));