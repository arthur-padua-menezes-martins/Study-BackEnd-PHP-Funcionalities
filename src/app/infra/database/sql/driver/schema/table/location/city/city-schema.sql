CREATE TABLE citys (
  id integer PRIMARY KEY NOT NULL,
  name text,
  id_state INTEGER REFERENCES states (id)
);
