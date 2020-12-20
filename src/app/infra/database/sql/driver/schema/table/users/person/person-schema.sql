CREATE TABLE persons (
  id integer PRIMARY KEY NOT NULL,
  id_city integer references citys(id),
  name text,
  email text,
  phone text,
  address text,
  neighborhood text
);