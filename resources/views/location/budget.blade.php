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
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Étape 3 sur 4</div>
                        </div>
                        <form action="">
                            <div class="snd-block-section">
                                <strong>Combien es tu prêt à payer par mois ?</strong>
                                <p>Le loyer moyen à Zogbadjè pour 1 chambre à couché - 1 salon sanitaire est de 20 000 FCFA</p>
                                <div class="graph">

                                </div>
                                <pre>  18 000                 30 000                  60 000</pre>
                                <input type="text" class="align" placeholder="Entrez le prix">
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