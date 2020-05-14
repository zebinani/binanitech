<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   
    
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />


    <title>Contacts</title>
</head>
<body> 
    <div class="container">
            
        <section class="containe-fluid header">
            <div class="container entete">
                <div class="row">
                        
                        <i class="fab fa-whatsapp-square"></i>
                        <div class="col"><i class="fa fa-phone-square" aria-hidden="true">+221773579551</i></div>
                        <div class="col"><i class="fa fa-envelope-open-o" aria-hidden="true">:masellouddiallo@gmail.com</i>
                        </div>
                        <div class="col"><a href="https://web.facebook.com/" target=_blank><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        
                            
                        </div>                            
                </div> 
            </div>
                 <br>
            <div class="container header ">
            <span>    <img src="images/logo.png" alt="logo" width="10%"> </span>
                
                    <nav class="menu">
                        <a href="index">Accueil</a>
                        <a href="#">Galerie</a>
                        <a href="contact">Contacts</a>    
                    </nav>

            </div>
        </section>
                
                <br><br><br>
                <hr>
                    <div class="row justify-content-center w">
                        
                            <h1><p>Adresse</p><p><i class="fa fa-map-marker"></i></p></h1>
                                  
                            <div class="col-12 maps" >
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.935630429474!2d-17.324286450222242!3d14.772655776748406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10aee2898fbcd%3A0xd89e68434b47cac!2sBINANITECH!5e0!3m2!1sfr!2ssn!4v1578613556086!5m2!1sfr!2ssn" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                         <br>
                                               

                                    <div class="row .contacts">
                                        <!--Section: Contact v.2-->
                                  <section class="mb-4">
                                  <br><br>
                                  <h1> CONTACTS</h1>
                                    <!--Section heading-->
                                  <!--  <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2> -->
                                    <!--Section description-->
                                    <p class="text-center w-responsive mx-auto mb-5">Avez-vous des questions? N'hésitez pas à nous contacter directement. Notre équipe reviendra vers vous en quelques heures pour vous aider..</p>
                                  
                                    <div class="row">
                                  
                                        <!--Grid column-->
                                        <div class="col-md-9 mb-md-0 mb-5">
                                            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                  
                                                <!--Grid row-->
                                                <div class="row">
                                  
                                                    <!--Grid column-->
                                                    <div class="col-md-6">
                                                        <div class="md-form mb-0">
                                                            <input type="text" id="name" name="name" class="form-control">
                                                            <label for="name" class="">NOM</label>
                                                        </div>
                                                    </div>
                                                    <!--Grid column-->
                                  
                                                    <!--Grid column-->
                                                    <div class="col-md-6">
                                                        <div class="md-form mb-0">
                                                            <input type="text" id="email" name="email" class="form-control">
                                                            <label for="email" class="">Email</label>
                                                        </div>
                                                    </div>
                                                    <!--Grid column-->
                                  
                                                </div>
                                                <!--Grid row-->
                                  
                                                <!--Grid row-->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="md-form mb-0">
                                                            <input type="text" id="subject" name="subject" class="form-control">
                                                            <label for="subject" class="">Objects</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Grid row-->
                                  
                                                <!--Grid row-->
                                                <div class="row">
                                  
                                                    <!--Grid column-->
                                                    <div class="col-md-12">
                                  
                                                        <div class="md-form">
                                                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                                            <label for="message">Message</label>
                                                        </div>
                                  
                                                    </div>
                                                </div>
                                                <!--Grid row-->
                                  
                                            </form>
                                  
                                            <div class="text-center text-md-left">
                                                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
                                            </div>
                                            <div class="status"></div>
                                        </div>
                                        <!--Grid column-->
                                  
                                        <!--Grid column-->
                                        <div class="col-md-3 text-center">
                                            <ul class="list-unstyled mb-0">
                                                <li><i class="fa fa-map-marker-alt fa-2x"></i>
                                                    <p>KEUR MASSAR , PAU6, SENEGAL</p>
                                                </li>
                                  
                                                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                                                    <p> +221773579551 </p>
                                                </li>
                                  
                                                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                                                    <p>masellouddiallo@gmail.com</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--Grid column-->
                                  
                                    </div>
                                  
                                  </section>
                                  <!--Section: Contact v.2-->
                                  </div>
                                    </div>
                                  </div>
                                
                            
                    </div>
                </div>
            </div>  
    </div>  
    <footer class="container-fluid footer">
        <div class="container ">
            <div class="row justify-content-center">
                    Copyright-2020 @:Tous les droits sont reserves à BINANITECH
            </div>

        </div>
        

    </footer>

</body>
</html>