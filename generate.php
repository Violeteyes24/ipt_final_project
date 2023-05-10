<!DOCTYPE html>
<html>
<head>
    <title>Complimentr TTS</title>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=Rewnwvj7"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background-image: url(https://wallpapertag.com/wallpaper/full/e/4/a/459515-beautiful-spring-flowers-background-desktop-2560x1600-mobile.jpg);
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        h1 {
            font-size: 4rem;
            color: #FFD700;
            text-align: center;
            animation-name: slide-in;
            animation-duration: 1s;
            animation-fill-mode: both;
        }
        @keyframes slide-in {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        .image {
            margin-top: 2rem;
            animation-name: fade-in;
            animation-duration: 2s;
            animation-delay: 1s;
            animation-fill-mode: both;
        }
        @keyframes fade-in {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Make an HTTP request to the Complimentr API endpoint
        $compliment_url = 'https://complimentr.com/api';
        $compliment_response = file_get_contents($compliment_url);

        // If the request was successful, decode the JSON response into a PHP array
        if ($compliment_response !== false) {
            $compliment = json_decode($compliment_response, true)['compliment'];

            // Make an HTTP request to the Random Color API endpoint
            $color_url = 'https://www.colr.org/json/color/random';
            $color_response = file_get_contents($color_url);

            // If the request was successful, decode the JSON response into a PHP array
            if ($color_response !== false) {
                $color = '#' . json_decode($color_response, true)['new_color'];

                // Output the compliment and set the background color
                echo '<div style="background-color: ' . $color . '; padding: 20px;">';
                echo '<h1 style="color: white;">' . $compliment . '</h1>';
                echo '</div>';

                // Use ResponsiveVoice to speak the compliment
                echo '<script>responsiveVoice.speak("' . $compliment . '");</script>';
            } else {
                // Handle any errors that occurred during the request to the Random Color API
                echo '<p>Error: Unable to retrieve color.</p>';
            }
        } else {
            // Handle any errors that occurred during the request to the Complimentr API
            echo '<p>Error: Unable to retrieve compliment.</p>';
        }
        ?>
<br><br>
<a href="display.php" style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">Go Back</a>
    </div>
</body>
</html>