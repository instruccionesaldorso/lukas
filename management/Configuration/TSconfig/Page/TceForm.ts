TCEFORM {
	# Customer
	tx_management_domain_model_customer {
		companies.PAGE_TSCONFIG_IDLIST < plugin.tx_management.persistence.storagePid.companies
	}

	# Company
	tx_management_domain_model_company {
		location.PAGE_TSCONFIG_IDLIST < plugin.tx_management.persistence.storagePid.companies
	}

	# Job
	tx_management_domain_model_job {
		customer.PAGE_TSCONFIG_IDLIST < plugin.tx_management.persistence.storagePid.customers
		location.PAGE_TSCONFIG_IDLIST < plugin.tx_management.persistence.storagePid.jobs
	}

	# Invoice
	tx_management_domain_model_invoice {
		jobs.PAGE_TSCONFIG_IDLIST < plugin.tx_management.persistence.storagePid.jobs
		company.PAGE_TSCONFIG_IDLIST < plugin.tx_management.persistence.storagePid.companies
		tax.PAGE_TSCONFIG_IDLIST < plugin.tx_management.persistence.storagePid.taxes
		rate.PAGE_TSCONFIG_IDLIST < plugin.tx_management.persistence.storagePid.rates
	}
}