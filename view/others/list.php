
    <?php if (isset($characters) && is_array($characters)): ?>
        <h1>Liste des personnages</h1>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Attack</th>
                    <th>Life</th>
                    <th>Color</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($characters as $character): ?>
                    <tr>
                        <td><?= $character['name'] ?></td>
                        <td><?= $character['atk'] ?></td>
                        <td><?= $character['life'] ?></td>
                        <td><?= $character['color'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>