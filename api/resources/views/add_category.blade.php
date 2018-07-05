

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" id="idForm" action="" autocomplete="off">
	<table align="center" border="1">
		<tr>
			<td class="form-group" >Category Name</td>
			<td><input type="text" name="category_name" value=""></td>
			<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>

</form>