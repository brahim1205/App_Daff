<?php

use App\Core\Database;

$pdo = Database::getInstance()->getPDO();

try {
    // Statuts
    $pdo->exec("INSERT INTO statut (libelle) VALUES
        ('Actif'),
        ('Inactif'),
        ('Suspendu')");

    // Citoyens
    $pdo->exec("INSERT INTO citoyen (nom, prenom, cni, datenaiss, lieunaiss) VALUES
        ('Diallo', 'Amadou', 'CNI12345', '1990-01-01', 'Dakar'),
        ('Ba', 'Fatou', 'CNI67890', '1985-05-12', 'Thies')");

    // Journaux
    $pdo->exec("INSERT INTO journal (date, heure, ipadresse, loalisation, statut, code, citoyencnirecherche) VALUES
        ('2025-07-21', '10:00:00', '192.168.1.1', 'Dakar', 'Actif', 'CODE1', 'CNI12345'),
        ('2025-07-21', '11:00:00', '192.168.1.2', 'Thies', 'Inactif', 'CODE2', 'CNI67890')");

    echo "Données insérées avec succès.\n";
} catch (PDOException $e) {
    echo "Erreur lors de l'insertion : " . $e->getMessage() . "\n";
}
