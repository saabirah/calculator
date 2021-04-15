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

                  <form action="calculation" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-9 m-auto">
                            <input type="number" name="premierevariable"
                            class="form-control" placeholder=" entrer le premier nombre " required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-9 m-auto">
                            <input type="number" name="secondevariable"
                            class="form-control" placeholder=" entrer le deuxieme nombre " required>
                        </div>
                    </div>

                    <div class="form-group row mb-5">
                        <div class="col-md-9 m-auto">
                            <select name="operateur"   class="form-control"  >
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                            </select>
                        </div>
                    </div>
                    <input type="submit"
                    name="btn" class="btn btn-primary" value="entrer">

                  </form>
               </div>
           </div>
       </div>
    </div>
</body>
</html>
