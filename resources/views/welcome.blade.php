<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>O6U Students Container</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css"> 
        <link href="css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <section class="hero is-fullheight">
          <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title has-text-dark">
                    O6U Students Container
                </h1>

                <form action="search" method="GET">
                <div class="field is-grouped">
                  <p class="control is-expanded">
                    <input class="input" type="text" name="q" placeholder="Material Name">
                  </p>
                  <p class="control">
                    <input type="submit" value="Search" class="button is-info">
                  </p>
                </div>
                </form>

                <section class="hero">
                  <div class="hero-body">
                    <div class="container">
                    <h3 class="title">Courses</h3>
                    @php
                    $count = 0;
                    @endphp
                    @foreach($courses as $course)
                    <a class="tag is-info" href="{{ url("/course/{$count}") }}">{{ $course }}</a>
                    @php
                    $count++;
                    @endphp
                    @endforeach
                    
                    </div>
                  </div>
                </section>

            </div>
          </div>
        </section>

        <footer class="footer">
          <div class="container">
            <div class="content has-text-centered">
              <p>
                <strong>Developed</strong> by <a href="http://alshahen.me">Ahmed Hassan</a>
              </p>
            </div>
          </div>
        </footer>
    </body>
</html>
