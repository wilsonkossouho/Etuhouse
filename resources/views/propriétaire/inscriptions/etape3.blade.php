@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="log_register">
                        <div class="h2 title_log_register">Formulaire <br> Agent immobilier</div> 
                        <div class="form_connect">
                            <form action="/propriétaire/inscriptions/etape4">
                                <div class="panel-heading">
                                    <p>Détails logement - Etape 3</p>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Mode de paiement pour l'électricité
                                    </p>
                                    <div class="custom-control custom-radio ">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio1" value="simple">
                                        <label class="custom-control-label" for="radio1">
                                            Décompteur personnel
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio2" value="sanitaire">
                                        <label class="custom-control-label" for="radio2">
                                            Paiement par groupe
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio3" value="sanitaire">
                                        <label class="custom-control-label" for="radio3"> 
                                            <input type="text" class="inputAutre" placeholder="Autre :">
                                        </label>
                                      </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        L'accès à l'eau est fourni par
                                    </p>
                                    <div class="custom-control custom-radio ">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio1" value="simple">
                                        <label class="custom-control-label" for="radio1">
                                            La SONEB
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio2" value="sanitaire">
                                        <label class="custom-control-label" for="radio2">
                                            Forage maison
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio2" value="sanitaire">
                                        <label class="custom-control-label" for="radio2">
                                            Puis
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio3" value="sanitaire">
                                        <label class="custom-control-label" for="radio3"> 
                                            <input type="text" class="inputAutre" placeholder="Autre :">
                                        </label>
                                      </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Es ce un immeuble à étage ?
                                    </p>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="typeofbedroom" id="checkbox1" value="simple">
                                        <label class="custom-control-label" for="checkbox1">
                                            Oui
                                        </label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="typeofbedroom" id="checkbox2" value="sanitaire">
                                        <label class="custom-control-label" for="checkbox2">
                                           Nom 
                                        </label>
                                      </div>
                                </div>
                                
                                <div class="panel-body">
                                    <p>
                                        Le loyer est de : 
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