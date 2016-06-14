<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Laravel App Site</title>
        @include('admin._partials.assets')
    </head>
    
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Laravel App Site</a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <!--
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Dashboard</a></li>
                  <li><a href="#">Settings</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Help</a></li>
                </ul>
                -->
                @include('admin._partials.navigation')
                <!--
                <form class="navbar-form navbar-right">
                  <input type="text" class="form-control" placeholder="Search...">
                </form>
                -->
              </div>
            </div>
        </nav>
        <hr />
        <div class='container'>
            @yield('main')
        </div>
    </body>
</html>