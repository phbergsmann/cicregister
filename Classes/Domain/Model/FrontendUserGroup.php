<?php
namespace CIC\Cicregister\Domain\Model;
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
class FrontendUserGroup extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup {


	/**
	 * @var string
	 */
	var $enrollmentCode;

	/**
	 * @var string
	 */
	protected $redirectPid;

	/**
	 * __construct
	 *
	 */
	public function __construct() {

	}

	/*
	 * @return string
	 */
	public function getEnrollmentCode() {
		return $this->enrollmentCode;
	}

	/*
	 * setEnrollmentCode
	 *
	 * @param string $enrollmentCode
	 * @return void
	 *
	 */
	public function setEnrollmentCode($enrollmentCode) {
		$this->enrollmentCode = $enrollmentCode;
	}

	/*
	 * @return string
	 */
	public function getRedirectPid() {
		return $this->redirectPid;
	}

	/*
	 * setRedirectPid
	 *
	 * @param string $redirectPid
	 * @return void
	 *
	 */
	public function setRedirectPid($redirectPid) {
		$this->redirectPid = $redirectPid;
	}



}
?>