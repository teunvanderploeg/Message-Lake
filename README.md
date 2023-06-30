# Message Lake
Message Lake is een webapplicatie waarmee je berichten kunt delen en beheren. Hieronder vind je informatie over installatie en gebruik.

## Installatie

Volg de onderstaande stappen om het project lokaal te installeren:

Clone de GitHub-repository van Message Lake:

```bash
git clone https://github.com/teunvanderploeg/message-lake.git
```
Navigeer naar de projectdirectory:

```bash
cd message-lake
```
Voer de volgende commando's uit om de benodigde afhankelijkheden te installeren en de vereiste bestanden in te stellen:

```bash
composer install
npm install
cp .env.example .env
```
Maak een nieuwe database aan op je systeem.

Bewerk het .env-bestand en pas de database-instellingen aan om overeen te komen met je lokale omgeving:
```makefile
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
Voer het volgende commando uit om de database te migreren:
```bash
php artisan migrate
```
Maak een symbolische link naar de opslagmap:

```bash
php artisan storage:link
```
Start de ontwikkelingsserver:
```bash
php artisan serve
```
Open een webbrowser en ga naar de URL waarop je ontwikkelingsserver draait.

## Info
- Om toegang te krijgen tot de uploadfunctionaliteit, moet je eerst inloggen met je gebruikersgegevens.
- Ga naar de beheerderspagina door "/admin" achter de URL te plaatsen. Zorg ervoor dat je ingelogd bent als beheerder om toegang te krijgen tot deze pagina.
- Let op: de afbeeldingen van de berichten worden niet geladen vanwege een probleem met de seeder-url. Als je echter zelf een bericht uploadt, wordt er wel een afbeelding aan toegevoegd.

## Vereisten
- PHP 7.4 of hoger
- Composer
- Node.js en npm
