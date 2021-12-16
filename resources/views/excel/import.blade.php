<form action={{ url('') }} method="POST" enctype="multipart/form-data">
@csrf
<label for="excelfileinput">Please Import Xlsx File only</label>
<input type="file" name="import_file" required>
<button type="submit">Upload</button>
</form>
<a href="{{ route('export') }}">Export / Download Excel File</a>