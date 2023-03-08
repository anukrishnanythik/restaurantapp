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

          <div class="page-body-wrapper">

            <div class="container-fluid me-5 mt-5">
                @if (session()->has('message'))
                <div class="alert alert-success">
                {{session()->get('message')}}
                </div>
                @endif
                <a href="{{route('addfoodmenu')}}"  >  <button type="button" class="btn btn-primary btn-lg  float-end ">
                Add food</button></a>

                <br><br>
            <br>
            <div class="col-10">

            <table class="table text-light">
        <thead>

          <tr>
            <th  class="fs-6">Title </th>
            <th  class="fs-6">Price</th>
            <th  class="fs-6">Image</th>
            <th  class="fs-6">Description</th>
            <th  class="fs-6">Edit</th>
            <th  class="fs-6">Delete</th>
         </tr>
        </thead>

        <tbody>

        @foreach($food as $row)
          <tr>
          <td  class="fs-6">{{$row->title}}</td>
          <td  class="fs-6">{{$row->price}}</td>
          <td  class="fs-6"><img  height='100' src="{{asset('storage/image/'.$row->image)}}"  alt="Food image"></td>
          <td  class="fs-6">{{$row->description}}</td>

             <td><button type="button" class="btn btn-warning"><a href="{{route('editfoodmenu',encrypt($row->id))}}"
                class="text-decoration-none  fs-6 text-light" >Edit</a></button></td>

             <td><button type="button" class="btn btn-danger"><a href="{{route('deletefoodmenu',encrypt($row->id))}}"
             class="text-decoration-none  fs-6 text-light" >Delete</a></button></td>

         </tr>
          @endforeach
            </tbody>

    </table>
</div>
    </div>
    </div>


      <!-- plugins:js -->
      @include('admin.script')
</div>
      <!-- End custom js for this page -->
</body>

</html>
