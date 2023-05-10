<?php
    // Include connect.php to establish database connection
    include 'connect.php';

    // Check if form is submitted
    if(isset($_POST['generate-compliment'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $interests = $_POST['interests'];
    
        // Insert data into database
        $sql = "INSERT INTO `positive_people` (id, name, age, sex, interests)
                VALUES ('$id','$name','$age','$sex','$interests')";
        $result = mysqli_query($con, $sql);

        // Check if data is inserted successfully
        if($result){
            echo "<div class='compliment'>Data inserted successfully</div>";
        }else{
            die(mysqli_error($con));
        }
    }

    // Close database connection
    mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Positive Compliment Generator</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: gray;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }

        .loading {
            text-align: center;
            margin-top: 50px;
            font-size: 24px;
            color: #666;
        }

        .compliment {
            text-align: center;
            margin-top: 50px;
            font-size: 36px;
            color: #333;
        }

        /* Styles for the buttons */
        button {
            background-color: #4285f4;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Styles for the hover effect */
        .generate-compliment:hover, .create-new:hover, .update-credentials:hover, .delete-credentials:hover, .exit:hover {
            background-color: #333;
            color: #fff;
        }

        /* Styles for the form */
        .form {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 50px auto;
            max-width: 500px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        </style>
</head>
<body>
    <div class="form">
        <form method="post">
            <h2>Fill in your details</h2>

            <label for="id">Id:</label>
            <input type="text" id="id" name="id" required>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="sex">Sex:</label>
            <input type="text" id="sex" name="sex"><br>

            <label for="age">Age:</label>
            <input type="text" id="age" name="age" required>

            <label for="interests">Interests:</label>
            <textarea id="interests" name="interests" required></textarea>

            <!-- Generate Compliment button -->
            <button class="generate-compliment" name="generate-compliment">Generate Compliment</button>
			<br><br>
            <!-- Create new button -->
            <button class="create-new" name="create-new">Create new</button>

            <!-- Update credentials button -->
            <button class="update-credentials" name="update-credentials">Update credentials</button>
			
            <!-- Delete credentials button -->
            <button class="delete-credentials" name="delete-credentials">Delete credentials</button>
			<br><br>
            <!-- Exit button -->
            <button class="exit" name="exit" onclick="exit()">Exit</button>
        </form>
    </div>

    <script>
        function exit() {
		}
	</script>
	</form>
</body>
</html>
   
