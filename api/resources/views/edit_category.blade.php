@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{$category->id}}" autocomplete="off">
	<table align="center" border="1">
		<tr>
			<td class="form-group" >Category Name</td>
			<td><input type="text" name="category_name" value="{{$category->name}}"></td>
			<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Update"></td>
		</tr>
	</table>

</form>