<div class="col-12">
    <label for="title" class="form-label">Titre</label>
    <input type="text" name="title" class="form-control" id="title" required
        value="{{ old('title', $evenement->title ?? '') }}">
</div>

<div class="col-12">
    <label for="description" class="form-label">Description</label>
    <input type="text" name="description" class="form-control" id="description" required
        value="{{ old('description', $evenement->description ?? '') }}">
</div>
<div class="col-12">
    <label for="date" class="form-label">Date</label>
    <input type="date" name="date" class="form-control" id="date" required
        value="{{ old('date', $evenement->date ?? '') }}">
</div>

<div class="col-12">
    <label for="image" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" id="image"
        value="{{ old('image', $evenement->image ?? '') }}">
</div>
<div class="col-12">
    <label for="affiche" class="form-label">Affiche</label>
    <input type="file" name="affiche" class="form-control" id="affiche"
        value="{{ old('affiche', $evenement->affiche ?? '') }}">
</div>

<div class="col-12">
    <label for="inputMovie" class="form-label">videos</label>
    <input type="text" name="videos" class=" tagsinput" placeholder="Saisissez les URL séparées par une virgule"
        value="{{ old('videos', isset($evenement->videos) ? json_decode($evenement->videos, true) : '') }}"
        data-role="tagsinput">
    @if ($errors->has('videos'))
        <span class="text-danger text-left">{{ $errors->first('videos') }}</span>
    @endif
</div>

<div class="col-12">
    <label for="media" class="form-label">Media</label>
    <input type="file" id="media" multiple name="media[]" class="form-control">
    @if ($errors->has('media'))
        <span class="text-danger text-left">{{ $errors->first('media') }}</span>
    @endif
</div>

<style>
    .bootstrap-tagsinput .tag {
        color: black !important;
        border: 1px solid;
        padding: 5px;
    }

    .bootstrap-tagsinput {
        display: block !important;
        width: 100% !important;
        padding: 0.375rem 0.75rem !important;
        font-size: 1rem !important;
        font-weight: 400 !important;
        line-height: 1.5 !important;
        color: #212529 !important;
        background-color: #fff !important;
        background-clip: padding-box !important;
        border: 1px solid #ced4da !important;
    }
    .bootstrap-tagsinput{
        line-height: 2.5 !important;
    }
</style>
