<?php
  $title = "Bayot Ko 💅";
  $tagline = "Fierce. Fabulous. Fearless.";
  $emoji = "👑💅🌈";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #ff5ac8, #8a2be2, #00cfff);
      font-family: 'Segoe UI', sans-serif;
      color: white;
      text-align: center;
      height: 100vh;
    }

    .container {
      padding-top: 10%;
      animation: glow 2s infinite alternate;
    }

    h1 {
      font-size: 4rem;
      margin: 0;
      text-shadow: 2px 2px 8px #000;
    }

    p {
      font-size: 1.5rem;
      margin-top: 0.5rem;
      color: #fff9f9;
    }

    .emoji {
      font-size: 3rem;
      margin-top: 1rem;
      animation: bounce 1.5s infinite;
    }

    @keyframes glow {
      0% { text-shadow: 0 0 10px #ff00cc, 0 0 20px #ff00cc; }
      100% { text-shadow: 0 0 20px #00ffee, 0 0 30px #00ffee; }
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    footer {
      position: absolute;
      bottom: 20px;
      width: 100%;
      font-size: 1rem;
      color: #f5f5f5;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1><?php echo $title; ?></h1>
    <p><?php echo $tagline; ?></p>
    <div class="emoji"><?php echo $emoji; ?></div>
  </div>

  <footer>
    Made with 💖 by Rae & ChatGPT
  </footer>
</body>
</html>
