<!DOCTYPE html>
<html lang="en">


<head>
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
              <form action="{{route('uploadfoodmenu')}}" method="post" enctype="multipart/form-data" >
            @csrf

                    <div class="form-group">
                        <label  class="fs-6" for="name">Title:</label>
                        <input type="text" class="form-control  bg-light text-dark " id="title" name="title"   value={{old('title')}}>
                      </div>
                      @error('title')
                      <p class="text-danger">{{$message}}</p>
                            @enderror


                      <div class="form-group">
                        <label class="fs-6" for="price">Price:</label>
                        <input   type="number" class="form-control text-dark bg-light" id="price" name="price"   value={{old('price')}}>
                      </div>
                      @error('price')
                      <p class="text-danger">{{$message}}</p>
                            @enderror


                      <div class="form-group">
                        <label  class="fs-6 " for="image">Image:</label>
                        <br>
                        <input  type="file" class="form-control bg-light text-dark fs-6" id="image" name="image"  value={{old('image')}} >
                      </div>
                      @error('image')
                      <p class="text-danger">{{$message}}</p>
                            @enderror

                      <div class="form-group">
                        <label  class="fs-6" for="description">Description:</label>
                        <input type="text" class="form-control text-dark bg-light" id="description" name="description"  value={{old('description')}} >
                      </div>
                      @error('description')
                      <p class="text-danger">{{$message}}</p>
                            @enderror

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Add Food</button>

                     </div>
          </form>

      <!-- plugins:js -->
      @include('admin.script')
    </div></div></div>
</div>
      <!-- End custom js for this page -->
</body>

</html>
