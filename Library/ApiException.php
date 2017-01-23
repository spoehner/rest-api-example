<?php
namespace Api\Library;

class ApiException extends \Exception
{
	const AUTHENTICATION_FAILED = 1;
	const MALFORMED_INPUT       = 2;
	const UNKNOWN_METHOD        = 3;
}