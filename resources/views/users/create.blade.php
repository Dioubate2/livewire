@extends("layouts.master")
@section("content")
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Creation du compte des utilisateurs</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('save-user') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="card-body ">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Nom</label>
                    <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="nom"
                    value="{{ old('nom') }}" placeholder="Entrer le nom">
                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label>Prénom</label>
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                        value="{{ old('prenom') }}" placeholder="Entrer le prenom">

                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
            </div>


            <div class="row">
                <div class="form-group col-md-6">
                    <label>Téléphone</label>
                    <input type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone"
                    value="{{ old('telephone') }}" placeholder="Entrer le téléphone">

                    @error('telephone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label>Adresse</label>
                    <input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse"
                    value="{{ old('adresse') }}" placeholder="Entrer l'adresse">

                    @error('adresse')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Pièce D'identité </label>
                    <input type="text" class="form-control @error('pieceIdentite') is-invalid @enderror" name="pieceIdentite"
                    value="{{ old('pieceIdentite') }}" placeholder="Entrer pièce d'identité">

                    @error('pieceIdentite')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" placeholder="Entrer email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Role d'utilisateur</label>
                    <select name="role"  class="form-control @error('role') is-invalid @enderror">
                        @foreach ($roles as $item)
                        <option value="{{ $item->id }}">{{ $item->nom }}</option>
                        @endforeach
                    </select>

                    @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label>Genre</label>
                    <select name="sexe"  class="form-control @error('sexe') is-invalid @enderror">
                        <option value="4">Homme</option>
                        <option value="5">Femme</option>
                    </select>

                    @error('sexe')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Photo</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo">

                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Enregistrer</button>
          </div>
        </form>
      </div>
    </div>
</div>
@stop
