@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="log_register">
                    <div class="h2 title_connexion">Connexion</div> 
                    <div class="form_connect">
                        <form>
                            <div class="form-group ">
                            <input type="text" class="form-control form_ctrl" id="email" placeholder="Email">
                            </div>
                            <div class="form-group ">
                            <input type="text" class="form-control form_ctrl" id="mdp" placeholder="Mot de passe">
                            </div>
                            <button type="submit" class="btn btn-success btn-lg btn-block btn-input">Je me connecte</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
@stop
        
        