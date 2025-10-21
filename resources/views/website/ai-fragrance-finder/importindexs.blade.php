<form action="{{ route('dynamic.import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mt-3">
        <label for="file">Upload Excel File</label>
        <input type="file" name="file" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Import</button>
</form>
