@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="log_register">
                        <div class="h2 title_log_register">Formulaire <br> Agent immobilier</div> 
                        <div class="form_connect">
                            <form action="/propriétaire/dashboard">
                                <div class="panel-heading">
                                    <p>Détails logement - Etape 4</p>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Mois de Garantie 
                                    </p>
                                    <input type="text" class="inputAutre" placeholder="Votre réponse">
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Combien de mois d'avances ? 
                                    </p>
                                    <input type="text" class="inputAutre" placeholder="Votre réponse">
                                </div>
                                <div class="panel-body">
                                    <p>
                                        L'agent immobilier prendra  
                                    </p>
                                    <input type="text" class="inputAutre" placeholder="Votre réponse">
                                </div>
                                <div class="panel-body">
                                    <p>
                                        La caution est de :: 
                                    </p>
                                    <input type="text" class="inputAutre" placeholder="Votre réponse">
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Ajouter une briève description de la location 
                                    </p>
                                    <input type="text" class="inputAutre" placeholder="Votre réponse">
                                </div>
                                <button type="submit" class="btn btn-success btn-lg btn-block btn-reg">Suivante</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
@stop