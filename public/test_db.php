<?php

try {
    $pdo = new PDO(
        "pgsql:host=dpg-d1v61mz433s73fcv250-a;port=5432;dbname=postgresql_5j85",
        "postgresql_5j85_user",
        "zl9JgWMY3ZjxmDAG9889MVhwCSwRTFZd"
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Créer une table si elle n'existe pas
    $pdo->exec("CREATE TABLE IF NOT EXISTS users (
        id SERIAL PRIMARY KEY,
        name VARCHAR(100),
        email VARCHAR(100)
    )");

    // Insérer une donnée
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->execute(['Cherif', 'cherif@example.com']);

    echo "✅ Donnée insérée avec succès dans Render";
} catch (PDOException $e) {
    echo "❌ Erreur de connexion ou d'insertion : " . $e->getMessage();
}
