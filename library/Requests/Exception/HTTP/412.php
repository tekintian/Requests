<?php
/**
 * Exception for 412 Precondition Failed responses
 *
 * @package Requests
 */

use WpOrg\Requests\Exception\Http;

/**
 * Exception for 412 Precondition Failed responses
 *
 * @package Requests
 */
class Requests_Exception_HTTP_412 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 412;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Precondition Failed';
}
