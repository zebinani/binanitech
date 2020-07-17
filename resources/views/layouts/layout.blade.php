<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   
    
        <link href="{{asset('css/app.css')}}" rel="stylesheet" />
          <link href="{{asset('css/all.css')}}" rel="stylesheet" />

    <title>Accueil</title>
</head>
<body>
    <div class="container">
        
        <header class=" hearder-main" >         
            <div class="container">
                <div class="row">

                    <div class="col"><i class="fa fa-phone-square" aria-hidden="true">+221773579551</i></div>
                    <div class="col"><i class="fa fa-phone-square" aria-hidden="true">+221770516002</i></div>

                    <div class="col"><i class="fa fa-envelope-open-o" aria-hidden="true">:masellouddiallo@gmail.com</i>
                    </div>
                    <div class="col"><a href="https://web.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> 
                    </div>                            
                </div> 

                <div class="row">
                    <div >
                    <img src="{{asset('images/logo.png')}}" alt="logo" width="15%"> 
                    </div> 
                </div>
            </div>
           
             </div>

            
        </header>
        <header class="sticky-top">         

            <div class="container">
                <nav class="navbar sticky-top navbar- bg-">
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                    <i class="fa fa-bars"></i>
                    </label> 
                    <label class="logo"> BinanitecH</label>
                    <ul>
                        <li > <a class="active" href="/accueil">Accueil</a></li>
                        <li> <a href="#">Galerie</a></li>
                        <li> <a href="/contact/create">Contacts</a></li>
                        <li> <a href="/login">Connexion</a></li>
                        <li> <a href="register">S'inscrire</a></li>

                    </ul>
                </nav>

            </div>
        </header>
       
        <main>
            <div class="container">
            @yield('pag_index')
            </div>
            <div class="container">
            @yield('pag_contact')
            </div>
            <div class="container">
            @yield('pag_contactliste')
            </div>


            @yield('login')

            <div class="container">
            @yield('register')
            </div>

        </main> 
        <footer>
            <div class="container">
            <p>Copyright 2020 © TOUS LES DROITS SONT RESERVES A BINANITECH</p>

            </div>
        </footer>

    </div> 
</body>

</html>