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

          <div class="container-fluid me-5 mt-5">


        <br>
        <br>
        <br>

        <div class="col-10  ">

        <table class="table text-light">
    <thead>


        <tr>
            <th>Name </th>
            <th>Email</th>
            <th>Delete</th>

         </tr>
        </thead>

        <tbody>

        @foreach($user as $row)
          <tr>
          <td>{{$row->name}}</td>
          <td>{{$row->email}}</td>
          @if($row->usertype=="0")
          <td><button type="button" class="btn btn-danger"><a href="{{route('deleteuser',encrypt($row->id))}}"
              class="text-decoration-none  text-light" >Delete</a></button></td>
              @else
          <td></td>

          @endif

         </tr>
          @endforeach
         </tbody>

    </table>
</div>
</div>




      <!-- plugins:js -->
      @include('admin.script')

      <!-- End custom js for this page -->
</body>

</html>
