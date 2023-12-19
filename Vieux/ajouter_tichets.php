<?php
require_once("../Class/dataBase.php");
require_once("../Class/Tickt.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if all required fields are set
    if (isset($_POST['titre'], $_POST['description'], $_POST['priority'], $_POST['assigneur'])) {
        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $priority = $_POST['priority'];
        $assigneur = $_POST['assigneur'];
        $conn = new Database();
        $tick = new Ticket($titre, $description, $priority, '1', '1');
        $id = $tick->createTicket();

        foreach ($assigneur as $userId) {
            $stmt = $conn->getConnection()->prepare("INSERT INTO assignement (id_ticket, id_assigne) VALUES (?, ?)");
            $stmt->bind_param("ii", $id, $userId);
            $stmt->execute();
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Ticket</title>
    <!-- Add Tailwind CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 font-sans">

    <form action="" method="post" class="max-w-md mx-auto mt-8 p-8 bg-white rounded shadow-md">
        <h2 class="text-2xl mb-4 text-blue-500">Ajouter un Ticket</h2>

        <label for="titre" class="block text-gray-600">Titre du Ticket:</label>
        <input type="text" id="titre" name="titre" required
            class="w-full px-3 py-2 mb-4 border rounded-md focus:outline-none focus:border-blue-500">

        <label for="description" class="block text-gray-600">Description:</label>
        <textarea id="description" name="description" required
            class="w-full px-3 py-2 mb-4 border rounded-md focus:outline-none focus:border-blue-500"></textarea>

        <label for="priority" class="block text-gray-600">Priorité:</label>
        <select id="priority" name="priority" required
            class="w-full px-3 py-2 mb-4 border rounded-md focus:outline-none focus:border-blue-500">
            <option value="" disabled selected>Choisissez une priorité</option>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>

        <label for="assigneur[]" class="block text-gray-600">Assigner à développeur :</label>
        <select id="assigneur" name="assigneur[]" multiple
            class="w-full px-3 py-2 mb-4 border rounded-md focus:outline-none focus:border-blue-500">
            <?php
            $conn = new Database();
            $result = $conn->getConnection()->query("SELECT id_utilisateur, nom, prenom FROM Utilisateur");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id_utilisateur'] . "'>" . $row['nom'] . " " . $row['prenom'] . "</option>";
            }
            ?>
        </select>

        <input type="submit" value="Ajouter Ticket"
            class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer hover:bg-blue-700">
    </form>

</body>

</html>
