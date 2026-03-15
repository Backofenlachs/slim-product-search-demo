<?php

namespace App\Repository;

class InventoryRepository {

    public function search(string $term): array {
        // Beispielprodukte (Dummy-Daten)
        $products = [
            ["id" => 1, "name" => "Rose", "sku" => "PL-001", "stock" => 12],
            ["id" => 2, "name" => "Lilie", "sku" => "PL-002", "stock" => 5],
            ["id" => 3, "name" => "Olive", "sku" => "PL-003", "stock" => 8],
        ];

        //$PDO = Database::connect();
        //$products = $PDO->fetchAllProducts();
        
        $search_results = [];
        foreach( $products as $p) {

            if(stripos($p["name"], $term) !== false) {
                $search_results[] = $p;
            }
        }

        return $search_results;
    }
}
