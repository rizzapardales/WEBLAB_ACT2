<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <?php
        include("navbar.php");
    ?>
    <head>
        <video class="video-bg" autoplay muted loop>
            <source src="img/vidbg.mp4">
        </video>

        <section class="section1-content">
            <h2>HELLO!</h2>
            <h1>WELCOME</h1>
            <h3>TO MY WEBSITE</h3>
        </section>

        <section class="section2-content">
            <p>This website contains all my activity in the subject Web System Lab.
            <br>During the progress of making this website, it challenged me and enhanced my skills in web development.
            </p>
        </section>
    </head>

    <script>
         ScrollReveal({ 
            //common reveal options to create reveal animations
            reset: true, /*para umulit ulit yung animation sa bawat pagscroll*/
            distance: '60px',
            duration: 2500, /*yung bilis ng paganimate/pagappear ng text*/
            delay: 400
        });

        ScrollReveal().reveal('.section1-content', {delay:300, origin:'left'});
        ScrollReveal().reveal('.section2-content', {delay:300, origin:'right'});
    </script>
</body>
</html>