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

namespace Ctrlweb\DjangoPorts\Contrib\Auth;

/**
 * Class PasswordResetTokenGenerator
 * @package Ctrlweb\DjangoPorts\Contrib\Auth
 *
 * Strategy object used to generate and check tokens for the password
 * reset mechanism.
 */
class PasswordResetTokenGenerator
{

	private static $key_salt = "django.contrib.auth.tokens.PasswordResetTokenGenerator";
	private static $secret =







}