
<div class="input-group mb-3">
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name',$user->name ?? '') }}" placeholder="Nom complet">
    @error('name')
    <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="input-group mb-3">
    <input type="email" name="email" value="{{ old('email',$user->email ?? '') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
    @error('email')
    <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="input-group mb-3">
    <input type="password" name="password"
        class="form-control @error('password') is-invalid @enderror"
        placeholder="{{ isset($user) ?'Changer le mot de passe' :'mot de passe'}}">
    @error('password')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<div class="input-group mb-3">
    <input type="password" name="password_confirmation" class="form-control"
        placeholder="Retapez le mot de passe">
    <div class="input-group-append">
        <div class="input-group-text"><span class="fas fa-lock"></span></div>
    </div>
</div>


