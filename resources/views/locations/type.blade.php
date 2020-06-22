@extends('../layouts.app')

@section('content')
    <div class="basic">
        <div class="row">
            <div class="col-lg-5 container">
                <div class="log_register">
                    <div class="etape">
                        <div class="block-section">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{ config('APP_URL') }}/Image/profile.png" class="block-img" alt="profile">
                                </div>
                                <div class="col-sm-8 block-title">
                                    <b>Bienvenue Camarade Etudiant !</b> <br>
                                    Démarrons ensemble ton expérience en 4 petites étapes !
                                </div>
                            </div>
                        </div>
                        <div class="progress block-progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">Étape 2 sur 4</div>
                        </div>
                        <form action="/locations/budget">
                            <div class="snd-block-section">
                                <strong>Quel type de logement désires tu ?</strong>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeofbedroom" id="Radios1" value="simple">
                                    <label class="form-check-label" for="type">
                                      Simple
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeofbedroom" id="Radios2" value="sanitaire">
                                    <label class="form-check-label" for="type">
                                      Sanitaire
                                    </label>
                                  </div>
                            </div>
                            <div class="snd-block-section">
                                <strong>Plus de précision </strong>
                                   <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeofbedroomWithPrecision" id="Radios3" value="simple">
                                    <label class="form-check-label" for="type">
                                        Entrée couchée
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeofbedroomWithPrecision" id="Radios4" value="sanitaire">
                                    <label class="form-check-label" for="type">
                                        1 Chambre à couché - 1 Salon
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeofbedroomWithPrecision" id="Radios5" value="sanitaire">
                                    <label class="form-check-label" for="type">
                                        2 Chambres à coucher - 1 Salon
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeofbedroomWithPrecision" id="Radios5" value="sanitaire">
                                    <label class="form-check-label" for="type">
                                        Autre
                                    </label>
                                  </div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-lg btn-block btn-input btn-block-section">Suivante</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 image-section"></div>
        </div>
    </div>
@stop