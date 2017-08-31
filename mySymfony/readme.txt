Path pour version PHP 7.0.10
Certificat cacert.pem
Installer Symfony
Installer application Symfony

Visite de l'architecture
Visite de la documentation
Approche personnelle
    controller
    router
    profiler
    models -> service -> ORM
    views
        template & héritage
        Twig
            passer des données
            conditions
            boucles

Créer un bundle
    controller
        3 méthodes -> redirections
        routes avec paramètres

Formulaires
    #1. Créer le formulaire dans le controller
    #2. form class -> privilégier

Entités
    créer une entité
    son rôle
    #1. Generate
        créer la table relative (cli)
        modifier une entité
        ajouter getter/setter
        mettre à jour la table
    #2. Migrations

dataFixtures
    générer des données pour une entité -> insert, update
    génération faker
    Blog, article
    Ajout entité commentaire
    relation ManyToOne

Formulaire et entité
    form de contact basique
    envoi de mail

Exercice de type CRUD