#
# Table structure for table 'tx_management_domain_model_customer'
#
CREATE TABLE tx_management_domain_model_customer (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	internal_id varchar(255) DEFAULT '' NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL,
	surname varchar(255) DEFAULT '' NOT NULL,
	companies int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_management_domain_model_company'
#
CREATE TABLE tx_management_domain_model_company (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	department varchar(255) DEFAULT '' NOT NULL,
	contact varchar(255) DEFAULT '' NOT NULL,
	location int(11) DEFAULT '0' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	internal_comments text NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_management_domain_model_job'
#
CREATE TABLE tx_management_domain_model_job (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	category int(11) DEFAULT '0' NOT NULL,
	location int(11) DEFAULT '0' NOT NULL,
	date int(11) DEFAULT '0' NOT NULL,
	start int(11) DEFAULT '0' NOT NULL,
	job_start int(11) DEFAULT '0' NOT NULL,
	job_end int(11) DEFAULT '0' NOT NULL,
	end int(11) DEFAULT '0' NOT NULL,
	customer int(11) unsigned DEFAULT '0',
	fees int(11) unsigned DEFAULT '0',
	trip_excluded tinyint(4) unsigned DEFAULT '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,


	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_management_domain_model_invoice'
#
CREATE TABLE tx_management_domain_model_invoice (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	customer_id varchar(255) DEFAULT '' NOT NULL,
	date int(11) DEFAULT '0' NOT NULL,
	amount double(11,2) DEFAULT '0.00' NOT NULL,
	payment_date int(11) DEFAULT '0' NOT NULL,
	jobs int(11) unsigned DEFAULT '0' NOT NULL,
	company int(11) unsigned DEFAULT '0',
	tax int(11) unsigned DEFAULT '0',
	rate int(11) unsigned DEFAULT '0',
	description varchar(255) DEFAULT '' NOT NULL,
	modality varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_management_domain_model_tax'
#
CREATE TABLE tx_management_domain_model_tax (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	percentage double(11,2) DEFAULT '0.00' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_management_domain_model_rate'
#
CREATE TABLE tx_management_domain_model_rate (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	price int(11) DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_management_domain_model_fee'
#
CREATE TABLE tx_management_domain_model_fee (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	quantity int(11) DEFAULT '1' NOT NULL,
	price double(11,2) DEFAULT '0.00' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_management_domain_model_location'
#
CREATE TABLE tx_management_domain_model_location (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	record_type varchar(255) DEFAULT '' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	place varchar(255) DEFAULT '' NOT NULL,
	address varchar(255) DEFAULT '' NOT NULL,
	zip varchar(255) DEFAULT '' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_management_customer_company_mm'
#
CREATE TABLE tx_management_customer_company_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);