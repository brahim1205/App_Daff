<?php

use App\Core\Database;

$pdo = Database::getInstance()->getPDO();

try {
    // Table Statut
    $pdo->exec("CREATE TABLE IF NOT EXISTS statut (
        id SERIAL PRIMARY KEY,
        libelle VARCHAR(100) NOT NULL
    )");

    // Table Citoyen
    $pdo->exec("CREATE TABLE IF NOT EXISTS citoyen (
        id SERIAL PRIMARY KEY,
        nom VARCHAR(100) NOT NULL,
        prenom VARCHAR(100) NOT NULL,
        cni VARCHAR(20) NOT NULL UNIQUE,
        datenaiss DATE NOT NULL,
        lieunaiss VARCHAR(100) NOT NULL
    )");

    // Table Journal
    $pdo->exec("CREATE TABLE IF NOT EXISTS journal (
        id SERIAL PRIMARY KEY,
        date DATE NOT NULL,
        heure TIME NOT NULL,
        ipadresse VARCHAR(50),
        loalisation VARCHAR(100),
        statut VARCHAR(100),
        code VARCHAR(50),
        citoyencnirecherche VARCHAR(20),
        FOREIGN KEY (statut) REFERENCES statut(libelle),
        FOREIGN KEY (citoyencnirecherche) REFERENCES citoyen(cni)
    )");

    echo "Migration terminée avec succès.\n";
} catch (PDOException $e) {
    echo "Erreur de migration : " . $e->getMessage() . "\n";
}
