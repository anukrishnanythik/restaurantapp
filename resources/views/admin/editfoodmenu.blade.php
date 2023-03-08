<!DOCTYPE html>
<html lang="en">


<head>
    <base href ="/public">
    @include('admin.css')
 </head>

<body>
    <div class="container-scroller">


        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')

          <!-- partial -->

          <div class="container-fluid page-body-wrapper">
            <div class="container fs-4 ">

            <br>
               <div class="row ">
            <br>
            <br>

            <div class="col-8  text-light">
              <form action="{{route('updatefoodmenu',encrypt($food->id))}}" method="post" enctype="multipart/form-data" >
            @csrf

                    <div class="form-group">
                        <label  class="fs-6" for="name">Title:</label>
                        <input type="text" class="form-control  bg-light text-dark " id="title" name="title" value="{{$food->title}}" >
                      </div>
                      @error('title')
                      <p class="text-danger">{{$message}}</p>
                            @enderror


                      <div class="form-group">
                        <label class="fs-6" for="price">Price:</label>
                        <input   type="number" class="form-control text-dark bg-light" id="price" name="price" value="{{$food->price}}" >
                      </div>
                      @error('price')
                      <p class="text-danger">{{$message}}</p>
                            @enderror

                            <div class="form-group">
                                <label for="drimage"  class="fs-6" >Food image:</label>

                                <img  width="120" height="120" src="{{asset('storage/image/'.$food->image)}}"  alt="Menu image">
                              </div>
                      <div class="form-group">
                        <label  class="fs-6 " for="image">Change image:</label>
                        <br>
                        <input  type="file" class="form-control bg-light fs-6 text-dark" id="image" name="image"  value="{{$food->image}}">
                      </div>
                      @error('image')
                      <p class="text-danger">{{$message}}</p>
                            @enderror

                      <div class="form-group">
                        <label  class="fs-6" for="description">Description:</label>
                        <input type="text" class="form-control text-dark bg-light" id="description" name="description"  value="{{$food->description}}">
                      </div>
                      @error('description')
                      <p class="text-danger">{{$message}}</p>
                            @enderror

                      <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary"> Update Menu</button>

                     </div>
          </form>

      <!-- plugins:js -->
      @include('admin.script')
    </div></div></div>
</div>
      <!-- End custom js for this page -->
</body>

</html>
