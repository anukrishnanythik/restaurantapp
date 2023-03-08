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
                <a href="{{route('addchef')}}">  <button type="button" class="btn btn-primary btn-lg  float-end ">
                Add chef</button></a>

                <br><br>
            <br>
            <div class="col-10">

            <table class="table text-light">
        <thead>

          <tr>
            <th  class="fs-6">Name </th>
            <th  class="fs-6">Speciality</th>
            <th  class="fs-6">Image</th>
            <th  class="fs-6">Edit</th>
            <th  class="fs-6">Delete</th>
         </tr>
        </thead>

        <tbody>

        @foreach($chef as $row)
          <tr>
          <td  class="fs-6">{{$row->name}}</td>
          <td  class="fs-6">{{$row->speciality}}</td>
          <td  class="fs-6"><img  height='100' src="{{asset('storage/image/'.$row->image)}}"  alt="Chef image"></td>

             <td><button type="button" class="btn btn-warning"><a href="{{route('editchef',encrypt($row->id))}}"
                class="text-decoration-none  fs-6 text-light" >Edit</a></button></td>

             <td><button type="button" class="btn btn-danger"><a href="{{route('deletechef',encrypt($row->id))}}"
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
