@extends('layouts.header')
@section('content')
<div class="tm-home-img-container">
            <img src="img/tm-home-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
        </div>
        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text tm-title">Introduction</h2>
                        <p class="tm-subtitle">Suspendisse ut magna vel velit cursus tempor ut nec nunc. Mauris vehicula, augue in tincidunt porta, purus ipsum blandit massa.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="{{url('assets/img/tm-img-310x180-1.jpg')}}" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a  class="tm-btn text-uppercase">Detail</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="{{url('assets/img/tm-img-310x180-2.jpg')}}" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a  class="tm-btn text-uppercase">Read More</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="{{url('assets/img/tm-img-310x180-3.jpg')}}" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #3</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a  class="tm-btn text-uppercase">Detail</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="{{url('assets/img/tm-img-310x180-4.jpg')}}" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #4</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a  class="tm-btn text-uppercase">Read More</a>    
                        </div>  

                    </div>
                </div> <!-- row -->

                <div class="row tm-margin-t-big">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="tm-2-col-left">
                            
                            <h3 class="tm-gold-text tm-title">Pellentesque fermentum mauris et posuere</h3>
                            <p class="tm-margin-b-30">Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien</p>
                            <img src="{{url('assets/img/tm-img-660x330-1.jpg')}}" alt="Image" class="tm-margin-b-40 img-fluid">
                            <p>
                                Donec tempor lobortis tortor, in feugiat massa facilisis sed. Ut dignissim viverra pretium. In eu justo maximus turpis feugiat finibus scelerisque nec eros. Cras nec lectus tempor nibh vestibulum eleifend et ac elit.
                            </p>
                            <p>Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis.</p>
                            <p class="m-b-2"> Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis. Mauris id vulputate lectus, id fermentum sapien.
                            </p>
                            <a  class="tm-btn text-uppercase">Read More</a>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                        <div class="tm-2-col-right">

                            <div class="tm-2-rows-md-swap">
                                <div class="tm-overflow-auto row tm-2-rows-md-down-2">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <h3 class="tm-gold-text tm-title">
                                            Categories
                                        </h3>
                                        <nav>
                                            <ul class="nav">
                                                <li><a href="" class="tm-text-link">Tincidunt non faucibus placerat</a></li>
                                                <li><a href="" class="tm-text-link">Vestibulum tempor ac lectus</a></li>
                                                <li><a href="" class="tm-text-link">Fusce non turpis euismod</a></li>
                                                <li><a href="" class="tm-text-link">Nam in augue consectetur</a></li>
                                                <li><a href="" class="tm-text-link">Text Link Color #006699</a></li>
                                            </ul>
                                        </nav>    
                                    </div> <!-- col -->

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-xs-m-t">
                                        <h3 class="tm-gold-text tm-title">
                                            Useful Links
                                        </h3>
                                        <nav>
                                            <ul class="nav">
                                                <li><a href="" class="tm-text-link">Suspendisse sed dui nulla</a></li>
                                                <li><a href="" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                                <li><a href="" class="tm-text-link">Duiss nec purus et eros</a></li>
                                                <li><a href="#" class="tm-text-link">Etiam pulvinar et ligula sed</a></li>
                                                <li><a href="" class="tm-text-link">Proin egestas eu felis et iaculis</a></li>
                                            </ul>
                                        </nav>    
                                    </div> <!-- col -->
                                </div>                        
                                
                                <div class="row tm-2-rows-md-down-1 tm-margin-t-mid">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <h3 class="tm-gold-text tm-title tm-margin-b-30">Related Posts</h3>
                                        <div class="media tm-related-post">
                                          <div class="media-left media-middle">
                                            <a >
                                              <img class="media-object" src="{{url('assets/img/tm-img-240x120-1.jpg')}}" alt="Generic placeholder image">
                                            </a>
                                          </div>
                                          <div class="media-body">
                                            <a href=""><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                            <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                          </div>
                                        </div>
                                        <div class="media tm-related-post">
                                          <div class="media-left media-middle">
                                            <a >
                                              <img class="media-object" src="{{url('assets/img/tm-img-240x120-2.jpg')}}" alt="Generic placeholder image">
                                            </a>
                                          </div>
                                          <div class="media-body">
                                            <a ><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                            <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                          </div>
                                        </div>
                                        <div class="media tm-related-post">
                                          <div class="media-left media-middle">
                                            <a >
                                              <img class="media-object" src="{{url('assets/img/tm-img-240x120-3.jpg')}}" alt="Generic placeholder image">
                                            </a>
                                          </div>
                                          <div class="media-body">
                                            <a ><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                            <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                          </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>

                        </div>
                        
                    </div>
                </div> <!-- row -->

            </div>
        </section>
        @endsection