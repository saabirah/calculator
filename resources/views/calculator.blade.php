<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: blanchedalmond
            }
        </style>
    </head>

<body>
    <div class="container text-center  ">
        <div class="row mt-5">
            <div class="col-md-6 m-auto">
                <div class="card bg-info">
                  <h1 class="mt-3 mb-5">    Calculatrice</h1>
                  @if(Session::has('message'))
                  <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                  @endif

                    <form action="/ajouter" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-9 m-auto">
                                <input type="number" name="first"
                                class="form-control" placeholder=" entrer le premier nombre " required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-9 m-auto">
                                <input type="number" name="second"
                                class="form-control" placeholder=" entrer le deuxieme nombre " required>
                            </div>
                        </div>
                        <input type="submit"
                        name="btn" class="btn btn-primary" value="entrer">
                    </form>
               </div>
           </div>
           <div class="col-md-6 m-auto">
               <div class="card bg-info ">

                        <h2 class='mt-3 mb-5'>
                            RESULTAT
                        </h2>


                   <div class="">

                    <h2 class='mt-3 mb-5'>
                        listes des opérations effectuées
                    </h2>
               </div>
               .

                   <table class="table table-striped mx-2">
                    @if(Session::has('messag'))
                    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('messag') }}</p>
                    @endif
                       <thead>
                         <tr>
                           <th scope="col">N°</th>
                           <th scope="col">premier nombre</th>
                           <th scope="col">deuxieme nombre</th>
                           <th scope="col">somme</th>
                           <th scope="col">action</th>

                         </tr>
                       </thead>
                       <tbody>
                    @foreach ($sommes as $somme)
                         <tr>
                           <th scope="row"></th>
                           <td>{{$somme->first}}</td>
                           <td>{{$somme->second}}</td>
                           <td>{{$somme->somme}}</td>
                           <td>
                            <form action=" {{route('supp', $somme->id)}} " method="post" class="d-inline">
                                @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger"> supprimer</button>
                              </form>
                        </td>
                         </tr>
                  @endforeach
                       </tbody>
                     </table>

               </div>


           </div>
       </div>
    </div>
</body>
</html>
