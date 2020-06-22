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
                                    <p class="h6" style="font-weight: 900; color:#414E97;">Bienvenue Camarade Etudiant !</p>
                                    <p style="font-size:15px">Démarrons ensemble ton expérience en 4 petites étapes !</p> 
                                </div>
                            </div>
                        </div>
                        <div class="progress block-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">Terminé</div>
                        </div>
                        <form action="/inscription">
                            <div class="snd-block-section">
                                <p class="textC" style="color:#414E97; ">Bravo !</p>
                                <p class="textC" style="font-size:15px">Maintenant, faisons un récapitulatif de ce que tu as entré depuis le début !</p>
                                <div style="padding: 10px; color:#414E97">
                                    <p><i class="fa fa-map-marker fa-2x" aria-hidden="true" style="margin: 10px 20px"></i>Zogbadjè</p>
                                    <p><i class="fa fa-bed fa-2x" aria-hidden="true" style="margin: 10px"></i>1 Chambre à coucher - 1 Salon</p>
                                    <p><i class="fa fa-money fa-2x" aria-hidden="true" style="margin: 10px"></i>18 000 - 30 000 F</p>
                                    <p><i class="fa fa-map-marker fa-2x" aria-hidden="true" style="margin: 10px 20px"></i>Non loin de UAC</p>
                                </div>
                                
                                <p class="textC" style="font-size:15px">Afin de pas perdre tes critère de logements ci dessus Nous t'exhortons à t'inscrire sur Etuhouse</p>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg btn-block btn-input btn-block-section">M'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 image-section"></div>
        </div>
    </div>
@stop