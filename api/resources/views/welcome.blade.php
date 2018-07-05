


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

</head>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
function del(id)
{
   // alert(id)
    if(confirm("Are you sure want to delete this category...!")){
        window.location.href="del_category/"+id ;
    }
}
</script>
<body>
<div id="app">
        @include('flash-message')
        
        @yield('content')
</div>
<a  href="add_category"><span class="glyphicon glyphicon-plus pull-right"></span></a>
    <table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
         @foreach($data as $value)
           <tr>
                 <td>{{$value->name}}</td>
                 <td><a href="{{ url('/category/'.$value->id) }} "><span class="glyphicon glyphicon-pencil"></span></a>
                 <a href="javascript:void(0)" onclick="del({{$value->id}})"><span class="glyphicon glyphicon-trash"></span></a></td>
            </td>
        </tr>
        @endforeach 
        </tbody>
</table>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
