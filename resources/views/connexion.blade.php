@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="log_register">
                    <div class="h2 title_log_register">Connexion</div> 
                    <div class="form_connect">
                        <form>
                            <div class="form-group ">
                            <input type="text" class="form-control form_ctrl" id="email" placeholder="Email">
                            </div>
                            <div class="form-group ">
                            <input type="text" class="form-control form_ctrl" id="mdp" placeholder="Mot de passe">
                            </div>
                            <button type="submit" class="btn btn-vrt btn-lg btn-block btn-input">Je me connecte</button>
                        </form>
                        {{-- <button type="submit" class="btn btn-vrt btn-lg btn-block btn-input">Je me connecte</button> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
@stop
        
        