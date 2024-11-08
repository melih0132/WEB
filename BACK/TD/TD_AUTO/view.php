<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des données</title>
</head>
<body>
    <?php if (!empty($data)): ?>
        <table border="1">
            <tr>
                <?php foreach ($data[0] as $key => $value): ?>
                    <th><?php echo htmlspecialchars($key); ?></th>
                <?php endforeach; ?>
            </tr>
            <?php foreach ($data as $row): ?>
                <tr>
                    <?php foreach ($row as $value): ?>
                        <td><?php echo htmlspecialchars($value); ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Aucune donnée à afficher.</p>
    <?php endif; ?>
</body>
</html>