CREATE TABLE products (
    id integer PRIMARY KEY NOT NULL,
    description text,
    stock float,
    cost_price float,
    sale_price float,
    id_manufacturer integer references manufacturers(id),
    id_unit integer references units(id),
    id_type integer references types(id)
);
