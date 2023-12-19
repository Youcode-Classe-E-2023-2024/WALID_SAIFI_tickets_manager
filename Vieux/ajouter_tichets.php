<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Ticket Form</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        font-family: 'Arial', sans-serif;
    }

    .container {
        max-width: 600px;
        margin: auto;
    }

    h2 {
        text-align: center;
        margin-bottom: 30px;
    }

    form {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input,
    select,
    textarea {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        box-sizing: border-box;
    }

    button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

</head>
<body>
<div class="container mt-5">
    <h2>Ajouter  Ticket</h2>
    <form id="addTicketForm">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <div class="form-group">
    <label for="priority">Priority:</label>
    <select class="form-control" id="priority" name="priority" required>
        <?php
        // Generate options dynamically based on the range from 1 to 10
        for ($i = 1; $i <= 10; $i++) {
            echo "<option  value=\"$i\">$i</option>";
        }
        ?>
    </select>
</div>

        <div class="form-group">
            <label for="assignee">Assignee:</label>
            <!-- Populate this dropdown dynamically with users from the database using Ajax -->
            <select class="form-control" id="assignee" name="assignee" required>
                <!-- Options will be filled dynamically -->
            </select>
        </div>
        <div class="form-group">
            <label for="assignee">Tag:</label>
            <!-- Populate this dropdown dynamically with users from the database using Ajax -->
            <select class="form-control" id="assignee" name="tag" required>
                <!-- Options will be filled dynamically -->
            </select>
        </div>
        <button type="button" class="btn btn-primary" onclick="addTicket()">Add Ticket</button>
    </form>
</div>

<!-- Add Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Add your custom JavaScript file for Ajax calls -->
<script src="custom.js"></script>

</body>
</html>
