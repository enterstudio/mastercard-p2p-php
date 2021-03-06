<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\P2p;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class ConsumerContactID extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "12d7e71c-11f3-43e7-bb68-90e70a26a6fd":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/contact_ids", "create", array(), array());
			case "490d807d-4c8e-4a0f-b812-ef2b2025c3d5":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/contact_ids/{contactId}", "delete", array(), array());
			case "791eb275-b8ba-4d85-96f2-99cbb43925ba":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/contact_ids/{contactId}", "read", array(), array());
			case "91457e43-4b46-4181-b2f1-1b5fbcecbd85":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/contact_ids", "query", array(), array());
			case "b0c3f3db-1b78-4749-8c28-bfa3928c720d":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/contact_ids/{contactId}", "update", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext());
	}


   /**
	* Creates object of type ConsumerContactID
	*
	* @param Map map, containing the required parameters to create a new object
	* @return ConsumerContactID of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("12d7e71c-11f3-43e7-bb68-90e70a26a6fd", new ConsumerContactID($map));
	}








   /**
	* Delete object of type ConsumerContactID by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return ConsumerContactID of the response.
	*/
	public static function deleteById($id, $requestMap = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if (!empty($requestMap)) {
			$map->setAll($requestMap);
		}
		return self::execute("490d807d-4c8e-4a0f-b812-ef2b2025c3d5", new ConsumerContactID($map));
	}

   /**
	* Delete this object of type ConsumerContactID
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return ConsumerContactID of the response.
	*/
	public function delete()
	{
		return self::execute("490d807d-4c8e-4a0f-b812-ef2b2025c3d5", $this);
	}






	/**
	 * Returns objects of type ConsumerContactID by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return ConsumerContactID of the response
	 */
	public static function read($id, $criteria = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if ($criteria != null) {
			$map->setAll($criteria);
		}
		return self::execute("791eb275-b8ba-4d85-96f2-99cbb43925ba",new ConsumerContactID($map));
	}






	/**
	 * Query objects of type ConsumerContactID by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return ConsumerContactID of the response
	 */
	public static function listAll($criteria)
	{
		return self::execute("91457e43-4b46-4181-b2f1-1b5fbcecbd85",new ConsumerContactID($criteria));
	}

	/**
	 * Updates an object of type ConsumerContactID
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return ConsumerContactID of the response
	 */
	public function update()  {
		return self::execute("b0c3f3db-1b78-4749-8c28-bfa3928c720d",$this);
	}






}

