<?php
    // Include connect.php to establish database connection
    include 'connect.php';
    $id = $_GET['updateid'];
    $sql = "select * from `positive_people` where id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $name = $row['name']; 
    $age = $row['age'];
    $sex = $row['sex'];
    $interests = $row['interests'];

    // Check if form is submitted
    if(isset($_POST['generate-compliment'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $interests = $_POST['interests'];
    
        // Insert data into database
        $sql = "update `positive_people` set id='$id', name='$name', age=$age, sex='$sex', interests='$interests'
        where id = $id";
        $result = mysqli_query($con, $sql);

        // Check if data is inserted successfully
        if($result){
            header('location:display.php');
            // echo "Updated successfully";
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

        label, select {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
            font-weight: bold;
            width: 100%;
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
            <input type="text" id="id" name="id" value="<?php echo $id;?>" required>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name;?>" required>

            <label for="sex">Sex:</label>
            <!-- <input type="text" id="sex" name="sex"> -->
            <select style="font-weight:normal;" id="sex" name="sex" value="<?php echo $sex;?>">
                <option value="male">Male</option>
                <option value="female">female</option>
                <option value="others">others</option>
            </select>

            <label for="age">Age:</label>
            <input type="text" id="age" name="age" value="<?php echo $age;?>" required>

            <label for="interests">Interests:</label>
            <textarea id="interests" name="interests" value="<?php echo $interests;?>" required></textarea>

            <!-- Generate Compliment button -->
            <button class="generate-compliment" name="generate-compliment">Update</button>
			<br><br>
            <a href="home.php" style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">Go Back</a>
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
<!-- <button class="create-new" name="create-new">Create new</button>
<button class="update-credentials" name="update-credentials">Update credentials</button>
<button class="delete-credentials" name="delete-credentials">Delete credentials</button>
<br><br> -->
</html>
   
