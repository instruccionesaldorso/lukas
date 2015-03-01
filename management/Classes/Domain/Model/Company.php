<?php
namespace Lukas\Management\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Sergio Catalá <sergio.catala@audibene.de>, e-net Consulting
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
 * @package management
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Company extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * department
	 *
	 * @var \string
	 */
	protected $department;

	/**
	 * contact
	 *
	 * @var \string
	 */
	protected $contact;

	/**
	 * address
	 *
	 * @var \Lukas\Management\Domain\Model\Location
	 */
	protected $location;

	/**
	 * zip
	 *
	 * @var \string
	 */
	protected $zip;

	/**
	 * city
	 *
	 * @var \string
	 */
	protected $city;

	/**
	 * phone
	 *
	 * @var \string
	 */
	protected $phone;

	/**
	 * internalComments
	 *
	 * @var \string
	 */
	protected $internalComments;

	/**
	 * Returns the title
	 *
	 * @return \string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param \string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the department
	 *
	 * @return \string $department
	 */
	public function getDepartment() {
		return $this->department;
	}

	/**
	 * Sets the department
	 *
	 * @param \string $department
	 * @return void
	 */
	public function setDepartment($department) {
		$this->department = $department;
	}

	/**
	 * Returns the contact
	 *
	 * @return \string $contact
	 */
	public function getContact() {
		return $this->contact;
	}

	/**
	 * Sets the contact
	 *
	 * @param \string $contact
	 * @return void
	 */
	public function setContact($contact) {
		$this->contact = $contact;
	}

	/**
	 * Returns the location
	 *
	 * @return \Lukas\Management\Domain\Model\Location $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param \Lukas\Management\Domain\Model\Location $location
	 * @return void
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * Returns the phone
	 *
	 * @return \string $phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Sets the phone
	 *
	 * @param \string $phone
	 * @return void
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	 * Returns the internalComments
	 *
	 * @return \string $internalComments
	 */
	public function getInternalComments() {
		return $this->internalComments;
	}

	/**
	 * Sets the internalComments
	 *
	 * @param \string $internalComments
	 * @return void
	 */
	public function setInternalComments($internalComments) {
		$this->internalComments = $internalComments;
	}

}
?>