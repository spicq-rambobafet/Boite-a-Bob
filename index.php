<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>La boite à Bob</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/ico" href="favicon.ico" />
        
        <!-- Icons -->
        <link href="http://rambobafet.fr/boite-a-bob/apple-touch-icon.png" rel="apple-touch-icon" />
        <link href="http://rambobafet.fr/boite-a-bob/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
        <link href="http://rambobafet.fr/boite-a-bob/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
        <link href="http://rambobafet.fr/boite-a-bob/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
        <link href="http://rambobafet.fr/boite-a-bob/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
        <link href="http://rambobafet.fr/boite-a-bob/icon-hires.png" rel="icon" sizes="192x192" />
        <link href="http://rambobafet.fr/boite-a-bob/icon-normal.png" rel="icon" sizes="128x128" />
        
        <!-- Facebook -->
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:title" content="La Boite à Bob" />
        <meta property="og:site_name" content="Boite à Bob"/>
        <meta property="og:url" content="http://rambobafet.fr/boite-a-bob/" />
        <meta property="og:description" content="La boite à Bob c'est le very best of des répliques quotidiennes du Bob. C'est un peu le Max Hit Summer 2015 volume 1 de tes jours de boulot quoi.
        90% de private jokes, but who cares ? POPOPOPOPOPOPO" />
        <meta property="og:type" content="article" />
        <meta property="article:author" content="https://www.facebook.com/rambobafet" />
        <meta property="og:image" content="http://rambobafet.fr/boite-a-bob/fb-pict.jpg" />
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <script src="js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/style.css">
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

        <script src="js/app.js"></script>

    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1506210189653740&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <header>
            <h1>La boite à Bob</h1>
            <div id="slider"></div>
            <div class="clearfix"></div>
        </header>

        <section class="container-fluid">
            <div class="row">
                <?php foreach ($sounds as $key => $value): ?>
                    <article data-sound="<?php echo $value['file']; ?>" class="text-center col-lg-1 col-md-2 col-sm-3 col-xs-6" style="background:#<?php echo $value['color']; ?>">
                        <p><?php echo $value['description']; ?></p>
                        <audio preload="auto">
                            <source src="sounds/ogg/<?php echo $value['file']; ?>.ogg" type="audio/ogg">
                            <source src="sounds/mp3/<?php echo $value['file']; ?>.mp3" type="audio/mpeg">
                            Votre navigateur est trop vieux pour utiliser les fonctionnalités de ce site
                        </audio> 
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
        
        <footer>
            <table>
                <tr>
                    <td class='fb'><div class="fb-share-button" data-href="http://rambobafet.fr/boite-a-bob/" data-layout="button_count"></div></td>
                    <td class='twitter'><a href="https://twitter.com/share" class="twitter-share-button" data-via="Kheltdire" data-hashtags="BobInDaBox">Tweet</a></td>
                </tr>
            </table>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </footer>
    </body>
</html>