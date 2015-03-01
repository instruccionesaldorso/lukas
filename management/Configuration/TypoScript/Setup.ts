plugin.tx_management {
	view {
		templateRootPath = {$plugin.tx_management.view.templateRootPath}
		partialRootPath = {$plugin.tx_management.view.partialRootPath}
		layoutRootPath = {$plugin.tx_management.view.layoutRootPath}
	}
	persistence {
		storagePid = {$plugin.tx_management.persistence.storagePid.customers}
		storagePid := addToList({$plugin.tx_management.persistence.storagePid.companies})
		storagePid := addToList({$plugin.tx_management.persistence.storagePid.jobs})
		storagePid := addToList({$plugin.tx_management.persistence.storagePid.invoices})
		storagePid := addToList({$plugin.tx_management.persistence.storagePid.rates})
		storagePid := addToList({$plugin.tx_management.persistence.storagePid.taxes})
	}
	classes {
		\Lukas\Management\Domain\Model\Customer.newRecordStoragePid = {$plugin.tx_management.persistence.classes.newRecordStoragePid.customers}
		\Lukas\Management\Domain\Model\Company.newRecordStoragePid = {$plugin.tx_management.persistence.classes.newRecordStoragePid.companies}
		\Lukas\Management\Domain\Model\Job.newRecordStoragePid = {$plugin.tx_management.persistence.classes.newRecordStoragePid.jobs}
		\Lukas\Management\Domain\Model\Invoice.newRecordStoragePid = {$plugin.tx_management.persistence.classes.newRecordStoragePid.invoices}
	}
	features {
		# uncomment the following line to enable the new Property Mapper.
		# rewrittenPropertyMapper = 1
	}
}

config.tx_extbase.persistence.classes {
	tx_management_domain_model_company_location {
		mapping {
			tableName = tx_management_domain_model_location
			recordType = \Lukas\Management\Domain\Model\Location
		}
	}
	tx_management_domain_model_job_location {
		mapping {
			tableName = tx_management_domain_model_location
			recordType = \Lukas\Management\Domain\Model\JobLocation
		}
	}
}