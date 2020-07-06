@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="log_register">
                        <div class="h2 title_log_register">Inscription</div> 
                        <div class="form_connect">
                            <form action="">
                                @include('partials._formRegister')
                                <p>Vérification du statut d'Etudiant</p>
                                <div class="form-group ">
                                    <input type="text" class="form-control form_reg" id="ecole" placeholder="Votre Ecole/Faculté de l'UAC">
                                </div>
                                <div class="form-group ">
                                    <input type="text" class="form-control form_reg" id="matricule" placeholder="Matricule Etudiant">
                                </div>
                                <div class="form-group ">
                                    <input type="text" class="form-control form_reg" id="login" placeholder="Login Etudiant">
                                </div>
                                <button type="submit" class="btn btn-success btn-lg btn-block btn-reg">Je m'inscris</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
@stop