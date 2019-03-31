INSERT INTO Customer(last_name, first_name, phone_number, address, city, state, country, zip_code, cust_username, cust_password)
VALUES (
  "Doe",
  "John",
  1234567890,
  "123 Main St.",
  "Anywhere",
  "North Carolina",
  "US",
  12345,
  "johndoe",
  "fakepass"
);

INSERT INTO Customer(last_name, first_name, phone_number, address, city, state, country, zip_code, cust_username, cust_password)
VALUES (
  "Doe",
  "Jane",
  0987654321,
  "124 Main St.",
  "Anywhere",
  "North Carolina",
  "US",
  12345,
  "janedoe",
  "passfake"
);

INSERT INTO Employee(last_name, first_name, emp_username, emp_password)
VALUES (
  "Person",
  "Worker",
  "wperson",
  "123"
);

INSERT INTO Employee(last_name, first_name, emp_username, emp_password, is_manager)
VALUES (
  "No Name",
  "Admin",
  "admin",
  "12345",
  1
);

INSERT INTO productTest(name, description, price)
VALUES(
  "Test Item 1",
  "This is a fake item. It is not for sale.",
  2.99
);

INSERT INTO productTest (name, description, price)
VALUES(
  "Test Item 2",
  "This is a fake item. It is not for sale.",
  3.99
);

INSERT INTO productTest (name, description, price)
VALUES(
  "Test Item 3",
  "This is a fake item. It is not for sale.",
  4.99
);

INSERT INTO productTest (name, description, price)
VALUES(
  "Test Item 4",
  "This is a fake item. It is not for sale.",
  7.99
);

INSERT INTO productTest(name, description, price)
VALUES(
  "Test Item 5",
  "This is a fake item. It is not for sale.",
  12.99
);

INSERT INTO productTest (name, description, price)
VALUES(
  "Test Item 6",
  "This is a fake item. It is not for sale.",
  25.99
);

INSERT INTO productTest (name, description, price)
VALUES(
  "Test Item 7",
  "This is a fake item. It is not for sale.",
  67.99
);

INSERT INTO productTest (name, description, price)
VALUES(
  "Test Item 8",
  "This is a fake item. It is not for sale.",
  89.99
);

INSERT INTO productTest (name, description, price)
VALUES(
  "Test Item 9",
  "This is a fake item. It is not for sale.",
  89.99
);

INSERT INTO productTest (name, description, price)
VALUES(
  "Test Item 10",
  "This is a fake item. It is not for sale.",
  89.99
);

INSERT INTO productTest (name, description, price)
VALUES(
  "Test Item 11",
  "This is a fake item. It is not for sale.",
  89.99
);

INSERT INTO productTest (name, description, price)
VALUES(
  "Test Item 12",
  "This is a fake item. It is not for sale.",
  89.99
);

INSERT INTO orderTest (description, quantity, price, customer_id)
VALUES(
  "Test Order 1",
  1,
  1.99,
  1
);

INSERT INTO orderTest (description, quantity, price, customer_id)
VALUES(
  "Test Order 2",
  3,
  5.99,
  2
);

INSERT INTO orderTest (description, quantity, price, customer_id)
VALUES(
  "Test Order 3",
  5,
  1.99,
  1
);

INSERT INTO orderTest (description, quantity, price, customer_id)
VALUES(
  "Test Order 4",
  1,
  1.99,
  2
);

INSERT INTO invTest (name, description, quantity_on_hand, quantity_reorder, weight_unit, supplier_id, price)
VALUES(
  "Flour",
  "Regular flower for baking.",
  10,
  5,
  "lbs",
  1,
  5.99
);

INSERT INTO invTest (name, description, quantity_on_hand, quantity_reorder, weight_unit, supplier_id, price)
VALUES(
  "Sugar",
  "Cane Sugar.",
  20,
  10,
  "lbs",
  1,
  8.99
);

INSERT INTO invTest (name, description, quantity_on_hand, quantity_reorder, weight_unit, supplier_id, price)
VALUES(
  "Milk",
  "2% Skim milk.",
  15,
  3,
  "gal",
  1,
  4.99
);

INSERT INTO invTest (name, description, quantity_on_hand, quantity_reorder, weight_unit, supplier_id, price)
VALUES(
  "Eggs",
  "Grade A eggs.",
  36,
  12,
  "",
  1,
  6.99
);
