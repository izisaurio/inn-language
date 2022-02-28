<?php

namespace InnLanguage;

use JsonToArray\Json;

/**
 * Language labels
 *
 * @author  izisaurio
 * @version 1
 */
class Language
{
	/**
	 * Current locale
	 *
	 * @access  public
	 * @var     string
	 */
	public $locale;

    /**
     * Loaded language files
     * 
     * @access  public
     * @var     array
     */
    public $files = [];

	/**
	 * Accepted locales
	 *
	 * @access  private
	 * @var     array
	 */
	private $accepted;

	/**
	 * Construct
	 *
	 * Set accepted languages
	 *
	 * @access  public
	 * @param   array   $accepted       Available languages
	 * @param   string  $defaultLocale  Default locale
	 */
	public function __construct(array $accepted, $defaultLocale)
	{
		$this->accepted = $accepted;
		$this->locale = $defaultLocale;
	}

	/**
	 * Sets current language
	 *
	 * @access  public
	 * @param   string  $code   Language code
	 * @throws  LanguageNotAvailableException
	 */
	public function setLocale($code)
	{
		if (!\in_array($code, $this->accepted)) {
			throw new LanguageNotAvailableException($code);
		}
		$this->locale = $locale;
	}

    /**
     * Set from request, if not available leaves default
     * 
     * @access  public
     * @param   string  $httpAcceptLanguage     Server accept language
     */
    public function setFromRequest($httpAcceptLanguage) {
        $locale = locale_accept_from_http($httpAcceptLanguage);
        if (\in_array($locale, $this->accepted)) {
            $this->locale = $locale;
        }
    }

    /**
     * Load a label from language file
     * 
     * @access  public
     * @param   string  $label  A string that has "{file}.{key}"
     */
}
