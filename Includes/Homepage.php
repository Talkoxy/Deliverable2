<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <div class="navbar">


        <ul class="Links">
    
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Content.php">Content</a></li>
            <li><a href="logout.inc.php">logout</a></li>

        </ul>
 
        <div class="toggle_btn">
            <i class="fa-solid fa-sliders"></i>
        </div>

        <div class="dropdown_menu "> 
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Content.php">Content</a></li>
            <li><a href="logout.inc.php">logout</a></li>
        </div>

        <script>
            const toggleBtn=document.querySelector('.toggle_btn')
            const toggleBtnIcon=document.querySelector('.toggle_btn i')
            const DropDownMenu=document.querySelector('.dropdown_menu')


            toggleBtn.onclick = function() {
                DropDownMenu.classList.toggle('open')
                const isOpen = DropDownMenu.classList.contains('open')


                toggleBtnIcon.classList=isOpen
                ? 'fa-solid fa-xmark'
                :'fa-solid fa-sliders'

            } 
            
        </script>
    </div>

    <script src="JScript.js">

         
    </script>

    <section id="hero">

        <div id="hero-text">
            <h2>" So won't you bear witness while I bare feet
                So you can walk in my shoes <h2>
            <h3> and get to know me " ,  quoted from Kendrick Lamar AKA Kdot</h3>
            <h4> Welcome to Russell Mlanga's Website for more information visit the About page</h4>
            <h5>Thank you for the continued support.</h5>

            
        </div>


    </section>
</body>
</html>