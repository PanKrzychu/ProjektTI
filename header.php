<!DOCTYPE html>
<html lang="pl">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $page_title?></title> <!-- Nazwa strony jest wyświetlana za pomocą zmiennej-->
    <meta name="description" content="Poznaj mistrzów KSW">
    <meta name="keywords" content="mma, ksw, mistrzowie, mistrz, fighters, sztuki walki"> <!-- Po co to? XD -->
    <meta name="author" content="Krzysztof Czachor">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.google.com/?subset=latin-ext&selection.family=Roboto+Slab:400,700">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

</head>

<body>
<header>
    <nav class = "navbar navbar-light bg-fighters navbar-expand-md">
        <a class = "navbar-brand" href = "index.php"><img src="img/belt.png" width="50" height="auto" alt="">Mistrzowie KSW</a>
        <button class = "navbar-toggler" type ="button" data-toggle="collapse" data-target="#menu" aria-controls="manu" aria-expanded="false" aria-label="Przełącznik nawigacji">
            <span class = "navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="mistrzowie?obecni">Obecni Mistrzowie</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true">Byli mistrzowie</a>
                    <div class="dropdown-menu" aria-labelledby="submenu">
                        <a class="dropdown-item" href="mistrzowie?byli=ciężka">Ciężka</a>
                        <a class="dropdown-item" href="mistrzowie?byli=półciężka">Półciężka</a>
                        <a class="dropdown-item" href="mistrzowie?byli=średnia">Średnia</a>
                        <a class="dropdown-item" href="mistrzowie?byli=półśrednia">Półśrednia</a>
                        <a class="dropdown-item" href="mistrzowie?byli=lekka">Lekka</a>
                        <a class="dropdown-item" href="mistrzowie?byli=piórkowa">Piórkowa</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</header>