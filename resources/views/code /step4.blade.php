<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

      {{--href="{{route('Administration')}}"--}}  
    <h3>Review Details</h3>
  
    @if($user==null)
        
        {{ csrf_field() }}
        <table class="table">
            <tr>
                <td>Prix:</td>
                <td><strong>{{$location->prix_voulu}}</strong></td>
            </tr>
            <tr>
                <td>Type:</td>
                <td><strong>{{$location->type}}</strong></td>
            </tr>
            <tr>
                <td>Quatier:</td>
                <td><strong>{{$location->quatier}}</strong></td>
            </tr>
           
        </table>
        <a type="button" href="/etape1" class="btn btn-warning">Back to Step 1</a>
        <a type="button" href="/etape2" class="btn btn-warning">Back to Step 2</a>
        <a type="button" href="/etape3" class="btn btn-warning">Back to Step 3</a>
            <a type="button" href="/login" class="btn btn-warning">Continue</a>
    
        @else
        
        <form action="/stor" method="post" > 
                {{ csrf_field() }}
        <table class="table">
            <tr>
                <td>Prix:</td>
                <td><strong>{{$location->prix_voulu}}</strong></td>
            </tr>
            <tr>
                <td>Type:</td>
                <td><strong>{{$location->type}}</strong></td>
            </tr>
            <tr>
                <td>Quatier:</td>
                <td><strong>{{$location->quatier}}</strong></td>
            </tr>
           
        </table>
        <a type="button" href="/etape1" class="btn btn-warning">Back to Step 1</a>
        <a type="button" href="/etape2" class="btn btn-warning">Back to Step 2</a>
        <a type="button" href="/etape3" class="btn btn-warning">Back to Step 3</a>
    
     <button type="submit" class="btn btn-primary">Add location</button>
    </form> 
        
      @endif
    </body>
</html>