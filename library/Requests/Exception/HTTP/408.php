<?php
/**
 * Exception for 408 Request Timeout responses
 *
 * @package Requests
 */

use WpOrg\Requests\Exception\Http;

/**
 * Exception for 408 Request Timeout responses
 *
 * @package Requests
 */
class Requests_Exception_HTTP_408 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 408;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Request Timeout';
}
