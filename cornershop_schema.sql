CREATE Database cornerShop;

CREATE TABLE store (
	id int (6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar (25) NOT NULL,
	login_id varchar (20) NOT NULL UNIQUE,
	password varchar (20) NOT NULL,
	address varchar (80) NOT NULL,
	latitude float (10, 6) NOT NULL,
	longitude float (10, 6) NOT NULL,
	type int (3) NOT NULL,
	last_update_time timestamp
);

CREATE TABLE category (
	id int (3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	store_id int (6) NOT NULL,
	name varchar (25) NOT NULL,
	parent_id int (3) DEFAULT NULL,
	image_link varchar (50) NOT NULL,
	type int (3) NOT NULL
);

#store_id to be added

CREATE TABLE product (
	id int (10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	store_id int (6) NOT NULL,
	name varchar (25) NOT NULL,
	description varchar (100) DEFAULT NULL,
	sku varchar (30) NOT NULL UNIQUE,
	pricebuy varchar (5) NOT NULL,
	pricesell varchar (5) NOT NULL,
	category_id int (3) DEFAULT 0,
	image_link varchar (50) NOT NULL,
	type int (3) NOT NULL

);

CREATE TABLE user_details (
	id int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	firstname varchar (25) NOT NULL,
	lastname varchar (25),
	email varchar (100) NOT NULL,
	phone varchar (30) NOT NULL,
	password varchar (20) NOT NULL
);
	
CREATE TABLE orders (
	id int (16) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	phone int (11) NOT NULL,
	address varchar (30) NOT NULL UNIQUE,
	order_time timestamp NOT NULL,
	status int (2) DEFAULT 0,
	UNIQUE KEY (id, phone)
);

#status: 0: pending, 1: success, 2: inQueue

CREATE TABLE cart (
	id int (20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	order_id int (16) NOT NULL,
	product_id int (10) NOT NULL,
	quantity int (4) NOT NULL,
	status int (2) DEFAULT 0,
	UNIQUE KEY (product_id, order_id)
);

#status: 0: cart-order, 1: wishlist
