
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>My Portfolio website </title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Ronald</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Ronald</span><br> Web Designer</h1>

                    <a href="#" class="button">Contact</a>
                </div>

                <div class="home__social">
                    <a href="https://github.com/Ronaldrani21" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">    
                    <img src="Rani256.jpg" alt="">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="handsome.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am Ronald</h2>
                        <p class="about__text">I am a second year student of Bachelor of Science in Computer Science at Uganda Christian University-Mukono. Am familiar with a few programming languages which are C++ and java.My hobbies are traveling, making new friends, learning new things,and watching soccer.
                        
                        
                    </div>                                   
                </div>
            </section>

              <!--===== SKILLS =====-->
              <section class="skills section" id="skills">
               <h2 class="section-title">Skills</h2>

               <div class="skills__container bd-grid">          
                   <div>
                       <h2 class="skills__subtitle">Profesional Skills</h2>
                       <p class="skills__text">I possess the following skills;</p>
                       <div class="skills__data">
                           <div class="skills__names">
                               <i class='bx bxl-html5 skills__icon'></i>
                               <span class="skills__name">HTML5</span>
                           </div>
                           <div class="skills__bar skills__html">

                           </div>
                           <div>
                               <span class="skills__percentage">65%</span>
                           </div>
                       </div>
                       <div class="skills__data">
                           <div class="skills__names">
                               <i class='bx bxl-css3 skills__icon'></i>
                               <span class="skills__name">CSS3</span>
                           </div>
                           <div class="skills__bar skills__css">
                               
                           </div>
                           <div>
                               <span class="skills__percentage">55%</span>
                           </div>
                       </div>
                       <div class="skills__data">
                           <div class="skills__names">
                               <i class='bx bxl-javascript skills__icon' ></i>
                               <span class="skills__name">JAVA</span>
                           </div>
                           <div class="skills__bar skills__js">
                               
                           </div>
                           <div>
                               <span class="skills__percentage">75%</span>
                           </div>
                       </div>
                       <div class="skills__data">
                           <div class="skills__names">
                               <i class='bx bxs-paint skills__icon'></i>
                               <span class="skills__name">PHP</span>
                           </div>
                           <div class="skills__bar skills__php">
                               
                           </div>
                           <div>
                               <span class="skills__percentage">80%</span>
                           </div>
                       </div>
                   </div>
                   
                   <div>
               </section> 

                    
            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
               <h2 class="section-title">Contact</h2>

               <div class="contact__container bd-grid">
                   <form action="contact.php" method="POST">
                       <input type="text" placeholder="Name" name="name"class="contact__input" >
                       <input type="mail" placeholder="Email" name="email"class="contact__input">
                       <textarea name="message" id="" cols="0" rows="10"class="contact__input"></textarea>
                       <input type="submit" value="Send" name="send" >
                       <input type="submit" value="display" name="display">
                   </form>
               </div>
           </section>
       </main>

       <!--===== FOOTER =====-->
       <footer class="footer">
           <p class="footer__title">Ronald</p>
           <div class="footer__social">
               <a href="https://www.facebook.com/ampeire.ronald.7" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
               <a href="https://www.instagram.com/r_a_n_i_256/" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
               <a href="https://twitter.com/Ronaldrani21" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
           </div>
           <p>&#169; 2020 copyright all right reserved</p>
       </footer>

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

     </body>
     </html>

 
     
    
