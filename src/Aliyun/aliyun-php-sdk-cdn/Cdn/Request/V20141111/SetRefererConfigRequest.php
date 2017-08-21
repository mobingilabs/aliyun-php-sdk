<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Cdn\Request\V20141111;

class SetRefererConfigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetRefererConfig");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $referType;

	private  $referList;

	private  $allowEmpty;

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getReferType() {
		return $this->referType;
	}

	public function setReferType($referType) {
		$this->referType = $referType;
		$this->queryParameters["ReferType"]=$referType;
	}

	public function getReferList() {
		return $this->referList;
	}

	public function setReferList($referList) {
		$this->referList = $referList;
		$this->queryParameters["ReferList"]=$referList;
	}

	public function getAllowEmpty() {
		return $this->allowEmpty;
	}

	public function setAllowEmpty($allowEmpty) {
		$this->allowEmpty = $allowEmpty;
		$this->queryParameters["AllowEmpty"]=$allowEmpty;
	}
	
}