CREATE VIEW AppareilsMarquesCategories AS
SELECT a.id as id, a.nom as nom, c.nom as categorie, m.nom as marque FROM appareils a
JOIN categories c
ON a.categorie_id = c.id
JOIN marques m
ON a.marque_id = m.id