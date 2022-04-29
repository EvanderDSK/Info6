<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" value={{ old('title', $category->title) }}>
</div>

<div class="form-group">
    <label for="url_clean">Url clean</label>
    <input type="text" class="form-control" name="url_clean" id="url_clean" value={{ old('link', $category->url_clean) }}>
</div>

<br>
<input type="submit" value="Send" class="btn btn-primary">