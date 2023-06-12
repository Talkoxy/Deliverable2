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
            <li class="cart"> <a href="cart.php">
            <ion-icon name="cart-outline">Cart</ion-icon><span>0</span>
            </a>
            </li>
        </ul>
 
        <div class="toggle_btn">
            <i class="fa-solid fa-sliders"></i>
        </div>

        <div class="dropdown_menu "> 
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Content.php">Content</a></li>
            <li class="cart"><a href="cart.php">
            <ion-icon name="cart-outline"></ion-icon><span>0</span>
            </a>
            </li>
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
    <section class="container">

            <div class="piece1">
                <div class="image paint5"></div>
                <h2>Now you dont</h2>
                <h4>R200</h4>
                <a class="subtncart cart1" href="#" >Add to</a>
                
            </div>

            <div class="piece1">
                <div class="image paint4">
                </div>
                <h2>Now you SEE</h2>
                <h4>R200</h4>
                <button type="submit" class="subtncart" name="add" >Add to cart</button>
            

            </div>

            <div class="piece1">
                <div class="image paint1"></div>
                <h2>A Happy Place</h2>
                <h4>R200</h4>
                <button type="submit" class="subtncart" name="add" >Add to cart</button>
            

            </div>

            <div class="piece1">
                <div class="image paint2"></div>
                <h2>From Space</h2>
                <h4>R200</h4>
                <button type="submit" class="subtncart" name="add" >Add to cart</button>
            

            </div>

            <div class="piece1">
                <div class="image paint3"></div>
                <h2>Natural Resource</h2>
                <h4>R200</h4>
                <button type="submit" class="subtncart" name="add" >Add to cart</button>
                
            

            </div>

            <div class="piece1">
                <div class="image paint6"></div>
                <h2>To have a voice</h2>
                <h4>R200</h4>
                <button type="submit" class="subtncart" name="add" href="#">Add to cart</button>
                 

            </div>
        
    </section>
    <script src ="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    
</body>
</html>
