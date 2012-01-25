<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Zachary Davis <zach@castironcoding.com>, Cast Iron Coding, Inc
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 *
 *
 * @package cicregister
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_Cicregister_Domain_Model_FrontendUser extends Tx_Extbase_Domain_Model_FrontendUser {

	/**
	 * @var string
	 * @validate String
	 * @validate NotEmpty
	 * @zzzvalidate Tx_Cicregister_Validation_Validator_UniqueValidator(repository = Tx_Extbase_Domain_Repository_FrontendUserRepository, property = username)
	 */
	protected $username;

	/**
	 * @var string
	 * @validate NotEmpty
	 */
	protected $password;

	// TODO: Fix password and confirm password validation.
	/**
	 * @var string
	 * @ZZZZvalidate NotEmpty
	 */
	protected $confirmPassword;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Extbase_Domain_Model_FrontendUserGroup>
	 */
	protected $usergroup;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 * @validate NotEmpty
	 */
	protected $firstName;

	/**
	 * @var string
	 * @validate NotEmpty
	 */
	protected $lastName;

	/**
	 * It's important to note that in the unique validator below, we're validating against all frontend users that Extbase
	 * knows about; we do that by using the global user repository.
	 *
	 * @var string
	 * @validate NotEmpty
	 * @validate EmailAddress
	 * @validate StringLength(minimum = 3,maximum = 50)
	 * @ZZZvalidate Tx_Cicregister_Validation_Validator_UniqueValidator(repository = Tx_Cicregister_Domain_Repository_GlobalFrontendUserRepository, property = email)
	 */
	protected $email = '';

	/**
	 * @var bool
	 */
	protected $disable = false;

	/**
	 * Called when the object is reconstituted.
	 */
	public function initializeObject() {
	}

	/**
	 * username == email
	 * @param $email
	 */
	public function setEmail($email) {
		$this->email = $email;
		$this->username = $email;
	}

	/**
	 * username == email
	 * @param $username
	 */
	public function setUsername($username) {
		$this->email = $email;
		$this->username = $username;
	}

	/**
	 * @param string $confirmPassword
	 */
	public function setConfirmPassword($confirmPassword) {
		$this->confirmPassword = $confirmPassword;
	}

	/**
	 * @return string
	 */
	public function getConfirmPassword() {
		if($this->confirmPassword === false) {
			return $this->getPassword();
		}
		return $this->confirmPassword;
	}

	/**
	 * @param boolean $disable
	 */
	public function setDisable($disable) {
		$this->disable = $disable;
	}

	/**
	 * @return boolean
	 */
	public function getDisable() {
		return $this->disable;
	}

	public function getName() {
		return $this->getFirstName().' '.$this->getLastName();
	}
	/**
	 * @param string $firstName
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}
	/**
	 * @return string
	 */
	public function getFirstName() {
		return $this->firstName;
	}
	/**
	 * @param string $lastName
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}
	/**
	 * @return string
	 */
	public function getLastName() {
		return $this->lastName;
	}

}
?>