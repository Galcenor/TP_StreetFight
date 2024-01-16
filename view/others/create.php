<h1>Créer un personnage</h1>

    <form action="index.php?create" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="atk">Attack:</label>
        <input type="number" id="atk" name="atk" required><br>

        <label for="life">Life:</label>
        <input type="number" id="life" name="life" required><br>

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required><br>

        <input type="submit" name="create" value="Create Character">
    </form>