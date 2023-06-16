<?php
/**
 * This code is used to view the client-side web project uploaded in Google Drive.
 */
$keywordMapping = array(
    'about' => '1saj-9H1JZCzhQtnSNMTZT9t_rpIbFcnn',
    'brainJs' => '1saj-9H1JZCzhQtnSNMTZT9t_rpIbFcnn',
    'w3ai' => '1eD1XL64Hr0Agx8S9CJrMGZghJd0cAzAc',
    // Add more keyword-to-fileID mappings as needed
);

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    if (isset($keywordMapping[$keyword])) {
        $id = $keywordMapping[$keyword];
        echo file_get_contents('https://drive.google.com/u/4/uc?id=' . $id . '&export=download');
    } else {
        echo '<!DOCTYPE html>
        <html lang="en" >
        <head>
          <meta charset="UTF-8">
          <title>Error 404: Page not found</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        
        </head>
        <body>
        <!-- partial:index.partial.html -->
        <div class="noise"></div>
        <div class="overlay"></div>
        <div class="terminal">
          <h1>Error <span class="errorcode">404</span></h1>
          <p class="output">The page you are looking for might have been removed, had its name changed or is temporarily unavailable.</p>
          <p class="output">Please try to <a href="#1">go back</a> or <a href="#2">return to the homepage</a>.</p>
          <p class="output">Good luck.</p>
        </div>
        <!-- partial -->
          <style>
        html {
          min-height: 100%;
        }
        
        body {
          box-sizing: border-box;
          height: 100%;
          background-color: #000000;
          background-image: radial-gradient(#11581E, #041607), url("https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif");
          background-repeat: no-repeat;
          background-size: cover;
          font-family: "Inconsolata", Helvetica, sans-serif;
          font-size: 1.5rem;
          color: rgba(128, 255, 128, 0.8);
          text-shadow: 0 0 1ex #33ff33, 0 0 2px rgba(255, 255, 255, 0.8);
        }
        
        .noise {
          pointer-events: none;
          position: absolute;
          width: 100%;
          height: 100%;
          background-image: url("https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif");
          background-repeat: no-repeat;
          background-size: cover;
          z-index: -1;
          opacity: 0.02;
        }
        
        .overlay {
          pointer-events: none;
          position: absolute;
          width: 100%;
          height: 100%;
          background: repeating-linear-gradient(180deg, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0) 100%);
          background-size: auto 4px;
          z-index: 1;
        }
        
        .overlay::before {
          content: "";
          pointer-events: none;
          position: absolute;
          display: block;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          width: 100%;
          height: 100%;
          background-image: linear-gradient(0deg, transparent 0%, rgba(32, 128, 32, 0.2) 2%, rgba(32, 128, 32, 0.8) 3%, rgba(32, 128, 32, 0.2) 3%, transparent 100%);
          background-repeat: no-repeat;
          -webkit-animation: scan 7.5s linear 0s infinite;
                  animation: scan 7.5s linear 0s infinite;
        }
        
        @-webkit-keyframes scan {
          0% {
            background-position: 0 -100vh;
          }
          35%, 100% {
            background-position: 0 100vh;
          }
        }
        
        @keyframes scan {
          0% {
            background-position: 0 -100vh;
          }
          35%, 100% {
            background-position: 0 100vh;
          }
        }
        .terminal {
          box-sizing: inherit;
          position: absolute;
          height: 100%;
          width: 1000px;
          max-width: 100%;
          padding: 4rem;
          text-transform: uppercase;
        }
        
        .output {
          color: rgba(128, 255, 128, 0.8);
          text-shadow: 0 0 1px rgba(51, 255, 51, 0.4), 0 0 2px rgba(255, 255, 255, 0.8);
        }
        
        .output::before {
          content: "> ";
        }
        a {
          color: #fff;
          text-decoration: none;
        }
        
        a::before {
          content: "[";
        }
        
        a::after {
          content: "]";
        }
        
        .errorcode {
          color: white;
        }
          </style>
          
        </body>
        </html>
        ';
    }
} 
 
else {
    echo '<!DOCTYPE html>
<html>

<head>
    <title>Drive2WEB - Home</title>
    <style>
        /* CSS for the navigation bar */
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        ul.navbar li {
            float: left;
        }

        ul.navbar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.navbar li a:hover {
            background-color: #111;
        }
    </style>
</head>

<body>
    <ul class="navbar">
        <li><a href="?keyword=home">Home</a></li>
        <li><a href="?keyword=about">About</a></li>
        <li><a href="?keyword=services">Services</a></li>
        <li><a href="?keyword=contact">Contact</a></li>
    </ul>
    <br/><br/>
    <form action="" method="get">
        <input type="text" placeholder="Enter Keyword" name="keyword">
        <button type="submit">View</button>
    </form>
    <style>
        input,
        button {
            background: aqua;
            font-size: 25px;
            border: none;
            outline: none;
            padding: 4px;
        }
    </style>

    <div id="home">
        <h2>Home</h2>
        <p>This is the home section of the webpage.</p>
    </div>

    <div id="about">
        <h2>About</h2>
        <p>This is the about section of the webpage.</p>
    </div>

    <div id="services">
        <h2>Services</h2>
        <p>This is the services section of the webpage.</p>
    </div>

    <div id="contact">
        <h2>Contact</h2>
        <p>This is the contact section of the webpage.</p>
    </div>
</body>

</html>';
}

// http://localhost:3000/index2.php?keyword=brainJs
// http://localhost:3000/?keyword=brainJs

?>