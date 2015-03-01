# Setting up tagline
lib.tagline = TEXT
lib.tagline {
	value = Lukas
	stdWrap.typolink {
		parameter = 1
		title = Lukas
	}
}

# Setting up title/subtitle
lib.title = TEXT
lib.title.data = page:title

lib.subtitle = TEXT
lib.subtitle.data = page:subtitle

# Setting up year
lib.getYear = TEXT
lib.getYear{
	data = date:Y
}
