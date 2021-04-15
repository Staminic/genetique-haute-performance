<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
    <jdoc:include type="head" />
</head>

<body class="site <?php echo $active->alias . ($pageclass ? ' ' . $pageclass : ''); ?>">
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                    <a class="navbar-brand" href="/"><img class="img-fluid" src="templates/genetique-haute-performance/img/badge.png" alt="Logo Génétique Haute Performance" /></a>
                    <div class="wrapper">
                        <p class="d-none d-md-block slogan">Éleveurs Holstein</p>
                        <a hef="#" class="text-white">Connexion</a>
                    </div>
                
                <!--
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><img src="templates/genetique-haute-performance/img/bars-solid.svg" /></span>
                </button>
                -->

                <div class="collapse navbar-collapse flex-column" id="navbarsExampleDefault">
                    <jdoc:include type="modules" name="navbar" />
                </div>
            </div>
        </nav>
    </header>

    <main class="main container">
        <div class="row">
            <div class="col-12">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
            </div>
        </div>
    </main>

    <footer class="footer pt-1 pb-5">
        <div class="container">
            <jdoc:include type="modules" name="footer" />
        </div>
    </footer>

    <jdoc:include type="modules" name="debug" />
    <script src="templates/genetique-haute-performance/build/app.js"></script>
</body>

</html>
