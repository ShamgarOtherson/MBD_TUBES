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
           </ul>
