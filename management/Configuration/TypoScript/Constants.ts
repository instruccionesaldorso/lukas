plugin.tx_management {
	view {
		# cat=plugin.tx_management/file; type=string; label=Path to template root (FE)
		templateRootPath = EXT:management/Resources/Private/Templates/
		# cat=plugin.tx_management/file; type=string; label=Path to template partials (FE)
		partialRootPath = EXT:management/Resources/Private/Partials/
		# cat=plugin.tx_management/file; type=string; label=Path to template layouts (FE)
		layoutRootPath = EXT:management/Resources/Private/Layouts/
	}
	persistence {
		storagePid {
			customers = 10
			companies = 9
			jobs = 11
			invoices = 12
			rates = 13
			taxes = 14
		}
		classes {
			newRecordStoragePid {
				customers = 10
				companies = 9
				jobs = 11
				invoices = 12
				rates = 13
				taxes = 14
			}
		}
	}
}