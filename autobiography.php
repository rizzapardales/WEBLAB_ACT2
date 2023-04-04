<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <?php
        include("navbar.php");
    ?>
    <div class="main-container">
        <div class="box">
            <div class="navlogo">
                <a href="#" class="logo">Auto.Biography</a>
            </div>

            <div class="contains">
                <div class="section-1">
                    <h1>Hi, I'am Rizza</h1>
                    <h3>BSIT 1-1</h3>
                    <p>This is my Activity No. 1 in Web System Subject, which contains information about myself.</p>
                    <a href="#btn" class="btn">My Autobiography</a>
                </div>

                <div class="section-2">
                <img src="img/bg4.png" alt="">
                </div>
                </div>
                </div>
             </div>

             
             <div class="info">
             <div class="btn" id="btn"></div>
                    <h3 class="heading">ABOUT ME</h3>
                    <div class="container">
                        <div class="card">
                            <div class="card-1">
                            <div class="image"><img src="img/rizza1.jpg" alt=""></div>
                            <p>My name is Rizza Mae R. Pardales, I'm 19 years old and
                            I grew up in Pandacan, Manila. I love music and my favorite
                            band is munimuni, and this band is my safe place. I shuddered
                            when someone had the same musical taste as mine. I loves cats
                            and prefers to adapt stray cats instead of buying imported ones
                            because the cats that are sold in pet shops are in good hands with
                            the owner of the shop and someone will buy them, unlike stray
                            cats, some of them are getting harmed on the street and no one is
                            taking care of them.

                            Little things makes me happy, when you remember a little
                            thing about me, it makes me happy, listening to my favorite bands makes me happy, random
                            compliments make me happy, foods make me happy, bonding with friends and family makes me
                            happy. It’s easy to make myself happy.
                            My hobbies are watching Japanese movies, playing with my cat, and listening to music.
                            I became a fan of Japanese movies when I was scrolling on tiktok and I saw one of the
                            scenes of a Japanese movie titled Marmalde Boy. The scene was the girl was lying on the bed
                            when the boy came to the clinic. Suddenly, the girl pretended to be asleep. Then the boy kissed
                            her on her lips. The girl was shocked and still pretended to be asleep. I felt butterflies in my
                            stomach at that scene, so I was curious about the movie and wanted to watch it. Then, after
                            that, I enjoyed the movie and started watching Japanese movies. After watching a lot of
                            Japanese movies, I felt in love with the culture of Japan and someday I hoped to travel to
                            Japan. Watching Japanese movies is my stress reliever.
                            Also one of my hobbies is playing with my cat. When I feel drained in school, my cat
                            is my energizer. I loves cat so much that I can’t live without one. And lastly is listening to
                            music. I can’t go outside without my earphones. I love to listen to music wherever I
                            goes. Even in doing my homework, I listens to music for to be productive.
                            My talent is digital sketching. I just discovered it when the quarantine started. Out of
                            boredom, I tried to draw and discovered that I have a skill in drawing. I drew different
                            people my friends, family, and idols. I made an art account on Instagram for me to post my
                            artwork.
                            </p>
                        </div>
                        </div>
                    </div>

                    <h3 class="heading-1">CONTACT INFORMATION</h3>
                    <div class="contact-info">
                        <div class="contact-card">
                        <i class="fa-solid fa-phone"></i>
                        <p>+63 9770622257</p>
                        </div>

                        <div class="contact-card">
                        <i class="fa-solid fa-envelope"></i>
                        <p>rizzamaepardales@gmail.com</p>
                        </div>

                        <div class="contact-card">
                        <i class="fa-brands fa-square-facebook"></i>
                        <p>rizzamaepardalesfb.com</p>
                        </div>
                    </div>
             </div>

                                
             <footer>
                    <div class="footer__copyright">
                    <center><h6>Copyright &copy; 2023. Designed by <em>Pardales, Rizza Mae R.</em></h6></center>
                    </div>
                    </footer>

        <script>
            ScrollReveal({ 
            //common reveal options to create reveal animations
            reset: false, /*para umulit ulit yung animation sa bawat pagscroll*/
            distance: '60px',
            duration: 2500, /*yung bilis ng paganimate/pagappear ng text*/
            delay: 400
        });

        ScrollReveal().reveal('.section-1', { delay: 300, origin: 'left' });
        ScrollReveal().reveal('.logo', { delay: 300, origin: 'right' });  
        ScrollReveal().reveal('.section-2', { delay: 300, origin: 'bottom' });
        ScrollReveal().reveal('.heading', { delay: 300, origin: 'bottom' });
        ScrollReveal().reveal('.card', { delay: 300, origin: 'right' });
        ScrollReveal().reveal('.card-1', { delay: 300, origin: 'left' });
        ScrollReveal().reveal('.image', { delay: 300, origin: 'bottom' });
        ScrollReveal().reveal('.heading-1', { delay: 300, origin: 'top' });
        ScrollReveal().reveal('.contact-info', { delay: 300, origin: 'bottom' });
        </script>
    
</body>
</html>