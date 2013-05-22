<?php 
namespace Mouf\Utils\Common;

/**
 * This interface is implemented by any object that can represent an URL.
 * An object implementing this interface will return a URL (as a string) when the "getUrl()" method is called.
 * 
 * @author David Négrier
 */
interface UrlInterface {
	
	/**
	 * Returns the URL represented by this object, as a string.
	 * 
	 * @return string
	 */
	public function getUrl();
}