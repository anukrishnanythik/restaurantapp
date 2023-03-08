<!DOCTYPE html>
<html lang="en">


<head>
    <base href ="/public">
    @include('admin.css')
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
            <br>
              <form action="{{route('updatechef',encrypt($chef->id))}})}}" method="post" enctype="multipart/form-data" >
            @csrf
                    <div class="form-group">
                        <label  class="fs-6" for="name">Name:</label>
                        <input type="text" class="form-control  bg-light text-dark " id="name" name="name" value="{{$chef->name}}">
                      </div>
                      @error('name')
                      <p class="text-danger">{{$message}}</p>
                            @enderror

                      <div class="form-group">
                        <label class="fs-6" for="price">Speciality:</label>
                        <input   type="text" class="form-control text-dark bg-light" id="speciality" name="speciality"  value="{{$chef->speciality}}">
                      </div>
                      @error('price')
                      <p class="text-danger">{{$message}}</p>
                            @enderror

                      <div class="form-group">
                        <label  class="fs-6 " for="image">Image:</label>
                        <br>
                        <input  type="file" class="form-control bg-light text-dark fs-6" id="image" name="image"  value="{{$chef->image}}">
                      </div>
                      @error('image')
                      <p class="text-danger">{{$message}}</p>
                            @enderror

                      <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary"> Update Chef</button>

                     </div>
          </form>

      <!-- plugins:js -->
      @include('admin.script')
    </div></div></div>
</div>
      <!-- End custom js for this page -->
</body>

</html>
