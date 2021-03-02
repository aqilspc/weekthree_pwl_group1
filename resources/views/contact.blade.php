@extends('layouts.header')
@section('content')
<div class="tm-contact-img-container" style="background-image: url('{{url('assets/img/tm-contact-img1.jpg')}}');">
            
        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                        <section>
                            <h3 class="tm-gold-text tm-form-title">{{$title}}</h3>
                            <p class="tm-form-description">{{$message}}</p> 


                            <form action="index.html" method="post" class="tm-contact-form">                                
                                <div class="form-group">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Message" required></textarea>
                                </div>
                            
                                <button type="submit" class="tm-btn">Submit</button>                          
                            </form>   
                        </section>
                        
                        <section class="tm-margin-t-mid tm-map-section">
                            <h3 class="tm-gold-text tm-form-title">Pellentesque fermentum mauris</h3>

                         <!--    <div id="google-map"></div> -->

                            <p class="tm-form-description">Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id.</p>

                            <p class="m-b-0">Donec mattis ipsum in erat viverra commodo. 
                                Proin sapien lacus, euismod eget nisl in, 
                                elementum posuere massa. Curabitur a odio
                                eros. Cras aliquam lectus erat, non semper est
                                volutpat eget. Ut eget erat tincidunt.</p>

                            <a href="#" class="tm-btn tm-margin-t-small">Detail</a> 
                        </section>                        
                 

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-contact-right">
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="tm-aside-container">
                                    <h3 class="tm-gold-text tm-title">
                                        Categories
                                    </h3>
                                    <nav>
                                        <ul class="nav">
                                            <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                            <li><a href="#" class="tm-text-link">Tincidunt non faucibus placerat</a></li>
                                            <li><a href="#" class="tm-text-link">Vestibulum tempor ac lectus</a></li>
                                            <li><a href="#" class="tm-text-link">Elementum egestas dui</a></li>
                                            <li><a href="#" class="tm-text-link">Nam in augue consectetur</a></li>
                                            <li><a href="#" class="tm-text-link">Text Link Color #006699</a></li>
                                        </ul>
                                    </nav>
                                    <hr class="tm-margin-t-small">   
                                    <h3 class="tm-gold-text tm-title tm-margin-t-small">
                                        Useful Links
                                    </h3>
                                    <nav>   
                                        <ul class="nav">
                                            <li><a href="#" class="tm-text-link">Suspendisse sed dui nulla</a></li>
                                            <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                            <li><a href="#" class="tm-text-link">Duiss nec purus et eros</a></li>
                                            <li><a href="#" class="tm-text-link">Etiam pulvinar et ligula sed</a></li>
                                            <li><a href="#" class="tm-text-link">Proin egestas eu felis et iaculis</a></li>
                                            <li><a href="#" class="tm-text-link">Fusce non turpis euismod</a></li>
                                        </ul>
                                    </nav>      
                                </div>
                                 
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                
                                <div class="tm-content-box tm-content-box-contact">
                                    <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                                    <p class="tm-margin-b-20 tm-p-small">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                    scelerisque porttitor pharetra</p>
                                    <a href="#" class="tm-btn text-uppercase">Detail</a>    
                                </div> 

                                <div class="tm-content-box tm-margin-t-mid tm-content-box-contact">
                                    <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                                    <p class="tm-margin-b-20 tm-p-small">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                    scelerisque porttitor pharetra</p>
                                    <a href="#" class="tm-btn text-uppercase">Read More</a>    
                                </div>  

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
@endsection