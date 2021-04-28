<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
    <jdoc:include type="head" />
</head>

<body class="site <?php echo $active->alias . ($pageclass ? ' ' . $pageclass : ''); ?>">
    <header id="header" class="header">
        <div class="container-xl">
            <a class="navbar-brand" href="/"><img class="img-fluid" src="templates/genetique-haute-performance/img/badge2.png" alt="Logo Génétique Haute Performance" /></a>
            <div class="wrapper">
                <nav class="nav signin">
                    <a class="nav-link" href="/connexion" class="mt-auto text-white">Accès éleveur</a>
                    <a class="nav-link" href="/connexion" class="mt-auto text-white">Accès technicien</a>
                </nav>
            </div>
        </div>
    </header>

    <?php if ( $this->countModules('navbar') ) : ?>
        <nav class="navbar navbar-expand d-none d-lg-block sticky-top">
            <!--
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navModules" aria-controls="navModules" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><img src="templates/genetique-haute-performance/img/bars-solid.svg" /></span>
            </button>
            -->

            <div class="collapse navbar-collapse" id="navModules">
                <div class="container-xl">
                    <jdoc:include type="modules" name="navbar" />
                </div>
            </div>
        </nav>
    <?php endif; ?>


    <main class="main container">
        <div class="row">
            <div class="col-12">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
            </div>
        </div>
    </main>

    <footer class="footer py-3">
        <div class="container">
            <jdoc:include type="modules" name="footer" />
        </div>
    </footer>

    <jdoc:include type="modules" name="debug" />
    <!-- <script src="templates/genetique-haute-performance/build/app.js"></script> -->
</body>

</html>
