<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        {{-- https://fonts.google.com/specimen/Montserrat?query=mon&sidebar.open&selection.family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900#standard-styles --}}

        <!-- Bootstrap core CSS -->
            <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

        
        <link rel="stylesheet" href="/css/style.css">
        
    </head>
    <body id="basic-setup">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ config('APP_URL') }}/Image/logo.png" width="167px" height="70px" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item na ">
                    <a class="nav-link" href="/connexion">Connexion</a>
                    </li>
                    <li class="nav-item na lien">
                    <a class="nav-link" href="/inscription">Inscription</a>
                    </li>
                    <li class="nav-item lien">
                    <a class="nav-link btn btn-vrt btnhome" href="/inscriptionAgent">Je propose une location</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>