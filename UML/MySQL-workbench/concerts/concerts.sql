-- Insertion
use db_concerts;
insert into Groupe (nom) values ('Venizia'), ('Mezzo');
insert into Musicien (nom) values ('Mozart'), ('Chopin'), ('Bach');

-- Partie problématique
insert into Concert (date, ville, Groupe_id, Musicien_id)
  values ('2017-10-02', 'Lille', 1, 1), ('2017-10-28', 'Strasbourg', 1, 1);
