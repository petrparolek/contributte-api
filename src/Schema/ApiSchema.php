<?php

namespace Contributte\Api\Schema;

final class ApiSchema
{

	/** @var Endpoint[] */
	private $endpoints = [];

	/**
	 * @param Endpoint $endpoint
	 */
	public function addEndpoint(Endpoint $endpoint)
	{
		$this->endpoints[] = $endpoint;
	}

	/**
	 * @return Endpoint[]
	 */
	public function getEndpoints()
	{
		return $this->endpoints;
	}

}
