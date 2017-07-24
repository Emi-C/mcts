<?php
include('dbclass.php');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MICHETTA'S - PANINI MILANO</title>
        <meta name="description" content="MICHETTA'S - PANINI MILANO - Non è michetta se non fa le briciole">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
        <link href="https://fonts.googleapis.com/css?family=Bitter:400,400i,700|Raleway:400,700,700i" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/perfect-scrollbar.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
		    <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="overlay"></div><!--menù michetta-->
        <div class="sidemenu" id="mn1">
          <div class="chiudiside"><i class="fa fa-times"></i></div>
          <div class="sidecont">
            <div class="row push-bot">
              <div class="col-sm-4 nopadding">
                <div class="col-lg-12 center"><h4 class="white">Le Semplici</h4></div>
                <div class="col-xs-6">
                  <p>&nbsp;</p>
                  <p>Cotto - Edamer</p>
                  <p>Crudo - Mozzarella</p>
                  <p>Praga - Brie</p>
                  <p>Salame</p>
                  <p>Mortadella</p>
                  <p>Coppa</p>
                </div>
                <div class="col-xs-3 center">
                  <p><i>mini</i></p>
                  <p>€ 1,80</p>
                  <p>€ 1,80</p>
                  <p>€ 1,80</p>
                  <p>€ 1,50</p>
                  <p>€ 1,50</p>
                  <p>€ 1,50</p>
                </div>
                <div class="col-xs-3 center">
                  <p><i>normali</i></p>
                  <p>€ 3,50</p>
                  <p>€ 3,50</p>
                  <p>€ 3,50</p>
                  <p>€ 3,00</p>
                  <p>€ 3,00</p>
                  <p>€ 3,00</p>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="center"><h4 class="white">Le Dolci</h4></div>
                <p><i>mini € 1,50 / normali € 3,00</i></p>
                <p>Nutella</p>
                <p>Tavoletta cioccolato al latte</p>
                <p>Tavoletta cioccolato fondente</p>
                <p>Tavoletta cioccolato bianco</p>
                <p>Burro & Zucchero</p>
                <p>Burro & Marmellata</p>
                <p>Miele</p>
                <p>Cioccolato bianco & marmellata di fragole</p>
              </div>

              <div class="col-sm-4">
                <div class="center"><h4 class="white">I Nostri Toast</h4></div>
                <div class="col-xs-9">
                  <p>Cotto - Edamer</p>
                  <p>Crudo - Edamer - Farcitura</p>
                  <p>Speciale</p>
                </div>
                <div class="col-xs-3 center">
                  <p>€ 3,00</p>
                  <p>€ 3,50</p>
                  <p>€ 4,00</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 center">
                <h4 class="white">Le Speciali</h4>
                <p><b><i>BASE SALUME € 6,50</i></b></p>
                <p>PAMIO: Coppa, gorgonzola, pere, noci, rucola/iceberg</p>
                <p>PRESIDENTE: Crudo, taleggio, grana, rucola, crema di zucca, pepe</p>
                <p>SAN SIRO: Cotto, brie, provolone, ragu’ di carne, basilico, melanzane, paprika dolce, grana</p>
                <p>MAGENTA: Praga, brie, scamorza, palmito, rucola, pomodoro, crema di scampi</p>
                <p>BARONA: Salame piccante, doppio provolone, friarielli, uovo, salsa Geb</p>
                <p>MAU: Salame T. felino, brie, grana, mostarda di chi, rucola</p>
                <p>MARADEO: Porchetta, doppia scamorza, rucola, pomodoro, palmito, salsa tartara, cipolla</p>
                <p>MAX: Bresaola, brie, edamer, grana, rucola, limone, vodka</p>
                <p>NEW YORK: Tacchino, brie, crema al curry, spinaci, grana</p>
                <p>TOIO: Manzo affumicato, crema di rafano, taleggio, verdure grigliate, fontina, pomodoro, rucola</p>
                <p>SFORZESCO: Mortadella, taleggio, cetrioli, insalata, pomodoro, senape</p>
                <p>ZIG ZAG: Speck, taleggio, brie, rucola, palmito, pompelmo</p>
                <p>MIKONOS: Cotto, feta, olive, capperi, pomodoro, basilico, iceberg, cipolla</p>
                <p>TAZIO: Bresaola, doppia scamorza, rucola, cipolla, salsa Geb</p>
                <p>VALENTINO: Culatello, burro, ricotta dura salata, spinaci, uvetta</p>

                <p><b><i>BASE CARNE € 6,50</i></b></p>
                <p>CHICCO: Polpetta*, gorgonzola, grana, provola, melanzane, sugo di pomodoro, basilico</p>
                <p>CRUCCO: Wurstel, crauti, senape, salame piccante, brie</p>
                <p>BAUSCIA: Cotoletta*, crema di formaggio al tabasco, cheddar, salsa messico, salsa rosa, rucola, melanzane</p>
                <p>ARTEMIO: Maiale slacciato, stracchino, avocado, cipolla</p>
                <p>POLDO: Hamburger*, doppio cheddar, barbecue, pomodoro, insalata, cipolla</p>
                <p>WILLY COYOTE: Chily*, feta, iceberg, avocado, cipolla</p>

                <p><b><i>BASE PESCE € 7,00</i></b></p>
                <p>BUBBA: Gamberi*, avocado, pompelmo, rucola, peperoncino</p>
                <p>PREMIERATI: Tonno, stracchino, brie, uovo, iceberg, maionese, pomodoro, pepe rosa</p>
                <p>FRANCI: Salmone affumicato, alpigiana, aneto, rucola, fettine di limone, pepe</p>
                <p>ACCIUGHINO: Acciughe, bufala, basilico, peperoni, rucola</p>

                <p><b><i>BASE VERDURE € 6,00</i></b></p>
                <p>SUOCERA: Verdure cotte e crude (s.d.), taleggio, scamorza, salsa a piacere</p>
                <p>MADUNNINA: Verdure grigliate, iceberg, avocado, pomodoro, rucola, cipolla, peperoncino</p>

                <p><b><i>BASE FORMAGGI € 6,50</i></b></p>
                <P>LIGHT: mix di formaggi, rucola, mostarda o miele</P>
                <p>TRIFOLA: mix di formaggi, paté di carne, melanzane, olio tartufato</p>
                <p>2017 ASPESINA: mix di formaggi, ragù, basilico, melanzane</p>

                <p class="push-top">* Prodotto surgelato<br>I prodotti possono contenere allergeni e/o provocare intolleranze</p>
              </div>

            </div>
          </div>
        </div>
        <div class="sidemenu alt" id="mn2">
          <div class="chiudiside"><i class="fa fa-times"></i></div>
          <div class="sidecont">
            <div class="row center">
              <div class="col-md-12">
                <h4 class="white">Le tue Michette</h4>
                <p>“componi la tua michetta partendo da una base”</p>
              </div>
              <div class="col-lg-3"><p><i><b>base SALUME € 3,50</b></i></p></div>
              <div class="col-lg-3"><p><i><b>base CARNE € 4,00</b></i></p></div>
              <div class="col-lg-3"><p><i><b>base VERDURA € 3,00</b></i></p></div>
              <div class="col-lg-3"><p><i><b>base PESCE € 5,00</b></i></p></div>
            </div>
            <div class="row">
              <div class="col-sm-2 col-xs-4">
                <p><i><b>VERDURA<BR>+ €0,50</b></i></p>
                <p>pomodoro</p>
                <p>iceberg</p>
                <p>rucola</p>
                <p>verdure grigliate</p>
                <p>peperoni</p>
                <p>friarielli</p>
                <p>spinaci</p>
                <p>asparagi</p>
                <p>palmito</p>
                <p>crauti</p>
                <p>pomodori secchi</p>
                <p>cetrioli</p>
                <p>cipolla</p>
                <p>capperi</p>
                <p>olive</p>
                <p>patate</p>
              </div>
              <div class="col-sm-2 col-xs-4">
                <p><i><b>SALSE<BR>+ €0,50</b></i></p>
                <P>geb</P>
                <p>maionese</p>
                <p>senape</p>
                <p>tartara</p>
                <p>bernese</p>
                <p>tonnata</p>
                <p>rosa</p>
                <p>ketchup</p>
                <p>barbecue</p>
                <p>paté d'olive</p>
                <p>harissa</p>
                <p>messico</p>
                <p>guacamole</p>
                <p>verde</p>
              </div>
              <div class="col-sm-2 col-xs-4">
                <p><i><b>SALUMI<BR>+ €1,00</b></i></p>
                <p>praga</p>
                <p>cotto</p>
                <p>crudo</p>
                <p>bresaola</p>
                <p>manzo affum.</p>
                <p>salame piccante</p>
                <p>salame felino</p>
                <p>mortadella</p>
                <p>speck</p>
                <p>porchetta</p>
                <p>tacchino</p>
                <p>coppa</p>
              </div>
              <div class="clearfix visible-xs"></div>
              <div class="col-sm-2 col-xs-4">
                <p><i><b>SPEZIE<BR>+ €0,00</b></i></p>
                <P>curry</P>
                <p>curcuma</p>
                <p>peperoncino</p>
                <p>pepe</p>
                <p>pepe verde</p>
                <p>pepe rosa</p>
                <p>papavero</p>
                <p>sesamo</p>
                <p>origano</p>
                <p>basilico</p>
                <p>aneto</p>
              </div>
              <div class="col-sm-2 col-xs-4">
                <p><i><b>FORMAGGI<BR>+ €0,50</b></i></p>
                <p>provolone</p>
                <p>scamorza</p>
                <p>edamer</p>
                <p>brie</p>
                <p>grana</p>
                <p>stracchino</p>
                <p>feta</p>
                <p>mozzarella</p>
                <p>bufala</p>
                <p>taleggio</p>
                <p>zola</p>
                <p>alpigiana</p>
                <p>cheddar</p>
              </div>
              <div class="col-sm-2 col-xs-4">
                <p><i><b>CREME<BR>+ €0,50</b></i></p>
                <p>rucolina</p>
                <p>tartufata</p>
                <p>4 formaggi</p>
                <p>carciofi</p>
                <p>radicchio</p>
                <p>orticella</p>
                <p>fegatini</p>
                <p>noci</p>
                <p>paté di carne</p>
                <p>zucca</p>
                <p>scampi</p>
                <p>sugo ragù</p>
                <p>rafano</p>
                <p>olio tartufato</p>
                <p>pesto</p>
              </div>
              <div class="clearfix"></div>
              <div class="col-sm-2 col-sm-offset-2 col-xs-4">
                <p><i><b>PESCE<BR>+ €2,00</b></i></p>
                <p>tonno</p>
                <p>code di gamberi</p>
                <p>salmone affum.</p>
                <p>acciughe</p>
              </div>
              <div class="col-sm-2 col-xs-4">
                <p><i><b>CARNI<BR>+ €2,00</b></i></p>
                <p>cotoletta</p>
                <p>hamburger</p>
                <p>wurstel</p>
                <p>maiale sfilacciato</p>
                <p>chily</p>
                <p>polpette</p>
              </div>
              <div class="col-sm-2 col-xs-4">
                <p><i><b>CONFETTURE e FRUTTA<BR>+ €0,50</b></i></p>
                <p>marmellata</p>
                <p>mostarda</p>
                <p>pere</p>
                <p>mele</p>
                <p>arance</p>
                <p>pompelmo</p>
                <p>limone</p>
              </div>
              <div class="clearfix visible-xs"></div>
              <div class="col-sm-2 col-xs-4">
                <p><i><b>ALCOLICI<BR>+ €0,50</b></i></p>
                <p>rum</p>
                <p>vodka</p>
                <p>gin</p>
                <p>tequila</p>
                <p>brandy</p>
              </div>
            </div>

          </div>
        </div>


        <div class="sidemenu" id="mn3">
          <div class="chiudiside"><i class="fa fa-times"></i></div>
          <div class="sidecont">
            <div class="row">
              <div class="col-lg-5">
                <div class="center"><h4 class="white">I nostri Piatti Freddi</h4></div>
                <p>Bresaola, rucola e grana<span class="right">€ 7,50</span></p>
                <p>Manzo affumicato, rucola e grana<span class="right">€ 7,50</span></p>
                <p>Crudo e mozzarella<span class="right">€ 7,50</span></p>
                <p>Crudo e mozzarella di bufala <span class="right">€ 8,50</span></p>
                <p>Pomodoro e mozzarella <span class="right">€ 6,00</span></p>
                <p>Pomodoro e mozzarella di bufala <span class="right">€ 7,00</span></p>
                <p>Code di gamberi* in salsa rosa <span class="right">€ 7,50</span></p>
                <p>Salmone, rucola e limone <span class="right">€ 10,00</span></p>
                <p>Mix di verdure <span class="right">da € 5,00</span></p>
                <p>Salumi misti <span class="right">€ 8,00</span></p>
                <p>Formaggi misti <span class="right">€ 8,00</span></p>
                <p>Salumi e formaggi <span class="right">€ 8,00</span></p>
                <p>Tonno, pomodoro e mozzarella <span class="right">€ 7,00</span></p>
              </div>

              <div class="col-lg-5 col-lg-offset-2">
                <div class="center"><h4 class="white">I nostri Piatti Caldi</h4></div>
                <p>Polpette* al sugo <span class="right">€ 7,00</span></p>
                <p>Polpette* e verdure <span class="right">€ 7,00</span></p>
                <p>Cotoletta* e verdure <span class="right">€ 7,00</span></p>
                <p>Hamburger* e verdure <span class="right">€ 7,00</span></p>
                <p>Cotoletta* vestita <span class="right">€ 7,50</span></p>
                <p>Hamburger* vestito <span class="right">€ 7,50</span></p>
                <p>Polpette* vestite <span class="right">€ 7,50</span></p>
                <p>Wurstel, crauti e salsa <span class="right">€ 7,00</span></p>
                <p>Chilly* <span class="right">€ 7,50</span></p>

              </div>
            </div>
            <div class="row">
              <div class="col-lg-10 col-lg-offset-1">
                <div class="center"><h4 class="white">Le nostre Insalate</h4></div>
                <p>GRECA: iceberg, pomodoro, feta, olive, cipolla, cotto <span class="right">€ 7,50</span></p>
                <p>AFFUMICATA: rucola, avocado, salmone, feta, iceberg <span class="right">€ 9,00</span></p>
                <p>CARLOTTA: rucola, pompelmo, avocado, code di gamberi*, peperoncino, limone <span class="right">€ 9,00</span></p>
                <p>WILLIAMS: iceberg, rucola, bresaola, pere, grana, noci, miele <span class="right">€ 9,00</span></p>
                <p>NIZZARDA: iceberg, pomodoro, olive, acciuga, uovo, tonno <span class="right">€ 8,00</span></p>
                <p>TRICOLORE: iceberg, pomodoro, mozzarella <span class="right">€ 5,00</span></p>
                <p>BUFALINA: iceberg, rucola, pomodoro, mozzarella di bufala, prosciutto crudo, basilico <span class="right">€ 9,00</span></p>
                <p>TRENTINA: iceberg, pomodori secchi, rucola, speck, edamer, brie <span class="right">€ 8,00</span></p>
                <p>VEGANA: iceberg, rucola, cipolla, cetrioli, pomodori, verdure miste <span class="right">€ 7,50</span></p>
                <p>TONNATA: iceberg, rucola, tacchino, capperi, pomodoro, salsa tonnata <span class="right">€ 7,50</span></p>
                <p>LIGURE: rucola, pomodoro, patate, pesto, basilico, grana <span class="right">€ 8,00</span></p>
                <p>LA TUA PREFERITA: a tuo piacimento <span class="right">da € 7,50</span></p>
              </div>
            </div>
            <div class="center"><p class="push-top">* Prodotto surgelato<br>I prodotti possono contenere allergeni e/o provocare intolleranze</p></div>

          </div>
        </div>
        <div class="sidemenu alt" id="mn4">
          <div class="chiudiside"><i class="fa fa-times"></i></div>
          <div class="sidecont">
            <div class="row">
              <div class="col-lg-5">
                <div class="center"><h4 class="white">La nostra Caffetteria</h4></div>
                <p>Caffè<span class="right">€ 1,00</span></p>
                <p>Decaffeinato<span class="right">€ 1,10</span></p>
                <p>Caffè corretto<span class="right">€ 1,50</span></p>
                <p>Caffè con panna<span class="right">€ 1,50</span></p>
                <p>Caffè freddo<span class="right">€ 2,50</span></p>
                <p>Orzo piccolo<span class="right">€ 1,30</span></p>
                <p>Orzo grande<span class="right">€ 1,50</span></p>
                <p>Ginseng piccolo<span class="right">€ 1,30</span></p>
                <p>Ginseng grande<span class="right">€ 1,50</span></p>
                <p>Americano<span class="right">€ 1,00</span></p>
                <p>Cappuccino<span class="right">€ 1,40</span></p>
                <p>Cappuccino deca<span class="right">€ 1,50</span></p>
                <p>Cappuccino d'orzo<span class="right">€ 1,60</span></p>
                <p>Cappuccino ginseng<span class="right">€ 1,60</span></p>
                <p>Cappuccino soia<span class="right">€ 1,60</span></p>
                <p>Latte macchiato<span class="right">€ 1,50</span></p>
                <p>Latte di soia macchiato<span class="right">€ 1,70</span></p>
                <p>Latte bianco<span class="right">€ 1,20</span></p>
                <p>Latte di soia<span class="right">€ 1,50</span></p>
                <p>Latte menta - orzata<span class="right">€ 1,50</span></p>
                <p>Thè caldo - camomilla<span class="right">€ 2,50</span></p>
                <p>Cioccolata<span class="right">€ 2,50</span></p>
                <p>Cioccolata con panna<span class="right">€ 3,00</span></p>
              </div>

              <div class="col-lg-5 col-lg-offset-2">
                <div class="center"><h4 class="white">I nostri Marocchini</h4></div>
                <p>Classico <span class="right">€ 1,40</span></p>
                <p>Amaretto <span class="right">€ 2,00</span></p>
                <p>Meringa <span class="right">€ 2,00</span></p>
                <p>Nocciola <span class="right">€ 2,00</span></p>
                <p>Muesli <span class="right">€ 2,00</span></p>
                <p>Smarties <span class="right">€ 2,00</span></p>
                <p>Vaniglia <span class="right">€ 2,00</span></p>
                <p>Caramello <span class="right">€ 2,00</span></p>
                <p>Pistacchio <span class="right">€ 2,00</span></p>
                <p>Nutella <span class="right">€ 2,00</span></p>
                <p>Cocco <span class="right">€ 2,00</span></p>
                <p>Rum <span class="right">€ 2,00</span></p>
                <p>Cognac <span class="right">€ 2,00</span></p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-10 col-lg-offset-1">
                <div class="center"><h4 class="white">Le nostre Bevande</h4></div>
                <p>Succo <span class="right">€ 2,50</span></p>
                <p>Pomodoro condito <span class="right">€ 3,00</span></p>
                <p>Spremuta <span class="right">€ 3,00</span></p>
                <p>Coca - Sprite - Fanta - The <span class="right">€ 2,00</span></p>
                <p>Schweppes tonica - limone - cedrata - ginger ale - chinotto <span class="right">€ 2,50</span></p>
                <p>Red Bull <span class="right">€ 4,00</span></p>
                <p>Zucca <span class="right">€ 4,00</span></p>
                <p>Aperol <span class="right">€ 3,50</span></p>
                <p>Campari soda <span class="right">€ 3,00</span></p>
                <p>Crodino <span class="right">€ 3,00</span></p>
                <p>San bitter <span class="right">€ 3,00</span></p>
                <p>Vino rosso - bianco <span class="right">€ 3,00</span></p>
                <p>Spumante <span class="right">€ 4,00</span></p>
                <p>Birra in bottiglia <span class="right">€ 3,00/3,50</span></p>
                <p>Birra alla spina piccola <span class="right">€ 3,00</span></p>
                <p>Birra alla spina media <span class="right">€ 5,00</span></p>
                <p>Cocktail <span class="right">da € 5,00</span></p>
                <p>Rum - Whiskey <span class="right">da € 4,00</span></p>
                <p>Chupito <span class="right">€ 2,00</span></p>
                <p>Amaro/Grappa <span class="right">€ 3,00</span></p>

              </div>
            </div>
            <div class="center"><p class="push-top"><b>Dalle ore 17:30 aperitivo</b><br>analcolico € 4,00<br>alcolico € 5,00</p></div>

          </div>
        </div>




        <div id="mobmenu" class="hidden-md hidden-lg">
          <div class="menumobcontent center">
      			<div class="container">
      				<div class="row">
      					<div class="menumoblink center">
                  <a target="chisiamo">chi siamo</a>
                  <a target="menu">menù</a>
                  <a target="gallery">gallery</a>
                  <a target="prenota">prenota un tavolo</a>
                  <a target="press">press</a>
                  <a target="catering">catering</a>
                  <a target="franchise">apri un michetta's</a>
                  <a target="contatti">contatti</a>
      					</div>
      				</div>
              <div class="row small-push">
                <a href="#"><img class="socialimg" alt="instagram icon" src="img/i.png"></a>
                <a href="#"><img class="socialimg" alt="pinterest icon" src="img/p.png"></a>
                <a href="#"><img class="socialimg" alt="facebook icon" src="img/f.png"></a>
      				</div>
              <div class="row small-push">
                <div class="col-xs-6 col-sm-4 col-xs-offset-3 col-sm-offset-4">
                  <img class="img-responsive" alt="michetta's logo white" src="img/logo_w.png">
                </div>
      				</div>
      			</div>
    			</div>
    		</div>
		    <div class="menu">
          <div class="container-fluid">
            <div class="row hidden-xs hidden-sm">
              <div class="col-md-2">
                <img src="img/logo.png" class="img-responsive logo">
              </div>
              <div class="col-md-10">
                <div class="menulinks">
                  <a target="chisiamo">chi siamo</a>
                  <a target="menu">menù</a>
                  <a target="gallery">gallery</a>
                  <a target="prenota">prenota un tavolo</a>
                  <a target="press">press</a>
                  <a target="catering">catering</a>
                  <a target="franchise">apri un michetta's</a>
                  <a target="contatti">contatti</a>
                </div>
              </div>
            </div>
            <div class="row mobhead hidden-md hidden-lg">
              <div class="col-xs-6 col-sm-4">
    						<img src="img/logo.png" class="img-responsive logo">
    					</div>
              <div class="col-xs-6 col-sm-8">
    						<div id="tgmobmenu" class="mobmenuspento"><span class="glyphicon glyphicon-menu-hamburger"></span></div>
    					</div>
            </div>
          </div>
        </div>

        <div class="landing"></div>

        <div id="chisiamo">
          <div class="container pd-top pd-bot">
            <div class="row center push-bot">
              <h1 class="mainh1">Michetta's</h1>
              <h2><i>"Non è michetta se non fa le briciole"</i></h2>
            </div>
            <div class="row">
              <div class="col-md-6 whoblockimg">
                <img class="img-responsive" src="img/gallery.jpg" alt="michetta's logo">
              </div>
              <div class="col-md-6 whoblocktxt push-top">
                <h3 class="gold"><i>Michetta's Panini Milano</i></h3>
                <p>è un progetto gastronomico che vuole riportare in vita il simbolo alimentare di una Milano che fu: la michetta.</p>
                <p>Valorizzata da una vastità di prodotti di prima scelta, la nostra michetta viene reinterpretata in chiave moderna attraverso la maestria del nostro “mastro paninaro” e resa simbolo della nuova panineria gourmet meneghina.</p>
              </div>
            </div>
          </div>
        </div>

        <!--menù-->
        <div id="menuhead" class="sezhead">
          <div class="headcont">
            <h6 class="gold"><b>- MICHETTA'S -</b></h5>
            <h2 class="white">IL MENÙ</h2>
          </div>
        </div>
        <div id="menu" class="pd-top pd-bot">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-md-offset-1 col-sm-6 push-top push-bot">
                <div id="ctamn1" class="menublock"><p>le michette</p></div>
              </div>
              <div class="col-md-4 col-md-offset-2 col-sm-6 push-top push-bot">
                <div id="ctamn2" class="menublock"><p>componi la tua michetta</p></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-md-offset-1 col-sm-6 push-top push-bot">
                <div id="ctamn3" class="menublock"><p>la cucina</p></div>
              </div>
              <div class="col-md-4 col-md-offset-2 col-sm-6 push-top push-bot">
                <div id="ctamn4" class="menublock"><p>il bar</p></div>
              </div>
            </div>
          </div>
        </div>

        <!--gallery-->
        <div id="galleryhead" class="sezhead">
          <div class="headcont">
            <h6 class="gold"><b>- MICHETTA'S -</b></h5>
            <h2 class="white">GALLERY</h2>
          </div>
        </div>

        <div id="gallery" class="pd-top pd-bot">
          <div class="container" id="instacont">

          </div>
        </div>


        <!--prenota-->
      <div id="prenotahead" class="sezhead">
          <div class="headcont">
            <h6 class="gold"><b>- MICHETTA'S -</b></h5>
            <h2 class="white">PRENOTA UN TAVOLO</h2>
          </div>
        </div>

        <div id="prenota" class="pd-top pd-bot">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-md-offset-1 col-sm-6">
                <div class="" style="width:100%;height:250px;border:2px solid #161407"></div>
                <select class="selContact" id="contora">
                  <option value="12:00">12:00</option>
                  <option value="12:30">12:30</option>
                  <option value="12:00">13:00</option>
                  <option value="12:30">13:30</option>
                  <option value="12:00">14:00</option>
                  <option value="19:00">19:00</option>
                  <option value="19:30">19:30</option>
                  <option value="20:00">20:00</option>
                  <option value="20:30">20:30</option>
                  <option value="21:00">21:00</option>
                  <option value="21:30">21:30</option>
                </select>
              </div>
              <div class="col-md-4 col-md-offset-2 col-sm-6">
                <input type="text" id="contnome" class="txtCont" value="" placeholder="nome">
                <input type="text" id="contmail" class="txtCont" value="" placeholder="e-mail">
                <input type="text" id="conttel" class="txtCont" value="" placeholder="telefono">
                <div class="btnform" id="subcont">invia prenotazione</div>
              </div>
            </div>
          </div>
        </div>


        <!--press-->
        <div id="presshead" class="sezhead">
          <div class="headcont">
            <h6 class="gold"><b>- MICHETTA'S -</b></h5>
            <h2 class="white">PRESS</h2>
          </div>
        </div>

        <div id="press" class="pd-top pd-bot">
          <div class="container">
            <div class="row">
              <div class="col-xs-10 col-xs-offset-1">
                <div class="owl-carousel owl-theme" id="pressCar">
                  <?php
                  $q = "select * from art order by pos limit 10";
                  $res=mysqli_query($conn, $q);
                  while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                  ?>
                  <div>
                    <div class="pressimg" style="background:url('<?=$row["img"]?>') center center no-repeat;"></div>
                    <a href="<?=$row["link"]?>"><h5 class="presstit"><?=$row["tit"]?></h5></a>
                    <p class="presssub"><?=$row["info"]?></p>
                    <p><?=$row["testo"]?></p>
                    <a href="<?=$row["link"]?>" target="_blank" class="cta readmore">LEGGI DI PIù</a>
                  </div>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>



        <!--catering-->
        <div id="cateringhead" class="sezhead">
          <div class="headcont">
            <h6 class="gold"><b>- MICHETTA'S -</b></h5>
            <h2 class="white">CATERING</h2>
          </div>
        </div>

        <div id="catering" class="pd-top pd-bot" style="padding:120px 0">
          <div class="container">
            <div class="row center">
              <div class="col-md-12">
                <p class="lead">Michetta’s Panini Milano offre anche un servizio catering ideale per ogni occasione.</p>
                <p class="lead push-top"><b><i>Se desideri avere ulteriori informazioni, scrivici all’indirizzo e-mail <a class="lead" href="mailto:catering@michettas.com">catering@michettas.com</a></b></i></p>
              </div>
            </div>
          </div>
        </div>


        <!--franchise-->
        <div id="franchisehead" class="sezhead">
          <div class="headcont">
            <h6 class="gold"><b>- MICHETTA'S -</b></h5>
            <h2 class="white">APRI UN MICHETTA'S</h2>
          </div>
        </div>

        <div id="franchise" class="pd-top pd-bot" style="padding:120px 0">
          <div class="container">
            <div class="row center">
              <div class="col-md-12">
                <p class="lead push-top"><b><i>Per informazioni riguardanti il Franchising Michetta’s Panini Milano, si prega di contattare: <a class="lead" href="mailto:franchising@michettas.com">franchising@michettas.com</a></b></i></p>
              </div>
            </div>
          </div>
        </div>



        <!--contatti-->
        <div id="contattihead" class="sezhead">
          <div class="headcont">
            <h6 class="gold"><b>- MICHETTA'S -</b></h5>
            <h2 class="white">CONTATTI</h2>
          </div>
        </div>

        <div id="contatti">
          <div class="container">
      			<div class="row">
              <div class="col-md-5 col-md-offset-1 col-sm-6 pd-top pd-bot">
