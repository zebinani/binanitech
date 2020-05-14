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
            <section class="container-fluid header">
           
                <div class="container entete">
                    <div class="row">
                            
                            <i class="fab fa-whatsapp-square"></i>
                            <div class="col"><i class="fa fa-phone-square" aria-hidden="true">+221773579551</i></div>
                            <div class="col"><i class="fa fa-envelope-open-o" aria-hidden="true">:masellouddiallo@gmail.com</i>
                            </div>
                            <div class="col"><a href="https://web.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            
                                
                            </div>                            
                    </div> 
                    
                </div>
              
                
                <div class="navbar-menu ">
                    <img src="{{asset('images/logo.png')}}" alt="logo" width="15%"> 
                    
                    
                        <nav class="menu">
                            <a href="/index">Accueil</a>
                            <a href="/Boutique">Galerie</a>
                            <a href="/contact">Contacts</a> 
                            <a href="/login">Login</a> 
                            <a href="/register">S'inscrire</a> 
                        </nav>

                </div>
               
                
               
               

            </section>
            <br>
            <br><br>
            
            <div class="container">
            <br><br>
            @yield('pag_index')
            @yield('login')
            @yield('register')


        </div>
    </div>  
    <footer class="container-fluid footer">
        <div class="container ">
            <div class="row justify-content-center fixed-bottom">
                    Copyright-2020 @:Tous les droits sont reserves à BINANITECH
            </div>

        </div>
        

    </footer>

</body>
</html>