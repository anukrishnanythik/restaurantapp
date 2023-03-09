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

            <br>
            <div class="col-10">

            <table class="table text-light">
        <thead>

          <tr>
            <th  class="fs-6">Name </th>
            <th  class="fs-6">Phone</th>
            <th  class="fs-6">Address</th>
            <th  class="fs-6">Foodname</th>
            <th  class="fs-6">Price</th>
            <th  class="fs-6">Quantity</th>
            <th  class="fs-6">Total price</th>
         </tr>
        </thead>

        <tbody>

            @foreach($order as $row)
            <tr>
            <td> {{$row->name }}</td>
            <td> {{$row->phone }}</td>
            <td> {{$row->address }}</td>
            <td> {{$row->foodname }}</td>
            <td> {{$row->price }}</td>
            <td> {{$row->quantity }}</td>
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
