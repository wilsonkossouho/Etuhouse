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
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">Étape 1 sur 4</div>
                        </div>
                        <form action="">
                            <div class="snd-block-section">
                                <p>Nous allons faire correspondre tes critères avec ceux des loueurs pour augmenter tes chances de trouver rapidement un logement</p>
                            </div>
                            <div class="snd-block-section">
                                <strong>Où souhaites tu habiter ? </strong>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select class="form-control" id="lieu">
                                              <option>Quartier</option>
                                              <option>Zogbadjè</option>
                                              <option>Ayichédji</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
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