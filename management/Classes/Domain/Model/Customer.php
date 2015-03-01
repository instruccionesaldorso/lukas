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
class Customer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * internalId
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $internalId;

	/**
	 * name
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * surname
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $surname;

	/**
	 * companies
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Lukas\Management\Domain\Model\Company>
	 * @lazy
	 */
	protected $companies;

	/**
	 * __construct
	 */
	public function __construct() {
		$this->companies = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the internalId
	 *
	 * @return \string $internalId
	 */
	public function getInternalId() {
		return $this->internalId;
	}

	/**
	 * Sets the internalId
	 *
	 * @param \string $internalId
	 * @return void
	 */
	public function setInternalId($internalId) {
		$this->internalId = $internalId;
	}

	/**
	 * Returns the name
	 *
	 * @return \string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param \string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the surname
	 *
	 * @return \string $surname
	 */
	public function getSurname() {
		return $this->surname;
	}

	/**
	 * Sets the surname
	 *
	 * @param \string $surname
	 * @return void
	 */
	public function setSurname($surname) {
		$this->surname = $surname;
	}

	/**
	 * Adds a company
	 *
	 * @param  $company
	 * @return void
	 */
	public function addCompany($company) {
		$this->companies->attach($company);
	}

	/**
	 * Removes a company
	 *
	 * @param  $companyToRemove The company to be removed
	 * @return void
	 */
	public function removeCompany($companyToRemove) {
		$this->companies->detach($companyToRemove);
	}

	/**
	 * Returns the companies
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Lukas\Management\Domain\Model\Company> $companies
	 */
	public function getCompanies() {
		return $this->companies;
	}

	/**
	 * Sets the companies
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Lukas\Management\Domain\Model\Company> $companies
	 * @return void
	 */
	public function setCompanies(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $companies) {
		$this->companies = $companies;
	}

}
?>