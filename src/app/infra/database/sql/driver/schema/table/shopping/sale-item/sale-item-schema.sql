CREATE TABLE sale_items (
  id integer PRIMARY KEY NOT NULL,
  id_product integer references products(id),
  id_sale integer references sales(id),
  quantity float, 
  price float
);
