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
class Invoice extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var \string
	 */
	protected $title;

	/**
	 * customerId
	 *
	 * @var \string
	 */
	protected $customerId;

	/**
	 * date
	 *
	 * @var \DateTime
	 * @validate NotEmpty
	 */
	protected $date;

	/**
	 * amount
	 *
	 * @var \float
	 */
	protected $amount;

	/**
	 * paymentDate
	 *
	 * @var \DateTime
	 * @validate NotEmpty
	 */
	protected $paymentDate;

	/**
	 * jobs
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Lukas\Management\Domain\Model\Job>
	 * @lazy
	 */
	protected $jobs;

	/**
	 * company
	 *
	 * @var \Lukas\Management\Domain\Model\Company
	 */
	protected $company;

	/**
	 * tax
	 *
	 * @var \Lukas\Management\Domain\Model\Tax
	 */
	protected $tax;

	/**
	 * rate
	 *
	 * @var \Lukas\Management\Domain\Model\Rate
	 */
	protected $rate;

	/**
	 * tax
	 *
	 * @var \string
	 */
	protected $description;

	/**
	 * rate
	 *
	 * @var \string
	 */
	protected $modality;

	/**
	 * __construct
	 */
	public function __construct() {
		$this->jobs = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

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
	 * Returns the customerId
	 *
	 * @return \string $customerId
	 */
	public function getCustomerId() {
		return $this->customerId;
	}

	/**
	 * Sets the customerId
	 *
	 * @param \string $customerId
	 * @return void
	 */
	public function setCustomerId($customerId) {
		$this->customerId = $customerId;
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
	 * Returns the amount
	 *
	 * @return \float $amount
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * Sets the amount
	 *
	 * @param \float $amount
	 * @return void
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}

	/**
	 * Returns the paymentDate
	 *
	 * @return \DateTime $paymentDate
	 */
	public function getPaymentDate() {
		return $this->paymentDate;
	}

	/**
	 * Sets the paymentDate
	 *
	 * @param \DateTime $paymentDate
	 * @return void
	 */
	public function setPaymentDate($paymentDate) {
		$this->paymentDate = $paymentDate;
	}

	/**
	 * Adds a job
	 *
	 * @param \Lukas\Management\Domain\Model\Job $job
	 * @return void
	 */
	public function addJob(\Lukas\Management\Domain\Model\Job $job) {
		$this->jobs->attach($job);
	}

	/**
	 * Removes a job
	 *
	 * @param \Lukas\Management\Domain\Model\Job $jobToRemove The job to be removed
	 * @return void
	 */
	public function removeJob(\Lukas\Management\Domain\Model\Job $jobToRemove) {
		$this->jobs->detach($jobToRemove);
	}

	/**
	 * Returns the jobs
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Lukas\Management\Domain\Model\Job> $jobs
	 */
	public function getJobs() {
		return $this->jobs;
	}

	/**
	 * Sets the jobs
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Lukas\Management\Domain\Model\Job> $jobs
	 * @return void
	 */
	public function setJobs(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $jobs) {
		$this->jobs = $jobs;
	}

	/**
	 * Returns the company
	 *
	 * @return  $company
	 */
	public function getCompany() {
		return $this->company;
	}

	/**
	 * Sets the company
	 *
	 * @param  $company
	 * @return void
	 */
	public function setCompany($company) {
		$this->company = $company;
	}

	/**
	 * Returns the tax
	 *
	 * @return \Lukas\Management\Domain\Model\Tax $tax
	 */
	public function getTax() {
		return $this->tax;
	}

	/**
	 * Sets the tax
	 *
	 * @param \Lukas\Management\Domain\Model\Tax $tax
	 * @return void
	 */
	public function setTax(\Lukas\Management\Domain\Model\Tax $tax) {
		$this->tax = $tax;
	}

	/**
	 * Returns the rate
	 *
	 * @return \Lukas\Management\Domain\Model\Rate $rate
	 */
	public function getRate() {
		return $this->rate;
	}

	/**
	 * Sets the rate
	 *
	 * @param \Lukas\Management\Domain\Model\Rate $rate
	 * @return void
	 */
	public function setRate(\Lukas\Management\Domain\Model\Rate $rate) {
		$this->rate = $rate;
	}

	/**
	 * Returns the description
	 *
	 * @return \string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param \string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the modality
	 *
	 * @return \string $modality
	 */
	public function getModality() {
		return $this->modality;
	}

	/**
	 * Sets the modality
	 *
	 * @param \string $modality
	 * @return void
	 */
	public function setModality($modality) {
		$this->modality = $modality;
	}
}
?>