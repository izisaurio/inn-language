<?php

namespace JsonToArray;

use \Exception;

/**
 * Language not available
 *
 * @author	izisaurio
 * @version	1
 */
class LanguageNotAvailableException extends Exception
{
	/**
	 * Constructor
	 *
	 * @access	public
	 * @param	string	$lang		Language
	 */
	public function __construct($lang)
	{
		parent::__construct("Language not available ({$path})");
	}
}
