<?php
namespace Lukas\Management\Domain\Repository;

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
class InvoiceRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * Returns the paid invoices.
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findPaid() {
		$query = $this->createQuery();
		// Igual que el precio total!!
		$query->matching($query->equals('amount', 0.00));
		return $query->execute();
	}

	/**
	 * Returns the pending invoices.
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findPending() {
		$query = $this->createQuery();
		// LessThan el precio total!!!
		$query->matching($query->lessThan('amount', 0.00));
		return $query->execute();
	}
}
?>