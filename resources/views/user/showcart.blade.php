<!DOCTYPE html>
<html lang="en">

  <head>
    <base href ="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                        <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            <li class="scroll-to-section"><a href="{{route('showcart',Auth::id())}}">
                                @auth  Cart[{{$count}}]    @endauth
                                @guest  Cart[0]    @endguest

                            </a></li>

                           <li>
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                <li>
                                <x-app-layout>

                                </x-app-layout>
                            </li>

                            </div>
                        @endif

                    </li>
                        </ul>

                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">

    <div class="container-fluid">
        <div class="row justify-content-center">
<br>
     <div class="col-8">

    <table class="table text-dark text-center">

        <thead>
          <tr>
            <th  class="fs-6">Name </th>
            <th  class="fs-6">Price</th>
            <th  class="fs-6">Quantity</th>
            <th  class="fs-6">Action</th>
         </tr>
        </thead>

        <tbody>

        @foreach($data2 as $row)
          <tr>
          <td> {{$row->cartfood->title }}</td>
          <td> {{$row->cartfood->price }}</td>
          <td  class="fs-6">{{$row->quantity}}</td>


             <td><button type="button" class="btn bg-danger"><a href="{{route('deleteorder',encrypt($row->id))}}"
             class="text-decoration-none  fs-6 text-light" >Remove</a></button></td>

         </tr>
          @endforeach
            </tbody>
        </table>

        <div class="text-center">
            <button type="button" id="order" class="btn bg-primary text-light"> Order Now</button>
          </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6" id="orderdetails" >

        <form action="{{route('orderdetails')}}" method="post" >
            @csrf

                    <div class="form-group">
                        <label  class="fs-6" for="name">Name:</label>
                        <input type="text" class=" bg-light text-dark form-control " id="name" name="name"   value={{old('name')}}>
                      </div>
                      @error('name')
                      <p class="text-danger">{{$message}}</p>
                            @enderror

                            <div class="form-group">
                                <label  class="fs-6" for="name">Phone:</label>
                                <input type="text" class=" bg-light text-dark form-control " id="phone" name="phone"   value={{old('phone')}}>
                              </div>
                              @error('phone')
                              <p class="text-danger">{{$message}}</p>
                                    @enderror

                                    <div class="form-group">
                                        <label  class="fs-6" for="name">Address:</label>
                                        <input type="text" class=" bg-light text-dark form-control " id="address" name="address"   value={{old('address')}}>
                                      </div>
                                      @error('address')
                                      <p class="text-danger">{{$message}}</p>
                                            @enderror

                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-lg bg-primary text-light"> Order Confirm</button>

                                             </div>
        </form>

    </div>
</div>
</div>


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Klassy Cafe Co.

                        <br>Design: TemplateMo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

        $("order").click(function(){


       $("#orderdetails").show();
});
    </script>
  </body>
</html>
