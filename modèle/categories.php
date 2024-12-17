<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des catégories</title>
</head>
<body>
    <h1>Liste des catégories</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Libellé</th>
        </tr>
        <?php foreach ($categories as $category): ?>
        <tr>
            <td><?php echo htmlspecialchars($category['id']); ?></td>
            <td><?php echo htmlspecialchars($category['libelle']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Ajouter une catégorie</h2>
    <form method="POST" action="../controllers/CategoryController.php?action=add">
        <input type="text" name="libelle" placeholder="Libellé" required>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>