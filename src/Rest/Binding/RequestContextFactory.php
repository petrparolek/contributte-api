<?php

namespace Contributte\Api\Rest\Binding;

use Contributte\Api\Schema\Endpoint;

final class RequestContextFactory
{

	/**
	 * @param Endpoint $endpoint
	 * @param array $params
	 * @return RequestContext
	 */
	public static function create(Endpoint $endpoint, array $parameters)
	{
		$params = [];

		// Create *<>RequestParam by given parameters and scheme
		foreach ($parameters as $name => $value) {
			$params[$name] = new ScalarRequestParam($name, $value);
		}

		// Create request endpoint
		return new RequestContext($endpoint, $params);
	}

}
