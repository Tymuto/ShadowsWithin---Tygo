# CONVENTIES

Dit document beschrijft de conventies die ik gebruik binnen mijn Laravel-project.

## Structuur

### 1. Mappenstructuur
- **Controllers** worden geplaatst in de `app/Http/Controllers`-map. Groepeer gerelateerde controllers in submappen indien nodig.
- **Models** worden opgeslagen in de `app/Models`-map.
- **Views** worden geplaatst in de `resources/views`-map. Gebruik submappen om gerelateerde views te groeperen.
- **Routes** worden in afzonderlijke bestanden geplaatst binnen de `routes/`-map (bijv. `web.php`, `api.php`).
- **Migrations** en **seeds** worden geplaatst in de `database/migrations` en `database/seeders`-mappen.
- **Config**-bestanden worden in de `config/`-map geplaatst.

### 2. Bestandsnamen
- Gebruik `PascalCase` voor klassenbestanden (bijv. `UserController.php`).
- Gebruik `snake_case` voor database- en migratiebestanden (bijv. `2023_08_26_create_users_table.php`).
- Gebruik duidelijke, beschrijvende namen voor views (bijv. `user_profile.blade.php`).

## Code Stijl

### 1. Indentatie
- Gebruik 1 tab voor indentatie in alle PHP-, Blade- en JavaScript-bestanden.

### 2. Naamgeving
- **Controllers** gebruiken het achtervoegsel `Controller` (bijv. `UserController`).
- **Models** gebruiken enkelvoudige naamgeving (bijv. `User`, `Post`).
- **Blade Componenten** gebruiken een samengestelde naam met streepjes (bijv. `alert-message.blade.php`).
- **Routes** gebruiken `snake_case` voor route-namen (bijv. `user_profile`).

### 3. Controllers en Methods
- Houd controllers klein en doelgericht. Gebruik services of repositories voor complexe logica.
- Gebruik RESTful methoden (index, show, create, store, edit, update, destroy) in controllers.
- Beperk het aantal regels in methodes. Wanneer een methode te groot wordt, overweeg dan om een aparte service of helper-klasse te maken.
