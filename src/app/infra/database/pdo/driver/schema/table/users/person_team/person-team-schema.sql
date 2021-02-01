CREATE TABLE person_teams (
  id integer PRIMARY KEY NOT NULL,
  id_person integer references persons(id),
  id_team integer references teams(id)
);
