<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="<?= base_url()?>/assets/css/materialize.min.css"  media="screen,projection"/>
     <!--CSS-->
     <link rel="stylesheet" href="style.css">

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>Jekstore</title>
   </head>

   <body id = "home" class="scrollspy">
           <div class="navbar-fixed">
                   <nav class="red darken-2">
                     <div class="container">
                     <div class="nav-wrapper">
                       <a href="#home" class="brand-logo center">JEKSTORE</a>
                       <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                       <ul class="left hide-on-med-and-down">
                         <li><a href="#store">Store</a></li>
                         <li><a href="#clients" >Subscriptions</a></li>
                         <li><a href="#services" >About</a></li>



                       </ul>
                       <ul class="right hide-on-med-and-down">
                           <li>
                           <div class="center row">
                               <div class="col s12 " >
                                 <div class="row" id="topbarsearch">
                                   <div class="input-field col s6 s12 white-text">
                                     <i class="white-text material-icons prefix">search</i>
                                     <input type="text" placeholder="search the store" id="autocomplete-input" class="autocomplete white-text" >
                                     </div>
                                   </div>
                                 </div>
                               </div>
                           </li>
                           <li><a href="<?= site_url()?>C_Login"><i class="material-icons left">account_circle</i>SIGN IN</a> </li>
                           <li><a href="<?= site_url()?>C_Register">SIGN UP</a> </li>
                       </ul>
                     </div>
                   </div>
                   </nav>
                 </div>
           <ul class="sidenav" id="mobile-nav">
               <li><a href="#store">Store</a></li>
             <li><a href="#clients" >Subscriptions</a></li>
             <li><a href="#services" >About</a></li>

                   <li>
                       <div class="center row">
                           <div class="col s12 " >
                             <div class="row" id="topbarsearch">
                               <div class="input-field col s6 s12 white-text">
                                 <i class="black-text material-icons prefix">search </i>
                                 <input type="text" placeholder="search the store" id="autocomplete-input" class="autocomplete grey-text" >
                                 </div>
                               </div>
                             </div>
                           </div>
                       </li>
                       <li><a href="#"><i class="material-icons left">account_circle</i>LOG IN</a> </li>
                       <li><a href="<?= site_url()?>C_Register">SIGN UP</a> </li>
           </ul>
           <div class="slider">
             <ul class="slides">
               <li>
                 <img src="<?= site_url()?>/assets/img/game/1.jpg"> <!-- random image -->
                 <div class="caption left-align">
                   <h3>Battlefield V</h3>
                   <h5 class="light grey-text text-lighten-3">Rp 370 000</h5>
                 </div>
               </li  >
               <li>
                 <img src="<?= site_url()?>/assets/img/game/slogan.jpg"> <!-- random image -->
                 <div class="caption left-align">
                   <h3>PLAYERUNKNOWN'S BATTLEGROUNDS</h3>
                   <h5 class="light grey-text text-lighten-3">Rp 219 999</h5>
                 </div>
               </li>
               <li>
                 <img src="<?= site_url()?>/assets/img/game/fifa.jpg"> <!-- random image -->
                 <div class="caption left-align">
                   <h3>FIFA 19</h3>
                   <h5 class="light grey-text text-lighten-3">Rp 450 000</h5>
                 </div>
               </li>
               </ul>
               </div>
                     <section id="store" class="about scrollspy">
                         <h3 class="light center grey-text text-darken-3 ">Store</h3>
                       <div class="container">
                         <div class="row">
                             <div class="col m4 ">
                                 <div class="card small">
                                     <div class="card-image">
                                         <img src="<?= site_url()?>/assets/img/game/1.jpg">
                                     </div>
                                     <div class="card-content">
                                     <p>Battlefield V</p>
                                     </div>
                                     <div class="card-action">
                                     <a class="btn waves-effect waves-light red darken-2">Rp 370 000</a>
                                     </div>

                                       </div>
                         </div>
                         <div class="col m4">
                             <div class="card small">
                                 <div class="card-image">
                                     <img src="<?= site_url()?>/assets/img/game/2.jpg">
                                 </div>
                                 <div class="card-content">
                                 <p> PLAYERUNKNOWN'S BATTLEGROUNDS</p>
                                 </div>
                                 <div class="card-action">
                                 <a class="btn waves-effect waves-light red darken-2" href="<?= site_url()?>C_Game">Rp 219 999</a>
                                 </div>

                                   </div>
                     </div>
                     <div class="col m4">
                         <div class="card small">
                             <div class="card-image">
                                 <img src="<?= site_url()?>/assets/img/game/3.jpg">
                             </div>
                             <div class="card-content">
                             <p>Football Manager 2019</p>
                             </div>
                             <div class="card-action">
                             <a class="btn waves-effect waves-light red darken-2">Rp 420 000</a>
                             </div>

                               </div>
                 </div>
                 <div class="col m4">
                     <div class="card small">
                         <div class="card-image">
                             <img src="<?= site_url()?>/assets/img/game/4.jpg">
                         </div>
                         <div class="card-content">
                         <p>FIFA 19</p>
                         </div>
                         <div class="card-action">
                         <a class="btn waves-effect waves-light red darken-2">Rp 450 000</a>
                         </div>

                           </div>
             </div>
             <div class="col m4">
                 <div class="card small">
                     <div class="card-image">
                         <img src="<?= site_url()?>/assets/img/game/5.jpg">
                     </div>
                     <div class="card-content">
                     <p>Tropico 6</p>
                     </div>
                     <div class="card-action">
                     <a class="btn waves-effect waves-light red darken-2">Rp 209 000</a>
                     </div>

                       </div>
           </div>
           <div class="col m4">
               <div class="card small">
                   <div class="card-image">
                       <img src="<?= site_url()?>/assets/img/game/6.jpeg">
                   </div>
                   <div class="card-content">
                   <p>Tom Clancy's Rainbow Six® Siege</p>
                   </div>
                   <div class="card-action">
                   <a class="btn waves-effect waves-light red darken-2">Rp 229 000</a>
                   </div>

                     </div>
           </div>
             </div>
            </div>
          </section>
          <div class="parallax-container scrollspy" id="clients">
           <div class="parallax"><img src="<?= site_url()?>/assets/img/game/BFV.jpg"></div>
           <div class="container clients ">
             <h3 class="center light white-text">Subscriptions Monthly</h3>
             <div class="row">

                 <table class="striped">
                     <thead>
                       <tr>
                           <th>Jekstore Monthly</th>
                           <th>Basic</th>
                           <th>Premier</th>
                       </tr>
                     </thead>

                     <tbody>
                       <tr>
                         <td>Jumlah Game</td>
                         <td>10 Games</td>
                         <td>Unlimited</td>
                       </tr>
                       <tr>
                         <td>DLC</td>
                         <td> <i class="material-icons">block</i></td>
                         <td> <i class="material-icons">check</i></td>
                       </tr>
                       <tr>
                         <td>Early Access</td>
                         <td>12 Hours</td>
                         <td>Full Game</td>
                       </tr>
                       <tr>
                         <td></td>
                         <td><a class="btn waves-effect waves-light red darken-2">Subscribe for Rp 170 000/ Month</a></td>
                         <td><a class="btn waves-effect waves-light red darken-2">Subscribe for Rp 500 000/ Month</a></td>
                       </tr>
                     </tbody>
                   </table>

           </div>
         </div>
         </div>
         <section id="about" class="about scrollspy">
             <div class="container">
               <div class="row">
                 <h3 class="center light grey-text text-darken-3">About Us</h3>
                 <div class="col m6 light">
                   <h5>What is Jekstore ?</h5>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                 </div>
                 <div class="col m6 light">
                     <h5>Join the Community</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   </div>
                </div>
                 </div>
               </div>
             </div>
           </section>
           <section id="services" class="services grey lighten-3 scrollspy">
               <div class="container">
                 <div class="row">
                   <h3 class="light center grey-text-darken-3">Our Services</h3>

                   <div class="col m6 ">
                     <div class="card-panel center">
                       <i class="material-icons">games</i>
                       <h5>Jekstore </h5>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                     </div>
                   </div>
                   <div class="col m6">
                       <div class="card-panel center">
                         <i class="material-icons">event</i>
                         <h5>Jekstore Monthly</h5>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                       </div>
                     </div>
                 </div>
               </div>
             </section>

         <footer class="red darken-2 white-text center">
           <p >&copy; jekstore.co.id </p>
         </footer>

     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="<?= base_url()?>/assets/js/materialize.min.js"></script>
     <script>
         const sideNav = document.querySelectorAll('.sidenav');
         M.Sidenav.init(sideNav);
         const slider = document.querySelectorAll('.slider');
         M.Slider.init(slider,{
           indicators : false,
           height : 500,
           transtition : 600,
           interval : 3000
         });
         const parallax = document.querySelectorAll('.parallax');
         M.Parallax.init(parallax);
         const materialbox = document.querySelectorAll('.materialboxed');
         M.Materialbox.init(materialbox);
         const scroll = document.querySelectorAll('.scrollspy');
         M.ScrollSpy.init(scroll,{
           scrollOffset : 50
         });
     </script>
   </body>
 </html>
