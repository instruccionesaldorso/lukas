# Setting up menu
lib.menu = HMENU
lib.menu {
	entryLevel = 0
	stdWrap.wrap = <ul class="nav navbar-nav navbar-right">|</ul>
	1 = TMENU
	1 {
		noBlur = 1
		expAll = 1
		NO {
			wrapItemAndSub = <li>|</li>
		}
		ACT < .NO
		ACT = 1
		ACT {
			wrapItemAndSub = <li class="active">|</li>
			#doNotLinkIt = 1
		}
	}
}

# Setting up submenu
lib.submenu = HMENU
lib.submenu {
	entryLevel = 1
	stdWrap.wrap = <ul class="nav nav-sidebar">|</ul>
	1 = TMENU
	1 {
		noBlur = 1
		expAll = 1
		NO = 1
		NO {
			wrapItemAndSub = <li>|</li>
		}
		ACT < .NO
		ACT = 1
		ACT {
			wrapItemAndSub = <li class="active">|</li>
			#doNotLinkIt = 1
		}
	}
}