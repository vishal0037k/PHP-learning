<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="favicon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfcoTwHrfGAUBiFJv5FedKRwdXpd8mkStN-Q&s">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple page</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .main-div {
            margin: 20px auto;
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        .box {
            height: 300px;
            width: 300px;
            border: 2px solid black;
            margin: 20px auto;
        }

        .box img {
            padding: 10px;
            height: 100%;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: red;
            margin: 20px auto;
        }

        /* NAVBAR STYLING  */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 0.75rem 1rem;
            color: #fff;
            position: sticky;
            top: 0px;
        }

        .logo img {
            height: 100px;
            width: 300px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1rem;
        }

        .nav-links li a {
            color: #fff;
            text-decoration: none;
            padding: 8px 12px;
            transition: background 0.3s;
        }

        .nav-links li a:hover {
            background: #555;
            border-radius: 4px;
        }

        /* Hamburger for mobile */
        .hamburger {
            display: none;
            font-size: 1.8rem;
            cursor: pointer;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                position: absolute;
                top: 60px;
                right: 0;
                background: #333;
                width: 100%;
                flex-direction: column;
                align-items: center;
                display: none;
            }

            #menu-toggle:checked+.hamburger+.nav-links {
                display: flex;
            }

            .hamburger {
                display: block;
            }
        }

        #menu-toggle {
            display: none;
        }
    </style>
</head>

<body>
    <!-- make a variable of a box and print it multiple times  -->
    <?php
    $navbar = "
<nav class='navbar'>
  <div class='logo'>
  <img src = 'https://graphicdesigneye.com/images/automobile-logo-design-service.png' alt = 'logo'></img>
  </div>
  <input type='checkbox' id='menu-toggle' />
  <label for='menu-toggle' class='hamburger'>&#9776;</label>

  <ul class='nav-links'>
    <li><a href='#'>Home</a></li>
    <li><a href='#'>About</a></li>
    <li><a href='#'>Contact</a></li>
  </ul>
</nav>
";

    $box_1 = "
    <div class = 'main-div'> 
     <div class= 'box'>
     <img src = 'https://www.hondacarindia.com/_next/image?url=https%3A%2F%2Fwww.hondacarindia.com%2Fweb-data%2Fhome%2Fbanner%2FcarModel%2Fall-new-Amaze-banner-mobile_new1.jpg&w=3840&q=75' alt = 'Html'></img>
     </div>
     <div class= 'box'>
      <img src = 'https://m.media-amazon.com/images/I/81uVQ3ZZwqL._AC_UF350,350_QL80_.jpg' alt = 'Html'></img></div>
     <div class= 'box'>
      <img src = 'https://rukminim1.flixcart.com/image/300/300/xif0q/poster/t/i/w/medium-bmw-m2-poster-a3-size-42-x-29-cm-bmw-poster-for-wall-original-imah2mykwkpvtbwp.jpeg' alt = 'Html'></img></div>
    </div>
    ";
    ?>

    <?php
    print $navbar;
    print "<h1>let's print these boxes div multiple times jst like components.</h1>";
    echo "<br/>";
    print $box_1;
    print $box_1;

    print "<hr>";
    echo "<br/>";
?>


 <!-- let's add dynamic styling  --> 
<?php
$h3_color = "green";
print "<p style = 'text-align: center;'>ADD DYNAMIC STYLING IN THE HEADINGS";  
echo "<br/>"; echo "<br/>";
?>
<h3 style="color:<?php echo $h3_color;?>">This is first H 3</h3>
<h3 style="color:<?php echo $h3_color;?>">This is second H 3</h3>
<h3 style="color:<?php echo $h3_color;?>">This is third H 3</h3>

<?php
print "<hr>";
echo "<br/>";
?>
</body>

</html>