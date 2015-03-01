#######################################
# @author 		sergio.catala@e-net.info
# @file 		Root/constants.ts
#
# TSFE constants
#######################################
tmplBootstrap {
	settings {
		# Ext path
		extPath = tmpl_bootstrap/

		# Private Resources Path
		privateResourcesRootPath = EXT:{$tmplBootstrap.settings.extPath}Resources/Private/

		# Public Resources Path
		publicResourcesRootPath = EXT:{$tmplBootstrap.settings.extPath}Resources/Public/
	}
	view {
		# Path to main templates
		templateRootPath = {$tmplBootstrap.settings.privateResourcesRootPath}Templates/

		# Path to main partials
		partialRootPath = {$tmplBootstrap.settings.privateResourcesRootPath}Partials/

		# Path to main layouts
		layoutRootPath = {$tmplBootstrap.settings.privateResourcesRootPath}Layouts/

		base {
			# Path to foundation templates
			templateRootPath = {$tmplBootstrap.view.templateRootPath}Base/

			# Path to foundation partials
			partialRootPath = {$tmplBootstrap.view.partialRootPath}Base/

			# Path to foundation layouts
			layoutRootPath = {$tmplBootstrap.view.layoutRootPath}Base/
		}
	}
}

# General URL
url = http://instruccionesaldorso.com

# Translations
logoTitle = Go to homepage
description = Lukas
keywords = Lukas
