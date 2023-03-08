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



            <div class="col-10">

            <table class="table text-light">
        <thead>

          <tr>
            <th  class="fs-6">Name </th>
            <th  class="fs-6">Email</th>
            <th  class="fs-6">Phone</th>
            <th  class="fs-6">Guest</th>
            <th  class="fs-6">Date</th>
            <th  class="fs-6">Time</th>
            <th  class="fs-6">Message</th>
             </tr>
        </thead>
             <tbody>

        @foreach($reservation as $row)
          <tr>
          <td  class="fs-6">{{$row->name}}</td>
          <td  class="fs-6">{{$row->email}}</td>
          <td  class="fs-6">{{$row->phone}}</td>
          <td  class="fs-6">{{$row->guest}}</td>
          <td  class="fs-6">{{$row->date}}</td>
          <td  class="fs-6">{{$row->time}}</td>
          <td  class="fs-6">{{$row->message}}</td>

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
