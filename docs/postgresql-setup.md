# PostgreSQL Setup (Ubuntu)

Quick setup for the **Slim Product Search Demo** development database.

## Install PostgreSQL
```bash
sudo apt update
sudo apt install postgresql
```

Start psql as the postgres user:

```bash
sudo -u postgres psql
```

## Create application user
```sql
CREATE ROLE perseus_app WITH LOGIN PASSWORD 'secure_password';
```

## Create database
```sql
CREATE DATABASE slim_product_search_demo OWNER perseus_app;
```

Switch to the database:

```sql
\c slim_product_search_demo
```

## Create products table
```sql
CREATE TABLE products (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    sku VARCHAR(100) UNIQUE NOT NULL,
    stock INTEGER NOT NULL DEFAULT 0
);
```

## Insert test data
```sql
INSERT INTO products (name, sku, stock) VALUES
('Rose', 'PL-001', 12),
('Lilie', 'PL-002', 5),
('Olive', 'PL-003', 8),
('Rosmarin', 'PL-004', 15),
('Tulpe', 'PL-005', 3);
```

Test:

```sql
SELECT * FROM products;
```

## Connection settings (for PHP / PDO)

| Parameter | Value |
|----------|------|
| Host | localhost |
| Port | 5432 |
| Database | slim_product_search_demo |
| User | perseus_app |
| Password | 1234 |
