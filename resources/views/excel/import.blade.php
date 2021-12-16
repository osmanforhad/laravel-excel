<form action={{ route('import') }} method="POST" enctype="multipart/form-data">
@csrf
<label for="excelfileinput">Please Import Xlsx File only</label>
<input type="file" name="import_file" required>
<button type="submit">Upload</button>
</form>
<button>
<a href="{{ route('export') }}">Export / Download Excel File</a>
</button>
<p>
<strong>Please download the xlsx file and clear it | Now you write your 
    all data by listing and import it again | Thank You.</strong>
</p>