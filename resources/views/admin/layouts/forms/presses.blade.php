<div class="col-12">
    <label for="title" class="form-label">Titre</label>
    <input type="text" name="title" class="form-control" id="title" required
        value="{{ old('title', $presse->title ?? '') }}">
</div>

<div class="col-12">
    <label for="url" class="form-label">Url</label>
    <input type="text" name="url" class="form-control" id="url" required
        value="{{ old('url', $presse->url ?? '') }}">
</div>
<div class="col-12">
    <label for="image" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" id="image" value="{{ old('image', $presse->image ?? '') }}">
</div>
    @if (isset($presse))
    <div>
        <img src="{{ asset('storage/' . $presse->image ?? '') }}" style="margin-top:40px;max-height:150px" alt="">
    </div>
    @endif
