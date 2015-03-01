<?php
namespace Lukas\Management\Controller;

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
class InvoiceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @var \Lukas\Management\Domain\Repository\InvoiceRepository
	 * @inject
	 */
	protected $invoiceRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		switch ($this->settings['type']) {
			case 'paid':
				$invoices = $this->invoiceRepository->findPaid();
				break;
			case 'pending':
				$invoices = $this->invoiceRepository->findPending();
				break;
			case 'all':
			default:
				$invoices = $this->invoiceRepository->findAll();
				break;
		}
		
		$this->view->assign('invoices', $invoices);
	}

	/**
	 * action show
	 *
	 * @param \Lukas\Management\Domain\Model\Invoice $invoice
	 * @return void
	 */
	public function showAction(\Lukas\Management\Domain\Model\Invoice $invoice) {
		$this->view->assign('invoice', $invoice);
	}

	/**
	 * action new
	 *
	 * @param \Lukas\Management\Domain\Model\Invoice $newInvoice
	 * @dontvalidate $newInvoice
	 * @return void
	 */
	public function newAction(\Lukas\Management\Domain\Model\Invoice $newInvoice = NULL) {
		$this->view->assign('newInvoice', $newInvoice);
	}

	/**
	 * action create
	 *
	 * @param \Lukas\Management\Domain\Model\Invoice $newInvoice
	 * @return void
	 */
	public function createAction(\Lukas\Management\Domain\Model\Invoice $newInvoice) {
		$this->invoiceRepository->add($newInvoice);
		$this->flashMessageContainer->add('Your new Invoice was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \Lukas\Management\Domain\Model\Invoice $invoice
	 * @return void
	 */
	public function editAction(\Lukas\Management\Domain\Model\Invoice $invoice) {
		$this->view->assign('invoice', $invoice);
	}

	/**
	 * action update
	 *
	 * @param \Lukas\Management\Domain\Model\Invoice $invoice
	 * @return void
	 */
	public function updateAction(\Lukas\Management\Domain\Model\Invoice $invoice) {
		$this->invoiceRepository->update($invoice);
		$this->flashMessageContainer->add('Your Invoice was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \Lukas\Management\Domain\Model\Invoice $invoice
	 * @return void
	 */
	public function deleteAction(\Lukas\Management\Domain\Model\Invoice $invoice) {
		$this->invoiceRepository->remove($invoice);
		$this->flashMessageContainer->add('Your Invoice was removed.');
		$this->redirect('list');
	}

}
?>