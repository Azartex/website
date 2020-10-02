<?php
    include '_inc.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Juliann Hervio</title>
    
    <link rel="icon" href="images/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target="#navbarTogglerDemo">
    <!-- Header -->
    <header>

        <!-- Navbar -->
        <div class="container" id="accueil">
            <nav class="navbar navbar-expand-lg navbar-dark">

                <!-- Navbar Nom -->
                <a href="#accueil" class="navbar-name">
                    <h3>Juliann Hervio</h3>
                </a>
                <!-- Fin Navbar Nom -->

                <!-- Navbar Menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbarTogglerDemo" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#accueil" class="nav-link active">Accueil</a>
                        </li>

                        <li class="nav-item">
                            <a href="#apropos" class="nav-link">À Propos</a>
                        </li>

                        <li class="nav-item">
                            <a href="#cv" class="nav-link">CV</a>
                        </li>

                        <li class="nav-item">
                            <a href="#loisirs" class="nav-link">Loisirs</a>
                        </li>

                        <li class="nav-item">
                            <a href="#realisations" class="nav-link">Mes Réalisations</a>
                        </li>

                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- Navbar Menu -->
            </nav>
        </div>
        <!-- Fin Navbar -->

        <!-- Intro -->
        <div class="home-intro segments">
            <div class="container">
                <div class="intro-contenu box-contenu-intro box-contenu">
                    <div class="row justify-contenu-center">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="intro">
                                <span>Étudiant en 3ème année de Bachelor Web Développement,   My Digital School Bruz (35170)</span><br>
                                <span>Actuellement à la recherche d'une alternance en développement web</span>

                                <h2>Juliann Hervio</h2>

                                <a href="#contact">
                                    <div class="button">
                                        <button class="button">Me Contacter</button>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="intro-image">
                                <img src="images/moi.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Intro -->

    </header>
    <!-- Fin Header -->

    <!-- A propos -->
    <div id="apropos" class="about segments">
        <div class="container">
            <div class="box-contenu">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="contenu-left">
                            <div class="section-title section-title-left">
                                <h3>À propos</h3>
                            </div>

                            <div class="contenu"> 
                                <h2>À propos de moi</h2>

                                <p style="text-align: justify;">
                                    Bonjour ! Je m'appelle Juliann Hervio, j'ai 19 ans, et je suis en troisième année de Bachelor Web Développement à Bruz (35). J’ai créé ce site afin de vous offrir une vision détaillée de mon parcours, de mes compétences ainsi que de mes réalisations. 
                                    Passionné par l'informatique en général et par le monde du Web depuis mon plus jeune âge, j’ai décidé de poursuivre dans cette voie après mon DUT en m'orientant dans le domaine du Web. <br> <br> Mon parcours m’a permis de développer des compétences dans des domaines variés de l’informatique et des réseaux.
                                    Je suis une personne qui aime travailler en équipe, j’ai joué au basket pendant 9 ans. J’ai aussi pu travailler en groupe de nombreuses fois lors de différents projets réalisés durant mon DUT et au cours de mon stage au service informatique de la Conserverie Chancerelle où j'ai intégré une équipe de 4 personnes pendant 4 mois. <br> <br>
                                    Récemment admis en Bachelor Web Développement (3ème année) à My Digital School Rennes, je suis à la recherche d'une entreprise pour effectuer mon alternance dès la rentrée 2020. Afin d'approfondir mes connaissances professionnelles en mettant en application les connaissances que j'ai acquises personnellement et au cours de mes deux années de formation.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="contenu-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin A propos -->

    <!-- CV -->
    <div id="cv" class="cv segments">
        <div class="container">
            <div class="box-contenu">
                <div class="section-title">
                    <h3>CV</h3>
                </div>

                <div class="owl-carousel owl-theme">
                    <div class="contenu">
                        <!-- Formations -->
                        <div class="row ">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="contenu-left">
                                    <div class="title-cv">
                                        <h3>Formations</h3>

                                        <h2>Mes<br><span>Formations</span></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="contenu-right">
                                    <ul class="timeline">
                                        <li>
                                            <h4>My Digital School Rennes</h4>

                                            <span>Bachelor Web Développement (2020 - 2021)</span>
                                        </li>

                                        <li>
                                            <h4>IUT Lannion</h4>

                                            <span>DUT Réseaux & Télécommunications (2018 - 2020)</span>
                                        </li>

                                        <li>
                                            <h4>Lycée Jeanne d'Arc Pontivy</h4>

                                            <span>Bac Technologique STI2D option SIN - Mention Bien (2016 - 2018)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Formations -->
                    </div>

                    <div class="contenu">
                        <!-- Compétences -->
                        <div class="mes-competences">
                            <div class="row ">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="contenu-left">
                                        <div class="title-cv">
                                            <h3>Compétences</h3>

                                            <h2>Mes<br><span>Compétences</span></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="contenu-right">
                                        <div id="accordioncompetence" class="accordion">
                                            <div class="card">
                                                <div id="procompetence" class="card-header">
                                                    <h2>
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                                            <i class="fas fa-circle"></i>Informatiques
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse1" class="collapse" aria-labelledby="procompetence" data-parent="#accordioncompetence">
                                                    <div class="card-body">
                                                        <ul class="pro-competence">
                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fab fa-html5"></i>  HTML</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title testtest">
                                                                    <span><i class="fab fa-css3-alt"></i>  CSS</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fab fa-js-square"></i>  JavaScript (Vue.js)</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fab fa-php"></i>  PHP (Symfony)</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fab fa-bootstrap"></i>  Bootstrap</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fas fa-database"></i>  SQL</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fab fa-git-alt"></i>  Git</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fab fa-windows"></i>  Administration Système (Linux - Windows)</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fas fa-network-wired"></i>  Réseaux Informatiques</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fas fa-code"></i>  C</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fab fa-java"></i>  Java</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fab fa-python"></i>  Python</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div id="procompetence" class="card-header">
                                                    <h2>
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                            <i class="fas fa-circle"></i>Linguistiques
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse2" class="collapse" aria-labelledby="procompetence" data-parent="#accordioncompetence">
                                                    <div class="card-body">
                                                        <ul class="pro-competence">
                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fas fa-flag-usa"></i>    Anglais</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fas fa-language"></i>   Espagnol</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div id="procompetence" class="card-header">
                                                    <h2>
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                            <i class="fas fa-circle"></i>Autres  
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse3" class="collapse" aria-labelledby="procompetence" data-parent="#accordioncompetence">
                                                    <div class="card-body">
                                                        <ul class="pro-competence">
                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fas fa-file-word"></i>   Pack Microsoft Office</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fab fa-adobe"></i>  Adobe Photoshop</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fab fa-adobe"></i>  Adobe Illustrator</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fab fa-adobe"></i>  Adobe Lightroom</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fab fa-figma"></i>   Figma</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fab fa-slack"></i>  Slack</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="competence-title">
                                                                    <span><i class="fas fa-file-video"></i>   Sony Vegas</span>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Compétences -->
                    </div>

                    <div class="contenu">
                        <!-- Expériences -->
                        <div class="row ">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="contenu-left">
                                    <div class="title-cv">
                                        <h3>Expériences</h3>

                                        <h2>Mes expériences<br><span>Professionnelles</span></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="contenu-right">
                                    <ul class="timeline">
                                        <li>
                                            <h4>Conserverie Chancerelle, Douarnenez</h4>

                                            <span>Technicien Support Informatique (Août 2020 - Septembre 2020)</span>
                                        </li>

                                        <li>
                                            <h4>Conserverie Chancerelle, Douarnenez</h4>

                                            <span>Stage Technicien Support Informatique (Mai 2020 - Juillet 2020)</span>
                                        </li>

                                        <li>
                                            <h4>Boscher Volailles, Mûr de Bretagne</h4>

                                            <span>Opérateur préparateur de commande (Juillet 2019 - Août 2019)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Expériences -->
                    </div>
                </div>  

                <!-- Télécharger mon CV -->
                <div class="button btn-cv">
                    <button class="btn btn-primary" type="submit" onclick="window.open('docs/CV.pdf')">Télécharger mon CV</button>
                </div>
                <!-- Fin Télécharger mon CV -->
            </div>
        </div>
    </div>
    <!-- Fin CV -->

    <!-- Loisirs -->
    <div id="loisirs" class="loisirs segments">
        <div class="container">
            <div class="box-contenu box-contenu-loisirs">
                <div class="section-title section-title-loisirs">
                    <h3>Loisirs</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="contenu">
                        <div class="image"></div>

                        <div class="loisirs-contenu">
                            <h4>Sports</h4>

                            <div class="loisirs-icon">
                                <i class="fas fa-basketball-ball"></i>  Basketball (9 ans en club)
                            </div>

                            <div class="loisirs-icon">
                                <i class="fas fa-table-tennis"></i>  Tennis de table (2 ans en club)
                            </div>

                            <div class="loisirs-icon">
                                <i class="fas fa-futbol"></i>  Football (2 ans en club)
                            </div>

                            <div class="loisirs-icon">
                                 
                            </div>

                            <div class="loisirs-icon">
                                 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contenu no-mb">
                        <div class="image"> </div>
                        
                        <div class="loisirs-contenu">
                            <h4>J'aime aussi</h4>

                            <div class="loisirs-icon">
                                <i class="fas fa-coins"></i>   Poker
                            </div>

                            <div class="loisirs-icon">
                                <i class="fas fa-laptop-code"></i></i>  Création de sites web
                            </div>

                            <div class="loisirs-icon">
                                <i class="fas fa-photo-video"></i>  Édition Photo - Video
                            </div>

                            <div class="loisirs-icon">
                                <i class="fas fa-gamepad"></i>  Jeux vidéos
                            </div>

                            <div class="loisirs-icon">
                                <i class="fas fa-globe-americas"></i>   Voyages
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Loisirs -->

    <!-- Mes Réalisations -->
    <div id="realisations" class="cv segments">
        <div class="container">
            <div class="box-contenu">
                <div class="section-title">
                    <h3>Mes Réalisations</h3>
                </div>

                <div class="cv-filter-menu">
                    <ul>
                        <li data-filter="all" class="active">
                            <span>Tout voir</span>
                        </li>

                        <li data-filter="1">
                            <span>Sites Web</span>
                        </li>

                        <li data-filter="2">
                            <span>Apps Mobiles</span>
                        </li>
                    </ul>
                </div>

                <div class="row no-gutters filtr-container">
                    <div class="col-md-4 col-sm-12 col-xs-12 filtr-item" data-category="1">
                        <div class="contenu-image">
                            <a href="/Restaurant" target="blank" class="image-realisation">
                                <img src="images/resto.png">

                                <div class="image-overlay"></div>

                                <div class="cv-caption">
                                    <div class="title">
                                        <h4>Restaurant Fictif</h4>
                                    </div>

                                    <br>

                                    <div class="subtitle">
                                        <span>Site Web (HTML/CSS)</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 filtr-item" data-category="1">
                        <div class="contenu-image">
                            <a href="/Blog" target="blank" class="image-realisation">
                                <img src="images/blog.png" alt="">

                                <div class="image-overlay"></div>

                                <div class="cv-caption">
                                    <div class="title">
                                        <h4>Blog</h4>
                                    </div>

                                    <br>

                                    <div class="subtitle">
                                        <span>Site Web (HTML/CSS)</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 filtr-item" data-category="1">
                        <div class="contenu-image">
                            <a href="/Social" target="blank" class="image-realisation">
                                <img src="images/social.png" alt="">

                                <div class="image-overlay"></div>

                                <div class="cv-caption">
                                    <div class="title">
                                        <h4>Réseau Social</h4>
                                    </div>

                                    <br>

                                    <div class="subtitle">
                                        <span>Site Web (HTML/CSS)</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 filtr-item" data-category="2">
                        <div class="contenu-image">
                            <a href="#1">
                                <img src="images/encours.jpg" alt="">

                                <div class="image-overlay"></div>

                                <div class="cv-caption">
                                    <div class="title">
                                        <h4>En cours</h4>
                                    </div>

                                    <br>

                                    <div class="subtitle">
                                        <span>En cours</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 filtr-item" data-category="2">
                        <div class="contenu-image">
                            <a href="#1">
                                <img src="images/encours.jpg" alt="">

                                <div class="image-overlay"></div>

                                <div class="cv-caption">
                                    <div class="title">
                                        <h4>En cours</h4>
                                    </div>

                                    <br>

                                    <div class="subtitle">
                                        <span>En cours</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 filtr-item" data-category="2">
                        <div class="contenu-image">
                            <a href="#1">
                                <img src="images/encours.jpg" alt="">

                                <div class="image-overlay"></div>

                                <div class="cv-caption">
                                    <div class="title">
                                        <h4>En cours</h4>
                                    </div>

                                    <br>

                                    <div class="subtitle">
                                        <span>En cours</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Mes Réalisations -->

    <!-- Contact -->
    <div id="contact" class="contact segments">
        <div class="container">
            <div class="box-contenu">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="contenu-left">
                            <div class="section-title section-title-left contact-title">
                                <h3>Contact</h3>
                            </div>

                            <h2>Me Contacter</h2>

                            <ul class="ul-contact">
                                <li>
                                    <a href="https://m.me/juliannhervio" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
                                </li>

                                <li>
                                    <a href="https://www.instagram.com/juliann.909" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>

                                <li>
                                    <a href="https://www.linkedin.com/in/juliann-hervio-2795291a7" target="_blank"><i class="fab fa-linkedin"></i></a>
                                </li>

                                <li>
                                    <a href="tel:+330750396958"><i class="fas fa-phone"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">

                        <div class="contenu-right">
                            <form onsubmit="return validateForm()" name="contactForm" method="POST" action="post_contact.php" class="contact-form" id="contact-form" >
                                <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
                                <div class="row">
                                    <div class="col">
                                        <div id="first-name-field">
                                            <?= $form->text('name', 'Nom'); ?>
                                            
                                            <div class="error" id="nameErr"></div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div id="email-field">
                                            <?= $form->email('email', 'Adresse mail'); ?>

                                            <div class="error" id="emailErr"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div id="message-field">
                                              <?= $form->textarea('message', 'Message');?>
                                            <div class="error" id="messageErr"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="button">
                                    <?= $form->submit('Envoyer'); ?>
                                </div>

                                <br>

                                <br>

                                <?php if(array_key_exists('errors', $_SESSION)): ?>
                                    <div class="alert alert-danger">
                                        <?= implode('<br>', $_SESSION['errors']); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if(array_key_exists('success', $_SESSION)): ?>
                                    <div class="alert alert-success">
                                        Votre message a bien été envoyé
                                    </div>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Contact -->

    <!-- Footer -->
    <div class="footer segments">
        <div class="container">
            <div class="box-contenu">
                <p style="letter-spacing: 0.8px;" >Copyright © Juliann Hervio 2020</p>
            </div>
        </div>
    </div>
    <!-- Fin Footer -->

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.filterizr.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/main.js"></script>
    <!-- Fin Scripts -->
</body>

</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>