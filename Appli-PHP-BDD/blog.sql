-- Tous les articles et commentaires du membre id = 3
  SELECT
    A.titre,
    A.sousTitre,
    A.contenu,
    C.contenu as commentaire
  FROM Article AS A
    JOIN Commentaire AS C ON A.Membre_id = C.Membre_id
  WHERE A.Membre_id = 2

-- Tous les articles et commentaires de la catégorie web
  SELECT
    A.titre,
    A.contenu,
    C.titre,
    C.contenu
  FROM Article AS A, Commentaire AS C
    JOIN Article_categorie AS ac ON A.id = ac.Article_id
  WHERE ac.Categorie_id = 3

-- Tous les commentaires du membre id = 3 avec le nom du membre
-- Auteur du commentaire et l'auteur de l'article relié
  SELECT
    A.id,
    A.titre,
    C.titre,
    MC.pseudo AS auteur_com,
    MA.pseudo AS auteur_art
  FROM Commentaire AS C
    JOIN Membre AS MC ON C.Membre_id = MC.id
    JOIN Article AS A ON C.Article_id = A.id
    JOIN Membre AS MA ON A.Membre_id = MA.id
  WHERE MC.id = 2