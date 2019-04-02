CREATE TABLE Customer (
  customer_id int(10) NOT NULL AUTO_INCREMENT,
  last_name varchar(25) NOT NULL,
  first_name varchar(25) NOT NULL,
  phone_number int(10) NOT NULL,
  address varchar(50) NOT NULL,
  city varchar(50) NOT NULL,
  state varchar(50) NOT NULL,
  country varchar(2) NOT NULL,
  zip_code int(5) NOT NULL,
  cust_username varchar(30) NOT NULL,
  cust_password varchar(32) NOT NULL,
  PRIMARY KEY(customer_id)
);

CREATE TABLE Employee(
  employee_id int(10) NOT NULL AUTO_INCREMENT,
  last_name varchar(25) NOT NULL,
  first_name varchar(25) NOT NULL,
  emp_username varchar(30) NOT NULL,
  emp_password varchar(32) NOT NULL,
  is_manager BOOLEAN NOT NULL default 0,
  PRIMARY KEY(employee_id)
);


CREATE TABLE productTest (
  prod_id int(10) NOT NULL AUTO_INCREMENT,
  name varchar(25) NOT NULL,
  description varchar(100) NOT NULL,
  price decimal(8,2) NOT NULL,
  is_live BOOLEAN NOT NULL default 1,
  PRIMARY KEY (prod_id)
);

CREATE TABLE orderTest (
  order_id int(10) NOT NULL AUTO_INCREMENT,
  description varchar(100) NOT NULL,
  quantity int(10) NOT NULL,
  price decimal(8,2) NOT NULL,
  customer_id int,
  PRIMARY KEY (order_id),
  FOREIGN KEY (customer_id) REFERENCES Customer(customer_id)
);

CREATE TABLE invTest(
  inv_id int(10) NOT NULL AUTO_INCREMENT,
  name varchar(25) NOT NULL,
  description varchar(100) NOT NULL,
  quantity_on_hand int(10) NOT NULL,
  quantity_reorder int(10) NOT NULL,
  weight_unit varchar(20) NOT NULL,
  supplier_id int NOT NULL,
  price decimal(8,2) NOT NULL,
  PRIMARY KEY (inv_id)
);
