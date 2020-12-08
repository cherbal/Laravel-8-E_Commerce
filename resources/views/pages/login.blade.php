@extends('layouts.master')

@section('content')

   <h1> Login page</h1>
   <div class="row">
       <div class="col-md-4 offset-md-3">
           <form method="post" action="/login">
             @csrf
              <div class="form-group">
                <label for="email">Adresse E-mail</label>
                <input type="email" class="form-control" id="email" name="email"
                       aria-describedby="emailHelp" placeholder="E-mail" required>
              </div>
              <div class="form-group">
                <label for="mot_passe">Mot de passe</label>
                <input type="password" class="form-control" id="mot_passe" name="mot_passe"
                       placeholder="Mot de passe" required>
              </div>

              <button type="submit" class="btn btn-primary">Connexion</button>
            </form>
       </div>
   </div>
@endsection