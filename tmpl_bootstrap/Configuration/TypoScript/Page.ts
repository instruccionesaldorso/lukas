#######################################
# @author 		sergio.catala@e-net.info
# @package 		tmpl_bootstrap
# @file 		Page.ts
#
# basic PAGE object definition
#######################################

page = PAGE
page {
	typeNum = 0

	config {
		sys_language_mode = content_fallback
		sys_language_overlay = hideNonTranslated
		language = de
		locale_all = de_DE.UTF8
		uniqueLinkVars = 1
		doctype = html5
		renderCharset = utf-8
		metaCharset = utf-8
		simulateStaticDocuments = 0
		tx_realurl_enable = 1
		baseURL = {$url}/
		prefixLocalAnchors = all
		intTarget = _self
		extTarget = _blank
	}

	meta {
		X-UA-Compatible = IE=edge,chrome=1
		viewport = width=device-width, initial-scale=1
		description {
			field = description
			ifEmpty = {$description}
		}
		keywords {
			field = keywords
			ifEmpty = {$keywords}
		}
	}

	headerData {
		10 = TEXT
		10 {
			field = nav_title // title
			noTrimWrap = |<title>|</title>|
		}

		20 = TEXT
		20.value (
			<script type="text/javascript">
				<!--
					function obscureAddMid() {
						document.write('@');
					}
					function obscureAddEnd() {
						document.write('.');
					}
				// -->
			</script>
		)

		30 = TEXT
		30.value (
			<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
		)
	}

	shortcutIcon = favicon.ico

	includeCSS >
	includeCSS {
		bootstrap = {$tmplBootstrap.settings.publicResourcesRootPath}Css/bootstrap.min.css
		bootstrap.media = all

		bootstrap-theme = {$tmplBootstrap.settings.publicResourcesRootPath}Css/bootstrap-theme.min.css
		bootstrap-theme.media = all

		# Additional css
		app = {$tmplBootstrap.settings.publicResourcesRootPath}Css/app.css
		app.media = all
	}

	includeJS >
	includeJSFooterlibs >
	includeJSFooter >

	includeJSFooter {
		jquery = {$tmplBootstrap.settings.publicResourcesRootPath}Js/jquery-1.11.2.min.js
        bootstrap = {$tmplBootstrap.settings.publicResourcesRootPath}Js/bootstrap.min.js
	}

	10 = FLUIDTEMPLATE
	10 {
		file = {$tmplBootstrap.view.base.templateRootPath}OneColumn.html
		partialRootPath = {$tmplBootstrap.view.partialRootPath}
		layoutRootPath = {$tmplBootstrap.view.layoutRootPath}
		variables {
			content < styles.content.get
		}
	}

	# Remove some ie7 google chrome stuff
	1000 >
}
