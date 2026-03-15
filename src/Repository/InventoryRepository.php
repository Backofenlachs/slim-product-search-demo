<?php

namespace App\Repository;

use App\Infrastructure\Database;
use PDO;

class InventoryRepository {

    public function search(string $term): array {

        $pdo = Database::connect();
        
        $sql = "
            SELECT id, name, sku, stock
            FROM products
            WHERE name ILIKE :term
            LIMIT 20
        ";
        
        $statement = $pdo->prepare($sql);
        $statement->execute([
            'term' => '%' . $term . '%'
        ]);

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
