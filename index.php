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
        <?php if ($this->countModules('blazon')) : ?> 
            <jdoc:include type="modules" name="blazon" />
        <?php endif; ?>

        <nav class="navbar navbar-expand-md">
            <div class="container-lg">
                <a class="navbar-brand" href="/"><img src="templates/genetique-haute-performance/img/genes-diffusion-logo-nega.svg" alt="Logo Gènes Diffusion" /></a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><img src="templates/genetique-haute-performance/img/bars-solid.svg" /></span>
                </button>

                <div class="collapse navbar-collapse flex-column" id="navbarsExampleDefault">
                    <jdoc:include type="modules" name="navbar" />
                    <p class="small font-weight-bold text-secondary text-center align-self-md-end"><span class="px-3">Hotline&nbsp;: 03&nbsp;27&nbsp;99&nbsp;54&nbsp;67</span></p>
                </div>
            </div>
        </nav>

        <?php if ($menu->getActive() == $menu->getDefault()) : ?>
            <h1 class="sitename">
                Conférence en ligne <strong>L'ÉLEVAGE HAUTE PERFORMANCE</strong>
            </h1>
        <?php else : ?>
            <h2 class="h1 sitename">
                Conférence en ligne <strong>L'ÉLEVAGE HAUTE PERFORMANCE</strong>
            </h2>
        <?php endif; ?>
        
        <?php if ($this->countModules('connexion-notification')) : ?>
            <jdoc:include type="modules" name="connexion-notification" />
        <?php endif; ?>
    </header>

    <main class="main container pt-5">
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
