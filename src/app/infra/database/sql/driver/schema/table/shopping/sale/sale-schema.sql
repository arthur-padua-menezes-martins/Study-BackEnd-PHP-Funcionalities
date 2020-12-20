CREATE TABLE sales (
  id integer PRIMARY KEY NOT NULL,
  id_client integer references persons(id),
  sale_price float,
  discount float,
  increment float,
  final_price float,
  observations text,
  sale_at date
);