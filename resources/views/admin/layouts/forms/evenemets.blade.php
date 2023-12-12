<div class="col-12">
    <label for="title_fr" class="form-label">Titre</label>
    <input type="text" name="title_fr" class="form-control" id="title_fr" required
        value="{{ old('title_fr', $evenement->title_fr ?? '') }}">
</div>
<div class="col-12">
    <label for="title_ar" class="form-label">Titre(AR)</label>
    <input type="text" name="title_ar" class="form-control" id="title_ar" required
        value="{{ old('title_ar', $evenement->title_ar ?? '') }}">
</div>

<div class="col-12">
    <label for="description_fr" class="form-label">Description</label>
    <textarea name="description_fr" class="form-control" id="description_fr" required >  {{ old('description_fr', $evenement->description_fr ?? '') }}</textarea>
</div>
<div class="col-12">
    <label for="description_ar" class="form-label">Description(AR)</label>
    <textarea name="description_ar" class="form-control" id="description_ar" required >  {{ old('description_ar', $evenement->description_ar ?? '') }}</textarea>
</div>
<div class="col-12">
    <label for="lieu_fr" class="form-label">Lieu</label>
    <input type="text" name="lieu_fr" class="form-control" id="lieu_fr" 
        value="{{ old('lieu_fr', $evenement->lieu_fr ?? '') }}">
</div>
<div class="col-12">
    <label for="lieu_ar" class="form-label">Lieu(AR)</label>
    <input type="text" name="lieu_ar" class="form-control" id="lieu_ar" 
        value="{{ old('lieu_ar', $evenement->lieu_ar ?? '') }}">
</div>
<div class="col-12">
    <label for="date" class="form-label">Date</label>
    <input type="date" name="date" class="form-control" id="date"  value="{{ old('date', $evenement->date ?? '') }}">
</div>

<div class="col-12">
    <label for="image" class="form-label">Affiche</label>
    <input type="file" name="image" class="form-control" id="image"
        value="{{ old('image', $evenement->image ?? '') }}">
    @if (isset($evenement))
        <img src="{{ asset('storage/' . $evenement->image ?? '') }}" style="max-height: 150px;margin-top:40px"
            alt="">
    @endif
</div>
<div class="col-12">
    <label for="affiche" class="form-label">Slide</label>
    <input type="file" name="affiche" class="form-control" id="affiche"
        value="{{ old('affiche', $evenement->affiche ?? '') }}">
    @if (isset($evenement))
        <img src="{{ asset('storage/' . $evenement->affiche ?? '') }}" style="max-height: 150px;margin-top:40px"
            alt="">
    @endif
</div>

<div class="col-12">
    <label for="media" class="form-label">Images</label>
    <input type="file" id="media" multiple name="media[]" class="form-control">
    @if ($errors->has('media'))
        <span class="text-danger text-left">{{ $errors->first('media') }}</span>
    @endif
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
