<br>
<h1>Post</h1>
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" name="title" id="title" value={{ old('title') }}>
    </div>

    <div class="form-group">
        <label for="url_clean">Url Limpia</label>
        <input type="text" class="form-control" name="url_clean" id="url_clean" value={{ old('url_clean') }}>
    </div>

    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea class="form-control" name="content" id="content" rows="3">{{ old('content') }}</textarea>
    </div>
    <br>
    <input type="submit" value="Enviar" class="btn btn-primary">
        
    <p>xd</p>
        
