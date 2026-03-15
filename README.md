# Slim Product Search Demo

Kleines Lernprojekt zur Simulation einer internen Produktsuche mit Slim und PostgreSQL.

## Ziel
- Slim Routing verstehen
- PostgreSQL-Anbindung verstehen
- Such-Flow nachvollziehen

## Components

1) Entrypoint: `public/index.php`
2) Routing: `config/routes.php`
3) Request Handler: `src/Handler/SearchProductHandler.php`
4) Database Connection: `src/Infrastructure/Database.php`
5) DB Access: `src/Repository/InventoryRepository.php`
6) Search Logic (for later): `src/SearchPolicy.php`

## Architecture

### Ordnerstruktur
```
slim-product-search-demo/
├── composer.json
├── composer.lock
├── config
│   └── routes.php
├── docs
│   └── product-search-flow.puml
├── public
│   └── index.php
├── README.md
├── src
│   ├── Handler
│   │   └── SearchProductHandler.php
│   ├── Infrastructure
│   │   └── Database.php
│   └── Repository
│       └── InventoryRepository.php
└── vendor/..
```

### Flow
```
Request -> Slim Route-> RequestHandler -> Repository -> PostgreSQL -> Response
```

See sequence diagramm:
```
docs/product-search-flow.puml
```

exportet png sequence diagramm:
```
out/docs/product-search-flow.png
```

---

## Autor: Perseus Palma Jacobs