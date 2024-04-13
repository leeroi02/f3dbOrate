<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Questions</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('3.png');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            height: 100vh;
        }

        .container {
            padding: 20px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .question-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            color: #555;
            font-size: 16px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Curious Key Pie Questions</h1>

    <?php
    include 'connect.php';
    $sql = "SELECT * FROM tblquestion";
    $result = mysqli_query($connection, $sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="question-container">';
            echo "<p>Question: " . $row["questionText"] . "</p>";
            echo '</div>';
        }
    } else {
        echo "<p>No questions found</p>";
    }

    $connection->close();
    ?>
</div>

</body>
</html>
