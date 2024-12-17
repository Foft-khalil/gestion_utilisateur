<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
</head>
<body>
    <h1>Liste des produits</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Catégorie</th>
        </tr>
        <?php foreach ($produits as $produit): ?>
        <tr>
            <td><?php echo htmlspecialchars($produit['id']); ?></td>
            <td><?php echo htmlspecialchars($produit['nom']); ?></td>
            <td><?php echo htmlspecialchars($produit['description']); ?></td>
            <td><?php echo htmlspecialchars($produit['prix']); ?></td>
            <td><?php echo htmlspecialchars($produit['quantite']); ?></td>
            <td><?php echo htmlspecialchars($produit['category_name']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Ajouter un produit</h2>
    <form method="POST" action="../controllers/ProductController.php?action=add">
        <input type="text" name="nom" placeholder="Nom" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <input type="number" name="prix" placeholder="Prix" step="0.01" required>
        <input type="number" name="quantite" placeholder="Quantité" required>
        <select name="id_categorie" required>
            <option value="">Sélectionnez une catégorie</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo htmlspecialchars($category['id']); ?>"><?php echo htmlspecialchars($category['libelle']); ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>