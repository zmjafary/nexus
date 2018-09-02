    <!DOCTYPE html>
    <html lang="zxx" class="no-js">
    <head>

    @include('includes/_head') 

    @include('includes/_links')

    </head>
        <body>

            <!-- Start Header Area -->
            <header class="default-header">
                <nav class="navbar navbar-expand-lg navbar-light">

                @include('includes/_nav')

                </nav>
            </header>
            <!-- End Header Area -->

            <!-- start banner Area -->
            <section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="img/header-bg.jpg">
                <div class="overlay-bg overlay"></div>
                <div class="container">
                    <div class="row fullscreen">
                        <div class="banner-content d-flex align-items-center col-lg-12 col-md-12">
                            <h1>
                                A Discount Toner Cartridge <br>
                                Is Better Than Ever.                                
                            </h1>
                        </div>  
                        <div class="head-bottom-meta d-flex justify-content-between align-items-end col-lg-12">
                            <div class="col-lg-6 flex-row d-flex meta-left no-padding">
                                <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                                <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                            </div>
                            <div class="col-lg-6 flex-row d-flex meta-right no-padding justify-content-end">
                                <div class="user-meta">
                                    <h4 class="text-white">Mark wiens</h4>
                                    <p>12 Dec, 2017 11:21 am</p>
                                </div>
                                <img class="img-fluid user-img" src="img/user.jpg" alt="">
                            </div>
                        </div>                                              
                    </div>
                </div>
            </section>
            <!-- End banner Area -->    


            @yield('content')


            <!-- End team Area -->
            
            <!-- start footer Area -->      
            <footer class="footer-area section-gap">

            @include('includes/_footer') 

            </footer>
            <!-- End footer Area -->        

        @include('includes/_scripts')

        </body>
    </html>