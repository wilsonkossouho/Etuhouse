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
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">Étape 4 sur 4</div>
                        </div>
                        <form action="/locations/resume">
                            <div class="snd-block-section">
                                <strong>Souhaites tu vivre prêt d'un lieu en particulier?</strong>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeofbedroom" id="Radios1" value="simple">
                                    <label class="form-check-label" for="type">
                                      Oui
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeofbedroom" id="Radios2" value="sanitaire">
                                    <label class="form-check-label" for="type">
                                      Non
                                    </label>
                                  </div>
                                  <input type="text" placeholder="Non loin de L'UAC">
                            </div>
                            <button type="submit" class="btn btn-success btn-lg btn-block btn-input btn-block-section">Suivant</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 image-section"></div>
        </div>
    </div>
@stop