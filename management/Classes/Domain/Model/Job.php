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
class Job extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * category
	 *
	 * @var \int
	 * @validate NotEmpty
	 */
	protected $category;

	/**
	 * location
	 *
	 * @var \Lukas\Management\Domain\Model\JobLocation
	 * @validate NotEmpty
	 */
	protected $location;

	/**
	 * date
	 *
	 * @var \DateTime
	 * @validate NotEmpty
	 */
	protected $date;

	/**
	 * start
	 *
	 * @var \int
	 * @validate NotEmpty
	 */
	protected $start;

	/**
	 * jobStart
	 *
	 * @var \int
	 * @validate NotEmpty
	 */
	protected $jobStart;

	/**
	 * jobEnd
	 *
	 * @var \int
	 * @validate NotEmpty
	 */
	protected $jobEnd;

	/**
	 * end
	 *
	 * @var \int
	 * @validate NotEmpty
	 */
	protected $end;

	/**
	 * customer
	 *
	 * @var \Lukas\Management\Domain\Model\Customer
	 */
	protected $customer;

	/**
	 * tripExcluded
	 *
	 * @var \boolean
	 * @validate NotEmpty
	 */
	protected $tripExcluded;

	/**
	 * customer
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Lukas\Management\Domain\Model\Fee>
	 */
	protected $fees;

	/**
	 * __construct
	 */
	public function __construct() {
		$this->fees = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the category
	 *
	 * @return \int $category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Sets the category
	 *
	 * @param \int $category
	 * @return void
	 */
	public function setCategory($category) {
		$this->category = $category;
	}

	/**
	 * Returns the location
	 *
	 * @return \Lukas\Management\Domain\Model\JobLocation $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param \Lukas\Management\Domain\Model\JobLocation $location
	 * @return void
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * Returns the date
	 *
	 * @return \DateTime $date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Sets the date
	 *
	 * @param \DateTime $date
	 * @return void
	 */
	public function setDate($date) {
		$this->date = $date;
	}

	/**
	 * Returns the start
	 *
	 * @return \int $start
	 */
	public function getStart() {
		return $this->start;
	}

	/**
	 * Sets the start
	 *
	 * @param \int $start
	 * @return void
	 */
	public function setStart($start) {
		$this->start = $start;
	}

	/**
	 * Returns the jobStart
	 *
	 * @return \int $jobStart
	 */
	public function getJobStart() {
		return $this->jobStart;
	}

	/**
	 * Sets the jobStart
	 *
	 * @param \int $jobStart
	 * @return void
	 */
	public function setJobStart($jobStart) {
		$this->jobStart = $jobStart;
	}

	/**
	 * Returns the jobEnd
	 *
	 * @return \int $jobEnd
	 */
	public function getJobEnd() {
		return $this->JobEnd;
	}

	/**
	 * Sets the jobEnd
	 *
	 * @param \int $jobEnd
	 * @return void
	 */
	public function setJobEnd($jobEnd) {
		$this->jobEnd = $jobEnd;
	}

	/**
	 * Returns the end
	 *
	 * @return \int $end
	 */
	public function getEnd() {
		return $this->end;
	}

	/**
	 * Sets the end
	 *
	 * @param \int $end
	 * @return void
	 */
	public function setEnd($end) {
		$this->end = $end;
	}

	/**
	 * Returns the customer
	 *
	 * @return \Lukas\Management\Domain\Model\Customer $customer
	 */
	public function getCustomer() {
		return $this->customer;
	}

	/**
	 * Sets the customer
	 *
	 * @param \Lukas\Management\Domain\Model\Customer $customer
	 * @return void
	 */
	public function setCustomer(\Lukas\Management\Domain\Model\Customer $customer) {
		$this->customer = $customer;
	}

	/**
	 * Adds a fee
	 *
	 * @param \Lukas\Management\Domain\Model\Fee $fee
	 * @return void
	 */
	public function addFee(\Lukas\Management\Domain\Model\Fee $fee) {
		$this->fees->attach($fee);
	}

	/**
	 * Removes a fee
	 *
	 * @param \Lukas\Management\Domain\Model\Fee $feeToRemove The fee to be removed
	 * @return void
	 */
	public function removeFee(\Lukas\Management\Domain\Model\Fee $feeToRemove) {
		$this->fees->detach($feeToRemove);
	}

	/**
	 * Returns the fees
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Lukas\Management\Domain\Model\Fee> $jobs
	 */
	public function getFees() {
		return $this->fees;
	}

	/**
	 * Sets the fees
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Lukas\Management\Domain\Model\Fee> $fees
	 * @return void
	 */
	public function setFees(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $fees) {
		$this->fees = $fees;
	}

	/**
	 * Returns the trip excluded
	 *
	 * @return \int $tripExcluded
	 */
	public function getTripExcluded() {
		return $this->tripExcluded;
	}

	/**
	 * Sets the trip excluded
	 *
	 * @param \int $tripExcluded
	 * @return void
	 */
	public function setTripExcluded($tripExcluded) {
		$this->tripExcluded = $tripExcluded;
	}
}
?>