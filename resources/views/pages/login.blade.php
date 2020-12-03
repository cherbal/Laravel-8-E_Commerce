@extends('layouts.master')

@section('content')

   <h1> Login page</h1>
   <div class="row">
       <div class="col-sm-4">
           <form>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                       placeholder="E-mail" required>
              </div>
              <div class="form-group">
                <label for="mot_passe">Mot de passe</label>
                <input type="password" class="form-control" id="mot_passe" 
                       placeholder="Mot de passe" required>
              </div>

              <button type="submit" class="btn btn-primary">Connexion</button>
            </form>
       </div>
   </div>
@endsection