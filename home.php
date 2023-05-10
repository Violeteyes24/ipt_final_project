<!DOCTYPE html>
<html>
  <head>
    <title>Positive Compliment Generator</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        text-align: center;
        background-image: url(https://www.psdgraphics.com/file/2018/bright-light-rays-background.jpg);
      }
      h1 {
        font-size: 3rem;
        color: #333;
      }
      p {
        font-size: 1.5rem;
        color: #666;
      }
      a {
        text-decoration: none;
        color: #00bfff;
        font-weight: bold;
      }
      a:hover {
        color: #0099cc;
      }
      .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #00bfff;
        color: white;
        font-size: 1.2rem;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      .btn:hover {
        background-color: #0099cc;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Welcome to our Positive Compliment Generator</h1>
      <p>A wholesome place for those who feels they aren't enough.</p>
    </header>
    <main>
      <p>Things to do:</p>
      <a href="user.php" style="font-size:45px;">Fill up</a> |
      <a href="display.php" style="font-size:45px;">View People</a> |
    </main>
    <footer>
        <br><br><br><br><br><br>
        <button class="exit" name="exit" onclick="exit()">Exit</button>
        <script>
        function exit() {
		}
	</script>
    </footer>
  </body>
</html>
