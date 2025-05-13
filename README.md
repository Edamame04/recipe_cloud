# <img src="https://github.com/Edamame04/recipe_cloud/blob/main/assets/img/logo_with_bg.svg" alt="logo" width="30"/> Recipe Cloud – Deine digitale Rezeptwolke

**Recipe Cloud** ist eine Webanwendung zur Verwaltung und zum Austausch von Rezepten. Nutzerinnen und Nutzer können Rezepte erstellen, speichern, durchsuchen und bewerten – alles zentral an einem Ort. Die Anwendung wurde im Rahmen des Moduls *Webengineering 2* entwickelt und basiert auf PHP, HTML, CSS, JavaScript und MySQL.

Das Projekt dient dazu, praktische Erfahrungen mit **PHP** und **SQL** zu sammeln und das Verständnis für serverseitige Webentwicklung mit Datenbankanbindung zu vertiefen.Die Anwendung wurde bewusst ohne den Einsatz von Frameworks oder Bibliotheken entwickelt. Es kommen ausschließlich reines **HTML**, **CSS**, **JavaScript** und **PHP** zum Einsatz, um die grundlegenden Konzepte und Techniken der Webentwicklung zu vertiefen.

---

## 🌟 Funktionen

### Öffentlich:
- Startseite mit Rezeptvorschlägen 
- Rezeptübersicht mit Filter- und Suchfunktion
- Detaillierte Rezeptanzeige (inkl. Zutaten, Zubereitung, Bildern)

### Für registrierte Nutzer:
- Benutzerregistrierung & Login (mit Passwort-Hashing & PHP-Sessions)
- Eigenes Benutzerprofil
- Rezepte erstellen, bearbeiten und löschen
- Rezepte von anderen Nutzern bewerten und kommentieren
- Favoritenliste oder „Merken“-Funktion 

### Optional/Erweiterbar:
- Bild-Upload für Rezepte
- Rezeptkategorien & Tags
- Adminbereich zur Moderation

---

## 🧰 Tech-Stack

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP 8+ (Formularverarbeitung, Sessions)
- **Datenbank:** MySQL 

---

## 🗃️ Datenbankmodell (aktuell)

**users:**  
`id *(PK)*`, `username`, `email`, `password_hash`

**recipes:**  
`id *(PK)*` , `user_id *(FK)*`, `title`, `description`, `prep_time`, `cook_time`, `difficulty_id *(FK)*`, `ingredients`, `instructions_csv`, `category`, `image_path`

**difficulty:**
`id *(PK)*`, `difficulty`

**ratings:**  
`id *(PK)*`, `user_id *(FK)*`, `recipe_id *(FK)*`, `rating`, `comment_text`, `created_at`

**favorites:**
`id *(PK)*`, `user_id *(FK)*`, `recipe_id *(FK)*`

---

## 🔧 Lokale Einrichtung

1. Projekt clonen:
   ```bash
   git clone https://github.com/Edamame04/recipe_cloud

2. MySQL-Datenbank anlegen, z. B. `recipe_cloud`, und ggf. `recipe_cloud.sql` importieren

3. Datenbankverbindung in `db.php` konfigurieren:

   ```php
   $host = 'localhost';
   $db   = 'recipe_cloud';
   $user = 'root';
   $pass = '';
   ```

4. Projekt im lokalen Webserver (z. B. mit XAMPP) aufrufen:

   ```
   http://localhost/recipe-cloud/
   ```

---

## 📁 Projektstruktur (aktuell)

```
recipe-cloud/
│
├── index.php
├── upload.php
│
├── assets/
│   ├── css/
│   └── img/
│
├── be-logic/
│   ├── db.php
│
└── README.md
```

---

## 🖼️ Screenshots (kommt noch)

> Hier werden Screenshots ergänzt

