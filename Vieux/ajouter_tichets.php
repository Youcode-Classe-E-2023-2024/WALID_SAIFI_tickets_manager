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
        $tick = new Ticket($titre,$description,$priority,'1','1');
        $id=$tick->createTicket();

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Ticket</title>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #007BFF;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head> 
<body>

<form action="" method="post">
    <h2>Ajouter un Ticket</h2>
    <label for="titre">Titre du Ticket:</label>
    <input type="text" id="titre" name="titre" required><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea><br>

     <label for="priority">Priorité:</label>
         <select id="priority" name="priority" required>
  <option value="" disabled selected>Choisissez une priorité</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select><br>



    <label for="assigneur[]">Créateur:</label>
    <select id="assigneur" name="assigneur[]" multiple required>
    <?php
    $conn = new Database();
    $result = $conn->getConnection()->query("SELECT id_utilisateur, nom, prenom FROM Utilisateur");
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['id_utilisateur'] . "'>" . $row['nom'] . " " . $row['prenom'] . "</option>";
    }
    ?>
</select><br>
      <input type="submit" value="Ajouter Ticket">
      </form>
      <script>
        var selectedOptions = [];
     document.getElementById('assigneur').addEventListener('change', function() {
    updateSelectedOptions(this);
});

function updateSelectedOptions(select) {
    var options = select && select.options;

    for (var i = 0; i < options.length; i++) {
        if (options[i].selected) {
            var value = options[i].value;

            if (!selectedOptions.includes(value)) {
                selectedOptions.push(value);
                options[i].style.color = 'red'; 
            } else {
                selectedOptions = selectedOptions.filter(function(item) {
                    return item !== value;
                });
                options[i].style.color = '';
            }
        }
    }

    // Log the selected values array
    console.log(selectedOptions);
}
</script>

</body>
</html>
