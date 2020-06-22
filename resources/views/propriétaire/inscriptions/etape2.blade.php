@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="log_register">
                        <div class="h2 title_log_register">Formulaire <br> Agent immobilier</div> 
                        <div class="form_connect">
                            <form action="/propriétaire/inscriptions/etape3">
                                <div class="panel-heading">
                                    <p>Détails logement - Etape 2</p>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Insérer le ou les photos des compartiments du logement
                                    </p>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1" style="display: none">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Où est situé le logement ?
                                    </p>
                                    <select class="custom-select">
                                        <option selected disabled>Sélectionner</option>
                                        <option value="1">Zogbadjè</option>
                                        <option value="1">Tanpkè</option>
                                        <option value="1">Maria-Gléta</option>
                                        <option value="1">AÏtchédji</option>
                                        <option value="1">Zopah</option>
                                        <option value="1">Togoudo</option>
                                        <option value="1">Gbégnigan - Midokpo</option>
                                        <option value="1">Assrossa</option>
                                        <option value="1">Aimevo</option>
                                        <option value="1">Houedonou</option>
                                        <option value="1">Topka - Kévi</option>
                                        <option value="1">Plateau</option>
                                    </select>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Donner une adresse précise du logement
                                    </p>
                                    <input type="text" class="inputAutre" placeholder="Votre réponse">
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Faisons le choix des compartiments du logement
                                    </p>
                                    <div class="custom-control custom-radio ">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio1" value="simple">
                                        <label class="custom-control-label" for="radio1">
                                            Analogique
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="typeofbedroom" id="radio2" value="sanitaire">
                                        <label class="custom-control-label" for="radio2">
                                            A carte
                                        </label>
                                      </div>
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