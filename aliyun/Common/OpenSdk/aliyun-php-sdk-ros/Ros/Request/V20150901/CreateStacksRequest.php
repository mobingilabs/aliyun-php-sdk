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
namespace Ros\Request\V20150901;

class CreateStacksRequest extends \RoaAcsRequest
{
	function  __construct()
	{
		parent::__construct("ROS", "2015-09-01", "CreateStacks");
		$this->setUriPattern("/stacks");
		$this->setMethod("POST");
	}

  private  $name;
  private  $template;
  private  $parameters;
  private  $disableRollback;
  private  $timeoutMins;

  public function getName() {
		return $this->Name;
	}

	public function setName($name) {
		$this->Name = $name;
		$this->domainParameters["Name"]=$name;
	}

  public function getTemplate() {
		return $this->Template;
	}

	public function setTemplate($template) {
		$this->Template = $template;
		$this->domainParameters["Template"]=$template;
	}

  public function getParameters() {
		return $this->Parameters;
	}

	public function setParameters($parameters) {
		$this->Parameters = $parameters;
		$this->domainParameters["Parameters"]=$parameters;
	}

  public function getDisableRollback() {
		return $this->DisableRollback;
	}

	public function setDisableRollback($disableRollback) {
		$this->DisableRollback = $disableRollback;
		$this->domainParameters["DisableRollback"]=$disableRollback;
	}

  public function getTimeoutMins() {
		return $this->TimeoutMins;
	}

	public function setTimeoutMins($timeoutMins) {
		$this->TimeoutMins = $timeoutMins;
		$this->domainParameters["TimeoutMins"]=$timeoutMins;
	}

}
