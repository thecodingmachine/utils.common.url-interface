<?php 
namespace Mouf\Utils\Common;

/**
 * This class represents a single URL.
 * 
 * @author David Négrier
 */
class Url implements UrlInterface {
	
	private $url;
	
	/**
	 * @Important $url
	 * @param string $url The URL that this object represents.
	 */
	public function __construct($url) {
		$this->url = $url;
	}
	
	/**
	 * Returns the URL represented by this object, as a string.
	 * 
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}
}