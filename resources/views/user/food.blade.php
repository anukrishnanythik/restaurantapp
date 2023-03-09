<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">


                @foreach($food as $row)
              <form action="{{route('addcart',encrypt($row->id))}}" method="post">
@csrf
                <div class="item">
                    <div style="background-image:url('storage/image/{{$row->image}}');" class='card '>


<div class="price"><h6>{{$row->price}}</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{$row->title}}</h1>
                          <p class='description'>{{$row->description}}</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                    <input type="number" min="1" id="quantity" name="quantity" class="w-md">
                    <input type="submit" value="Add cart">

                </div>
            </form>
          @endforeach


            </div>
        </div>
    </div>
</section>
