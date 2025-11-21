# 🏠 Projet Airbnb Clone - PHP Natif

![PHP](https://img.shields.io/badge/PHP-7.4%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000f?style=for-the-badge&logo=mysql&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![IPSSI](https://img.shields.io/badge/École-IPSSI-orange?style=for-the-badge)

> Ce projet a été réalisé dans le cadre de l'évaluation "Développement Web PHP" à l'**IPSSI**. L'objectif est de reproduire les fonctionnalités principales d'un site de réservation de vacances type Airbnb, en utilisant PHP natif (sans framework) et une base de données MySQL.

---

## ✅ Fonctionnalités Réalisées

Le projet couvre l'ensemble des consignes demandées :

* **Affichage des logements :** Liste dynamique de 10 annonces par page avec photo, prix, ville et hôte.
* **Pagination :** Système de navigation entre les pages (Précédent / Suivant / Numéros). La page courante est mise en évidence.
* **Tri dynamique :** Possibilité de trier les résultats par :
    * Nom
    * Ville
    * Prix
    * Propriétaire
* **Tri & Ordre (Fonctionnalité Avancée) :** Le choix du tri (ex: Prix) et l'ordre (Croissant/Décroissant) sont **conservés** lorsque l'on change de page.
* **Ajout d'annonce :** Formulaire fonctionnel pour insérer un nouveau logement en base de données (via URL d'image).
* **Design :** Interface utilisateur propre et responsive réalisée en CSS (fichier `style.css`).

---

## 🛠️ Stack Technique

* **Langage Backend :** PHP (Utilisation de PDO pour la sécurité et la connexion BDD).
* **Base de données :** MySQL / MariaDB.
* **Frontend :** HTML5, CSS3.
* **Outils :** Git, GitHub (Gestion de versions et branches).

---

## 📂 Structure du Projet

Voici l'organisation des fichiers du projet :

```text
📦 AIRBNB
 ┣ 📜 config.php        # Configuration de la connexion BDD ($dbh)
 ┣ 📜 index.php         # Contrôleur principal (gestion de l'affichage)
 ┣ 📜 list.php          # Vue : Affichage de la grille des logements
 ┣ 📜 sort.php          # Vue : Formulaire de tri et boutons d'ordre
 ┣ 📜 page.php          # Vue : Barre de pagination
 ┣ 📜 ajout.php         # Page : Formulaire d'ajout d'une annonce
 ┣ 📜 function_adv.php  # Fonctions utilitaires (calcul du nombre de pages)
 ┣ 📜 style.css         # Feuilles de style CSS
 ┣ 📜 airbnb.sql        # Fichier d'export de la base de données
 ┗ 📜 README.md         # Documentation du projet
