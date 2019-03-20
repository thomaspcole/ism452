CREATE TABLE Customer (
  customer_id int(10) NOT NULL PRIMARY KEY,
  last_name varchar(25) NOT NULL,
  first_name varchar(25) NOT NULL,
  phone_number int(10) NOT NULL,
  address varchar(50) NOT NULL,
  city varchar(50) NOT NULL,
  state varchar(50) NOT NULL,
  country varchar(2) NOT NULL,
  zip_code int(5) NOT NULL,
  cust_username varchar(30) NOT NULL,
  cust_password varchar(32) NOT NULL
);