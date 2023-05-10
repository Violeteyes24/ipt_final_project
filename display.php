<?php 
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, intital-scale=1.0">
    <title>Crud Operation</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: darkgrey;
            background-image: url(https://wallpapercave.com/wp/wp2754074.jpg);
            width: 90%;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: white;
            font-style: italic;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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
            /*margin-top: 10%;*/
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
        .generate-compliment:hover, .create-new:hover, .update-credentials:hover, .delete-credentials:hover, .exit:hover{
            background-color: #333;
            color: #fff;
            margin: auto;
            width: auto;
            border: 2px 
            padding: 10px; 
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
        .CRUD, .c, .u, .d, .e{
            margin: auto;
            width: 100%;
            /*border: 3px solid green;*/
            padding: 10px; 
        }
        table {
            border-collapse: collapse;
            color: white;
            font-family: Arial, sans-serif;
            font-size: 14px;
            text-align: center;
            width: 100%;
        }
            
        th, td {
            border: 1px solid white;
            padding: 8px;
        }
            
        th {
            background-color: #4285f4;
        }
   
        tr:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <h1>Check your name, you are now listed! "Sorry sir na wala ag practicality dri"</h1>
<div class = "CRUD">
    <div class = "c">
        <!-- Create new button -->
        <button class="create-new" name="create-new"><a style="color:white; text-decoration: none;" href="user.php"> Create new</a></button>
        <br><br>
    </div>

    <div>
        <table style="border-collapse: collapse;">
            <thead>
                <tr>
                <th style="border: 1px solid black; padding: 8px;">id</th>
                <th style="border: 1px solid black; padding: 8px;">name</th>
                <th style="border: 1px solid black; padding: 8px;">sex</th>
                <th style="border: 1px solid black; padding: 8px;">age</th>
                <th style="border: 1px solid black; padding: 8px;">interests</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from `positive_people`";
                $result = mysqli_query($con, $sql);

                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        //extraction
                        $id = $row['id'];
                        $name = $row['name']; 
                        $age = $row['age'];
                        $sex = $row['sex'];
                        $interests = $row['interests'];
                        
                        echo '
                        <tr>
                        <td style="border: 1px solid black; padding: 8px;">'.$id.'</td>
                        <td style="border: 1px solid black; padding: 8px;">'.$name.'</td>
                        <td style="border: 1px solid black; padding: 8px;">'.$age.'</td>
                        <td style="border: 1px solid black; padding: 8px;">'.$sex.'</td>
                        <td style="border: 1px solid black; padding: 8px;">'.$interests.'</td>
                        <td style="border: 1px solid black; padding: 8px;">
                            <button class="update-credentials" name="update-credentials" style="width:20%;"><a style="color:white; text-decoration: none;" href="update.php?updateid='.$id.'">Update</a></button>
                            <button class="delete-credentials" name="delete-credentials" style="width:20%; background-color:red;"><a style="color:white; text-decoration: none;" href="delete.php?deleteid='.$id.'">Delete</a></button><br><br> 
                        </td>
                        </tr>';
                    }     
                }
                ?>
                
            </tbody>
        </table>
    </div>
    <div class = "e">
    <!-- Exit button -->
    <button class="exit" name="exit" onclick="exit()">Exit</button>
    <button class="delete-credentials" name="delete-credentials" style="width:20%; background-color:green;"><a style="color:white; text-decoration: none;" href="generate.php">Tell me a compliment</a></button>
    <a href="home.php" style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">Go Back</a>
    </div>    
</div>
    
</body>
<!-- <tr>
                <td style="border: 1px solid black; padding: 8px;">John</td>
                <td style="border: 1px solid black; padding: 8px;">25</td>
                <td style="border: 1px solid black; padding: 8px;">New York</td>
                <td style="border: 1px solid black; padding: 8px;">John</td>
                <td style="border: 1px solid black; padding: 8px;">25</td>
                </tr>
                <tr>
                <td style="border: 1px solid black; padding: 8px;">Jane</td>
                <td style="border: 1px solid black; padding: 8px;">30</td>
                <td style="border: 1px solid black; padding: 8px;">Los Angeles</td>
                <td style="border: 1px solid black; padding: 8px;">30</td>
                <td style="border: 1px solid black; padding: 8px;">Los Angeles</td>
                </tr>
                <tr>
                <td style="border: 1px solid black; padding: 8px;">Bob</td>
                <td style="border: 1px solid black; padding: 8px;">22</td>
                <td style="border: 1px solid black; padding: 8px;">Chicago</td>
                <td style="border: 1px solid black; padding: 8px;">22</td>
                <td style="border: 1px solid black; padding: 8px;">Chicago</td>
                </tr> -->

    <!-- <div class = "u">
    </div>
    <div class = "d">   
    </div> -->

</html>
