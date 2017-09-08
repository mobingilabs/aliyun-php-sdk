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
namespace Ecs\Request\V20140526;

class RevokeSecurityGroupEgressRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "RevokeSecurityGroupEgress");
		$this->setMethod("POST");
	}

	private  $destGroupId;

	private  $securityGroupId;

	private  $portRange;

	private  $ownerId;

	private  $destCidrIp;

	private  $ipProtocol;

	private  $resourceOwnerAccount;

	private  $destGroupOwnerAccount;

	private  $priority;

	private  $destGroupOwnerId;

	private  $nicType;

	private  $policy;

	private  $resourceOwnerId;

	private  $ownerAccount;

	public function getDestGroupId() {
		return $this->destGroupId;
	}

	public function setDestGroupId($destGroupId) {
		$this->destGroupId = $destGroupId;
		$this->queryParameters["DestGroupId"]=$destGroupId;
	}

	public function getSecurityGroupId() {
		return $this->securityGroupId;
	}

	public function setSecurityGroupId($securityGroupId) {
		$this->securityGroupId = $securityGroupId;
		$this->queryParameters["SecurityGroupId"]=$securityGroupId;
	}

	public function getPortRange() {
		return $this->portRange;
	}

	public function setPortRange($portRange) {
		$this->portRange = $portRange;
		$this->queryParameters["PortRange"]=$portRange;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getDestCidrIp() {
		return $this->destCidrIp;
	}

	public function setDestCidrIp($destCidrIp) {
		$this->destCidrIp = $destCidrIp;
		$this->queryParameters["DestCidrIp"]=$destCidrIp;
	}

	public function getIpProtocol() {
		return $this->ipProtocol;
	}

	public function setIpProtocol($ipProtocol) {
		$this->ipProtocol = $ipProtocol;
		$this->queryParameters["IpProtocol"]=$ipProtocol;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getDestGroupOwnerAccount() {
		return $this->destGroupOwnerAccount;
	}

	public function setDestGroupOwnerAccount($destGroupOwnerAccount) {
		$this->destGroupOwnerAccount = $destGroupOwnerAccount;
		$this->queryParameters["DestGroupOwnerAccount"]=$destGroupOwnerAccount;
	}

	public function getPriority() {
		return $this->priority;
	}

	public function setPriority($priority) {
		$this->priority = $priority;
		$this->queryParameters["Priority"]=$priority;
	}

	public function getDestGroupOwnerId() {
		return $this->destGroupOwnerId;
	}

	public function setDestGroupOwnerId($destGroupOwnerId) {
		$this->destGroupOwnerId = $destGroupOwnerId;
		$this->queryParameters["DestGroupOwnerId"]=$destGroupOwnerId;
	}

	public function getNicType() {
		return $this->nicType;
	}

	public function setNicType($nicType) {
		$this->nicType = $nicType;
		$this->queryParameters["NicType"]=$nicType;
	}

	public function getPolicy() {
		return $this->policy;
	}

	public function setPolicy($policy) {
		$this->policy = $policy;
		$this->queryParameters["Policy"]=$policy;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}
	
}