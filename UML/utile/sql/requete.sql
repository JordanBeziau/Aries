-- Sélection par ordre décroissant
SELECT * FROM musiciens ORDER BY nom DESC

-- Sélection restreinte
SELECT prenom, nom FROM musiciens

-- Sélection avec critère
SELECT * FROM musiciens WHERE pays='Angleterre'

-- Sélection multi critère
SELECT * FROM musiciens WHERE style='blues' AND pays='Angleterre'

-- Sélection distincte (empêche d'avoir des doublons..)
SELECT DISTINCT instruments FROM musiciens

-- Sélection par date
SELECT nom, style, pays FROM musiciens WHERE YEAR(naissance) = 1945

-- Sélection par intervalle avec alias
SELECT prenom, nom, style, YEAR(naissance) AS annee
FROM musiciens
WHERE YEAR(naissance) BETWEEN 1940 AND 1945

-- Sélection avec critère approximatif
SELECT * FROM musiciens WHERE instruments LIKE '%guit%'

-- Sélection par date retravaillé
SELECT nom, prenom, DATE_FORMAT( naissance, '%d/%m/%Y') AS date FROM musiciens

-- Sélection par date avec 3 alias
SELECT
  DAY(naissance) AS jour,
  MONTH(naissance) AS mois,
  YEAR(naissance) AS annee
FROM musiciens

-- Compter le nombre d'éléments
SELECT COUNT(*) FROM musiciens

-- Sélectionner le nombre de musiciens groupés par pays
SELECT pays, COUNT(pays) AS nombre FROM musiciens GROUP BY pays

-- Sélectionner les pays représentés une seule fois
SELECT pays FROM
(SELECT pays, COUNT(pays) AS nombre FROM musiciens GROUP BY pays) AS pays_min
WHERE nombre = 1

-- Sélectionner les musiciens des pays représentés une fois
SELECT * FROM musiciens WHERE pays
IN (
  SELECT pays FROM
    (SELECT pays, COUNT(pays) AS nombre FROM musiciens GROUP BY pays) AS pays_min
    WHERE nombre = 1
)

-- Insertion en fin de modèle
INSERT INTO musiciens (id,nom,prenom,instrument,style,pays,naissance,detail)
VALUES(null, 'Gaudry', 'Michael', 'Contrebasse', 'classique', 'France', '1928-09-23', 'À remplir...')

-- Modification d'un enregistrement
UPDATE musiciens SET pays='Angleterre' WHERE nom='Cobain';

-- Supprimer un enregistrement
DELETE FROM musiciens WHERE id=10
