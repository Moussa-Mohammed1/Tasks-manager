
<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
</head>
<body>
    <form action="add_task.php" method="POST">
        <input type="text" name="task">
        <button type="submit">Add
        </button> 
    </form>
    <style>
        body{
            padding: 2rem;
        }
        .delete{
            background:red;color: white;cursor: pointer;border: none;padding: 0.5em;border-radius: 10px;
        }
    </style>
    <h2>Taches récent :</h2>
    <ul>
        <?php 
            if (isset($_SESSION['tasks']) && count($_SESSION['tasks']) > 0) {
                foreach ($_SESSION['tasks'] as $task) {
                    echo "<li>";
                    echo $task;
                    echo "<a href='delete_task.php?task=$task'><button class='delete'>Supprimer</button></a>";
                    echo "</li>";
                }
            }
        ?>
    </ul>
</body>
</html>