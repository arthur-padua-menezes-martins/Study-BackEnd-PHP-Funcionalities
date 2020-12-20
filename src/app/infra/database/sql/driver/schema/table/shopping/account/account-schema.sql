CREATE TABLE accounts (
  id integer PRIMARY KEY NOT NULL,
  id_client INTEGER REFERENCES persons(id),
  value float,
  paid char(1),
	emission_at date,
  expiry_at date
);