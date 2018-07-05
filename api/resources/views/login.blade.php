

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
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div id="app">
        @include('flash-message')
        
        @yield('content')
</div>
<form method="post" id="idForm" action="" autocomplete="off">
	<table align="center" border="1">
		<tr>
			<td class="form-group" >User Name</td>
			<td><input type="email" name="email" value="" plaseholder="Email"></td>
			<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
		</tr>
		<tr>
			<td class="form-group" >Password</td>
			<td><input type="password" name="password" value="" plaseholder="Password"></td>
			
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Login"></td>
		</tr>
	</table>

</form>
</body>
</html>