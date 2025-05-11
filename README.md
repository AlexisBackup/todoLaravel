# ✅ Todo App – Laravel 12 + PostgreSQL + Docker + Tailwind CSS

Une application simple de gestion de tâches (To-do list) développée avec **Laravel 12**, utilisant **PostgreSQL 17**, **Docker** pour la conteneurisation, et **Tailwind CSS** pour un design responsive et épuré.

---

## 🚀 Fonctionnalités

- CRUD complet des tâches
- Statut des tâches (à faire / terminée)
- Interface responsive avec Tailwind CSS
- Base de données PostgreSQL
- Déploiement local via Docker Compose

---

## 🧰 Stack technique

- **Back-end** : Laravel 12 (PHP 8.3)
- **Base de données** : PostgreSQL 17.4
- **Conteneurisation** : Docker + Docker Compose
- **Front-end** : Blade + Tailwind CSS
- **Système d’authentification** : Laravel Breeze (optionnel)

---

## ⚙️ Installation et configuration

### 1. Cloner le dépôt

```bash
git clone https://github.com/ton-utilisateur/laravel-todo.git
cd laravel-todo
```

### 2. Copier le fichier `.env`

```bash
cp .env.example .env
```

### 3. Modifier les variables de la base de données dans `.env`

```env
DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret
```

---

### 4. Lancer Docker

```bash
docker-compose up -d --build
```

> Assurez-vous que Docker Desktop est lancé et que les ports ne sont pas occupés.

---

### 5. Installer les dépendances PHP et JavaScript

```bash
docker-compose exec app composer install
docker-compose exec app npm install
docker-compose exec app npm run dev
```

---

### 6. Générer la clé de l'application

```bash
docker-compose exec app php artisan key:generate
```

---

### 7. Lancer les migrations et les seeders

```bash
docker-compose exec app php artisan migrate:fresh --seed
```

---

### 8. Accéder à l'application

- 🖥️ Interface Web : [http://localhost:8000](http://localhost:8000)
- 🐘 (facultatif) Adminer : [http://localhost:8080](http://localhost:8080)

---

## 📁 Arborescence simplifiée du projet

```
├── app/
├── bootstrap/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
│   └── web.php
├── docker-compose.yml
├── .env
└── README.md
```

---

## 🧪 Lancer les tests (optionnel)

```bash
docker-compose exec app php artisan test
```

---

## 🔧 Commandes utiles

```bash
# Lancer les migrations avec seed
php artisan migrate:fresh --seed

# Lister les routes
php artisan route:list

# Nettoyer le cache
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

---

## ✨ Fonctionnalités futures possibles

- Priorités et deadlines sur les tâches
- Étiquettes et filtres
- Partage de listes entre utilisateurs
- Export PDF ou CSV des tâches

---

## 👨‍💻 Auteur

Développé par [Alexis](https://github.com/ton-utilisateur) – 2025  
Licence : MIT – libre d’utilisation et de modification.
