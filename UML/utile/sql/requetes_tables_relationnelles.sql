-- Sélectionner 2 tables musiciens et instruments
  -- *** Version 1 ***
  SELECT
    musiciens.nom,
    musiciens.prenom,
    instruments.nom AS instrument
  FROM musiciens
  JOIN instruments ON musiciens.instrument_id = instruments.id

  -- *** Version 2 ***
  SELECT
    M.nom,
    M.prenom,
    I.nom AS instrument
  FROM musiciens AS M
  JOIN instruments AS I ON M.instrument_id = I.id
  WHERE I.nom LIKE '%guit%'

-- Sélectionner avec 3 jointures
  SELECT
    M.id,
    M.prenom,
    M.nom,
    M.detail,
    P.pays AS pays,
    S.nom AS style,
    I.nom AS instrument
  FROM musiciens AS M
  JOIN pays AS P ON M.pays_id = P.id
  JOIN style AS S ON M.style_id = S.id
  JOIN instruments AS I ON M.instrument_id = I.id
  WHERE I.nom LIKE '%guit%'