<h3 class="inbl left"><i class="fa fa-map-marker"></i>&nbsp;</h3><span class="left">&nbsp;<br>Via Ambrogio Campiglio 13, 20133 Milano<br>Via Cenisio 55, 20154 Milano</span><br>
<div class="clearfix"></div>
<h3 class="inbl"><i class="fa fa-phone"></i>&nbsp;</h3><span>02 4547 8564</span><br>
<h3 class="inbl"><i class="fa fa-envelope-o"></i>&nbsp;</h3><span><b>LAVORA CON NOI:</b> <a href="mailto:lavoraconnoi@michettas.com">lavoraconnoi@michettas.com</a></span><br>
<h3 class="inbl"><i class="fa fa-envelope-o"></i>&nbsp;</h3><span><b>INFORMAZIONI:</b> <a href="mailto:info@michettas.com">info@michettas.com</a></span><br>
              </div>
              <div class="col-md-5 col-sm-6">
                <div id="mapmcts" style="height:420px;"></div>
              </div>
      			</div>
    		  </div>
    		</div>

    		<footer>
    			<div class="container">
    				<div class="row center">

              <div class="col-md-3 col-sm-6">
                <img class="img-responsive logofoot" alt="michetta's logo white" src="img/logo_w.png">
                <p class="footp">&nbsp;<br>Copyright Michetta's 2017</p>
              </div>
              <div class="col-md-3 col-md-offset-6 col-sm-6">
    						<div class="inbl">
                  <p class="footp">Seguici sui nostri canali social</p>

    							<a href="https://www.instagram.com/michettas_panini_milano/" target="_blank" class="sociallink"><i class="fa fa-instagram"></i></a>
    							<a href="https://www.facebook.com/michettaspaninimilano" target="_blank" class="sociallink"><i class="fa fa-facebook"></i></a>
    						</div>
    					</div>
    				</div>
    			</div>
    		</footer>

    		<!--modal-->
    		<div class="modal fade" tabindex="-1" role="dialog" id="modServ">
    			<div class="modal-dialog">
    				<div class="modal-content">
    					<div class="modal-header">
    						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    						<h3 class="modal-title"></h3>
    					</div>
    					<div class="modal-body">
    						<div class="container">
    							<div class="row">
    								<div class="col-md-6 col-md-offset-3" id="modfoto">
                      <div class="row">
                        <div class="col-md-12">
                          <img id="fotomodal" class="img-responsive" src="">
                        </div>
                      </div>
                      <div class="row">
    										<div class="col-xs-4" id="fotoalt1">
    										</div>
    										<div class="col-xs-4" id="fotoalt2">
    										</div>
    										<div class="col-xs-4" id="fotoalt3">
    										</div>
    									</div>
    								</div>
    								<!--<div class="col-md-6" id="modtxt">

    								</div>-->
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>



    		<div id="totop"><i class="fa fa-arrow-up"></i></div>

    		<script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/owl.carousel.min.js"></script>

    		<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    		<script src="js/vendor/perfect-scrollbar.jquery.min.js"></script>

