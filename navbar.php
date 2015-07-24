
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="header">
        <div class="container">
            <div class="row-fluid">
                <h1 class="text-center cabe">HITHOT</h1>
                <p class="text-center">
                    <small class="text-center sub">Always Hot </small>
                    <small><i class="glyphicon glyphicon-copyright-mark"></i>
                    </small>
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">HITHOT</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-large">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorias <b class="caret"></b></a>

                    <ul class="dropdown-menu dropdown-menu-large row">
                        <?php
                        include 'function.php';
                        $response = sendRequest('redtube.Categories.getCategoriesList');
                        if ($response) {
                            $json = json_decode($response, true);
                             //$json['categories'][0]['category'];
                            $categories = $json['categories'];
                            //$categories[0]['category'];
                            foreach ($categories as $category) {
                                echo "
                                    <li class=\"col-sm-3\">
                                    <ul>
                                    <li><a href=\"#\">" . $category['category'] . "</a></li>
                                    <li class = \"divider\"></li>
                                    </ul>
                                    </li>";
                            }
                        }
                        ?>
                        <li><a href="categorias.php" class="text-center text-warning">Ver todas las categorias</a></li>
                    </ul>

                </li>
                <li><a href="function3.php">Actrices</a></li>
                <li><a href="function2.php">Prueba</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TOP 5 <span class="caret"></span></a>
                    <ul class = "dropdown-menu">
                        <li><a href = "#">Los mas vistos</a></li>
                        <li role = "separator" class = "divider"></li>
                        <li><a href = "#">Los mejor valorados</a></li>
                        <li role = "separator" class = "divider"></li>
                        <li><a href = "#">Los más votados</a></li>
                        <li role = "separator" class = "divider"></li>
                        <li><a href = "#">Lo más nuevo</a></li>
                        <li role = "separator" class = "divider"></li>
                        <li><a href = "#">Selección HITHOT</a></li>
                    </ul>
                </li>
                <li> <form class = "navbar-form" action = "rsBuscar.php" id = "formBuscar" name = "formBuscar" method = "POST" role = "search">
                        <div class = "input-group">
                            <input type = "text" class = "form-control small" placeholder = "Búsqueda" id = "busqueda" name = "busqueda" maxlength = "40" autofocus = "" required = "">
                            <div class = "input-group-btn">
                                <button class = "btn btn-primary" type = "button" id = "enviar" onclick = "validarBusqueda()"><i class = "glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
