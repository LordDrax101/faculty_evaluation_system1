<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Evaluation Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(https://i.ytimg.com/vi/s3QbuK_1JfU/maxresdefault.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color:black
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 0;
            text-align: center;
            color: black
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 0;
            text-align: center;
            color: black
        }
    </style>
</head>

<body>
    <div class="center">
        <form class="bg-dark p-4 rounded" action="submit_evaluation.php" method="post">
            <h2 class="text-white mb-4">Faculty Evaluation Form</h2>
            <div class="form-group">
                <label for="faculty_name" class="text-white">Faculty Name:</label>
                <input type="text" class="form-control" id="faculty_name" name="faculty_name" required>
            </div>
            <div class="form-group">
                <label for="teaching_skills" class="text-white">Teaching Skills (1-10):</label>
                <input type="number" class="form-control" id="teaching_skills" name="teaching_skills" min="1" max="10"
                    required>
            </div>
            <div class="form-group">
                <label for="communication" class="text-white">Communication (1-10):</label>
                <input type="number" class="form-control" id="communication" name="communication" min="1" max="10"
                    required>
            </div>
            <div class="form-group">
                <label for="knowledge" class="text-white">Subject Knowledge (1-10):</label>
                <input type="number" class="form-control" id="knowledge" name="knowledge" min="1" max="10" required>
            </div>
            <div class="form-group">
                <label for="feedback" class="text-white">Feedback:</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="4" cols="50"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <footer class="bg-dark">
        <div class="container">
            <p class="text-white">&copy; 2024 Faculty Evaluation Form | All rights reserved.</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>

</html>