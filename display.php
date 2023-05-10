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
    <!-- Create new button -->
    <button class="create-new" name="create-new">Create new</button>

    <!-- Update credentials button -->
    <button class="update-credentials" name="update-credentials">Update credentials</button>

    <!-- Delete credentials button -->
    <button class="delete-credentials" name="delete-credentials">Delete credentials</button><br><br>

    <!-- Exit button -->
    <button class="exit" name="exit" onclick="exit()">Exit</button>
</body>
<html>
