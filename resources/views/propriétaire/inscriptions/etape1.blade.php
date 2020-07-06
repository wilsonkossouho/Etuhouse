@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="log_register">
                        <div class="h2 title_log_register">Formulaire <br> Agent immobilier</div> 
                        <div class="form_connect">
                            <form action="/propriétaire/inscriptions/etape2">
                                <div class="panel-heading">
                                    <p>Détails logement - Etape 1</p>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Quel type de logement proposez vous ?
                                    </p>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="typeofbedroom" id="checkbox1" value="simple">
                                        <label class="custom-control-label" for="checkbox1">
                                            Sanitaire
                                        </label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="typeofbedroom" id="checkbox2" value="sanitaire">
                                        <label class="custom-control-label" for="checkbox2">
                                           Nom Sanitaire
                                        </label>
                                      </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Je propose
                                    </p>
                                    <div class="custom-control custom-radio ">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio1" value="simple">
                                        <label class="custom-control-label" for="radio1">
                                            1 Entrée coucher
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio2" value="sanitaire">
                                        <label class="custom-control-label" for="radio2">
                                            1 Chambre à coucher - 1 Salon
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
                                        Faisons le choix des compartiments du logement
                                    </p>
                                    <div class="custom-control custom-radio ">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio1" value="simple">
                                        <label class="custom-control-label" for="radio1">
                                            a - Salon
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio2" value="sanitaire">
                                        <label class="custom-control-label" for="radio2">
                                            b- Cuisine
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio3" value="sanitaire">
                                        <label class="custom-control-label" for="radio3">
                                            c- Salle de bain
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio4" value="sanitaire">
                                        <label class="custom-control-label" for="radio4">
                                            d- Chambre à coucher
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio5" value="sanitaire">
                                        <label class="custom-control-label" for="radio5">
                                            e- a+b+c+d ensemble dans une salle
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio6" value="sanitaire">
                                        <label class="custom-control-label" for="radio6"> 
                                            <input type="text" class="inputAutre" placeholder="Autre :">
                                        </label>
                                      </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Quel est l'état des compartiments
                                    </p>
                                    <select class="custom-select">
                                        <option selected disabled>Sélectionner</option>
                                        <option value="1">Nouvelle Construction</option>
                                        <option value="2">Nouvelle, déja occupper une fois</option>
                                      </select>
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