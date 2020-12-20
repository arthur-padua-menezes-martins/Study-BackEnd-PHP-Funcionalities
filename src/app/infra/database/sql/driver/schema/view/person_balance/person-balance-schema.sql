CREATE VIEW view_balance_persons as
  SELECT 
    id, name, email, phone, address, neighborhood,
    (select sum(value) from accounts where id_client=persons.id) as total,
    (select sum(value) from accounts where id_client=persons.id and paid='N') as open
  FROM persons
  ORDER by 8 desc;
