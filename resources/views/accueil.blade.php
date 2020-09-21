@extends('layouts.layout')
@section('pag_index')
<br><br><br><br><br><br><br>
<header>  
    <div class="container">
        <div class="header_accueil">
            <p> 
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam illum laborum atque maxime blanditiis unde voluptas fuga corporis debitis minus sequi amet libero culpa, adipisci ipsum rem repellendus veniam nobis.
            </p>
 
<!--
<div class="slider"> 
    <div class="slides">
        <div class="slide"> <img src="images/work.jpg" alt=""></div>
        <div class="slide"> <img src="images/atelier.jpg" alt=""></div>
        <div class="slide"> <img src="images/work2.jpg" alt=""></div>

    </div>
</div>
-->
</header>
<main>
    <div class="containe">
            <h1>A propos</h1>
            <div class="container propos">
            <div class="row justify-content-center">
                

                    <div class="col col-md-9 col-lg-9 col-sm-6">Le groupe <em>BINANITECH</em> est une entrepise qui evolue dans plusieurs domaine de la technologie informatiques!.Nous avons une expertise salue par nos partenaires.</div>
                    
                    
            </div>
        </div>
        <br>
        <h1>SERVICES</h1>
        <div class="row justify-content-center ">
            <br><br>
                <div class="col-service col-md-4 col-lg-5 col-sm-6">
                        <p> <img src="images/atelier.jpg" class="rounded-circle mx-auto d-block"  style= "width: 250px;height: 250px; border:4px solid black;" alt="Responsive image"> </p>
                <H3>MAINTENANCE INFORMATIQUE   &     RESEAU </H3>

                
                  <p>  
                    Nous avons une  équipe techniciens qui intervient dans les meilleurs délais en cas de panne afin de rétablir le bon fonctionnement de votre système informatique. Nous vous déterminerons l’origine de la panne et mettons en œuvre les procédures adaptées à des prix très attractifs. Nous vous proposons aussi des forfaits de maintenance, flexibles et adaptés à vos besoins. Nous réalisons un audit gratuit permettant de cibler au mieux la maintenance dont vous avez besoin. De plus, pour les urgences, nous intervenons de 8h/00h.
                  </p>  
                  </div>
                <div class="col-service col-md-4 col-lg-5 col-sm-6">
                        
                        <img src="images/work.jpg" class="rounded-circle mx-auto d-block" alt="Cinque Terre" style="width: 250px;height: 250px; border: 4px solid black;">
                        <br>
                    <h3>ADMINISTRATION SYSTEME & RESEAU   </h3>
                  
                  

                    Notre équipe de techniciens intervient dans les meilleurs délais en cas de panne afin de rétablir le bon fonctionnement de votre système informatique. Nous déterminons l’origine de la panne et mettons en œuvre les procédures adaptées à des prix très attractifs. Nous vous proposons aussi des forfaits de maintenance, flexibles et adaptés à vos besoins. Nous réalisons un audit gratuit permettant de cibler au mieux la maintenance dont vous avez besoin. De plus, pour les urgences, nous intervenons de 8h/00h.
                </div>

                  <div class="col-service col-md-4 col-lg-5 col-sm-6">

                        <h3>DEVELOPPEMENT WEB </h3>
                        Notre équipe  réalise des sites internet et ajouter des fonctionnalites à la hauteur de vos projets et adaptés à vos possibilités techniques et financières. Pour faire bonne impression sur le web, il vous faut un site internet à votre image, professionnel, efficace et totalement personnalisé. 
                        De plus, pour les urgences, nous intervenons 24h/24h.
                    </div>

                    <div class="col-service col-md-4 col-lg-5 col-sm-6">
                        <h3>E-Business & Infograhie</h3>
                      <p>  
                      Nous réalisons également les créations graphiques et leurs impressions pour l’ensemble de vos outils de communication : logo, carte de visite, flyer, supports commerciaux etc .
                      De plus, pour les urgences, nous intervenons nous intervenons 24h/24h.
                      </p>  
                      </div>

        </div>
        <div class="row justify-content-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero neque atque voluptatibus nihil ex nesciunt eos, tempora labore voluptas iure, mollitia itaque eaque modi delectus velit deleniti blanditiis pariatur ipsum!         
        </div>
      
        <h1>CONTACTS</h1>
        
        <div class="container">
            <div class="row justify-content-center w">
                            <div class="row .contacts">
                                <!--Section: Contact v.2-->
                          <section class="mb-4">
                          
                            <!--Section heading-->
                          <!--  <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2> -->
                            <!--Section description-->
                            <p class="text-center w-responsive mx-auto mb-5">Avez-vous des questions? N'hésitez pas à nous contacter directement. Notre équipe reviendra vers vous en quelques heures pour vous aider..</p>
                          
                            <div class="row">
                          
                                <!--Grid column-->
                                <div class="col-md-9 mb-md-0 mb-5">
                                    <form id="contact-form" name="contact-form" action="{{route('contact.store')}}" method="POST">
                          
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
                                        <a class="btn btn-warning" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
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
                          <h1><p>Adresse</p><p><i class="fa fa-map-marker"></i></p></h1>
                          
                          
                          <div class="col-12 maps" >
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.935630429474!2d-17.324286450222242!3d14.772655776748406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10aee2898fbcd%3A0xd89e68434b47cac!2sBINANITECH!5e0!3m2!1sfr!2ssn!4v1578613556086!5m2!1sfr!2ssn" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                              </div>
                    
            </div>
        </div>
    </div>  
 </div> 
 </main>
           
@endsection         
            
   