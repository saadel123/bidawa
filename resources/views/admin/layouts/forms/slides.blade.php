<div class="col-12">
    <label for="title" class="form-label">Titre</label>
    <input type="text" name="title" class="form-control" id="title" required
        value="{{ old('title', $slide->title ?? '') }}">
</div>

<div class="col-12">
    <label for="url" class="form-label">Url</label>
    <input type="text" name="url" class="form-control" id="url" required
        value="{{ old('url', $slide->url ?? '') }}">
</div>
<div class="col-12">
    <label for="image" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" id="image" value="{{ old('image', $slide->image ?? '') }}">
</div>