<script>

$(document).ready(function() {
	new WOW().init();

  $("#pressCar").owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    navText:['<i class="fa fa-caret-left"></i>','<i class="fa fa-caret-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
  });

  $('#mn1 .sidecont').perfectScrollbar({suppressScrollX:true});
  $('#mn2 .sidecont').perfectScrollbar({suppressScrollX:true});
  $('#mn3 .sidecont').perfectScrollbar({suppressScrollX:true});
  $('#mn4 .sidecont').perfectScrollbar({suppressScrollX:true});
});

function initMap() {
  var place = {lat: 45.48173905, lng: 9.23363864};
  var infowindow = new google.maps.InfoWindow({
    content: '<p><b>Via Ambrogio Campiglio 13, 20133 Milano</b></p>'
  });

  var placeTwo = {lat: 45.487541, lng: 9.163014};
  var infowindowTwo = new google.maps.InfoWindow({
    content: '<p><b>Via Cenisio 55, 20154 Milano</b></p>'
  });

  var map = new google.maps.Map(document.getElementById('mapmcts'), {
    zoom: 12,
    center: {lat:45.465454, lng:9.186516}
  });
  var marker = new google.maps.Marker({
    position: place,
    map: map
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

  var markerTwo = new google.maps.Marker({
    position: placeTwo,
    map: map
  });
  markerTwo.addListener('click', function() {
    infowindowTwo.open(map, markerTwo);
  });
}
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHQqKr5-Ny4aRv-juVIrEbTNDyL_Cs_Nc&callback=initMap">
    </script>

        <script src="js/main.js?v2"></script>

        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100880280-1', 'auto');
  ga('send', 'pageview');

</script>

      <script src="js/cookiePrivacy.js"></script>
      <script type="text/javascript">
      $(document).ready(function() {
        $.cookiesDirective();
      });
      </script>
    </body>
</html>
