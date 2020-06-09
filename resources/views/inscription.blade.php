@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="log_register">
                        <div class="h2 title_log_register">Inscription</div> 
                        <div class="form_connect">
                            <form>
                                <div class="radio-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="sexH" name="sex" value="homme">
                                        <label class="form-check-label" for="sexH">Homme</label>
                                     </div>
                                     <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" id="sexF" name="sex" value="femme">
                                         <label class="form-check-label" for="sexF">Femme</label>
                                     </div>
                                </div>
                                <p>Informations générales</p>
                                <div class="form-group">
                                    <input type="text" class="form-control form_reg" id="nom" placeholder="Nom">
                                </div>
                                <div class="form-group ">
                                    <input type="text" class="form-control form_reg" id="prenoms" placeholder="Prénoms">
                                </div>
                                <div class="form-group ">
                                    <input type="email" class="form-control form_reg" id="email" placeholder="Email">
                                </div>
                                <div class="form-group ">
                                    <input type="password" class="form-control form_reg" id="mdp" placeholder="Mot de passe">
                                </div>
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
                                <button type="submit" class="btn btn-success btn-lg btn-block btn-input">Je m'inscris</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
@stop