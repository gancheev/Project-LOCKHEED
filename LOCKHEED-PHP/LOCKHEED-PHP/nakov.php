<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/php; charset=UTF-8">
    <link rel="stylesheet" href="styles/styles.css" type="text/css" />
    <link rel="stylesheet" href="styles/heroes-styles.css" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php include("layout.php") ?>

    <title> <?php echo "$title" ?>  </title>
</head>
<body>
    <div class="container">
        <header>

            <?php include("logo.php") ?>


            <nav>

                <?php include("navigation.html")?>
            </nav>
        </header>
        <main class="row">

            <section class="col-sm-10 col-lg-offset-1">
                <article><img src="images/nak.png" alt="Nakov" id="Nakov" class="img-responsive"></article>
            </section>
            <section class="col-sm-10 col-lg-offset-1">
                <article>
			            <h2>NAKOV</h2>
			            <h3>CHARACTER INFO</h3>
			            <p><strong>Real Name:</strong> Светлин Наков</p>
			            <p><strong>Birthday:</strong>: 14-08-1980</p>
			            <p><strong>Height:</strong> 167см</p>
			            <p><strong>Weight:</strong> 68кг</p>
			            <p><strong>History:</strong> На шестгодишна възраст, Светлин Наков е отвлечен от тайна правителствена организация с експериментални цели. Три години неговото местонахождение остава неизвестно, като се смята, че са проводени множество генно-модифициращи експерименти с неговия мозък и опит спомените му да бъдат заличени. Все пак в миг на невнимание, той успява да избяга от правителствената база и да се върне обратно в своя град. Но той никога повече няма да бъде същия..</p>
			            <p><strong>Powers:</strong> Благодарение на несполучливите експерименти, неговият мозък започва да се развива три пъти по-бързо от този на нормалните хора като програмните езици и тяхната семантика сами се изписват в съзнанието му. На десетгодишна възраст му е предложена работа като лектор в Харвард по специалност компютърни науки, но той е готов да предаде своите знания единственото на родното младо поколение.</p>
		            
                </article>
            </section>
 
        </main>



        <footer>

            <?php include("footer.html") ?>

        </footer>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#navigation > li').bind('mouseenter', function () {
                var $elem = $(this);
                $elem.find('img')
                     .stop(true)
                     .animate({
                         'width': '170px',
                         'height': '170px',
                         'left': '0px',

                     }, 400, 'easeOutBack')
                     .andSelf()
                     .find('.nav_wrap')
                     .stop(true)
                     .animate({ 'top': '140px' }, 500, 'easeOutBack')
                     .andSelf()
                     .find('.nav_active')
                     .stop(true)
                     .animate({ 'height': '170px' }, 300, function () {
                         var $sub_menu = $elem.find('.nav_box');
                         if ($sub_menu.length) {
                             var left = '170px';
                             if ($elem.parent().children().length == $elem.index() + 1)
                                 left = '-170px';
                             $sub_menu.show().animate({ 'left': left }, 200);
                         }
                     });
            }).bind('mouseleave', function () {
                var $elem = $(this);
                var $sub_menu = $elem.find('.nav_box');
                if ($sub_menu.length)
                    $sub_menu.hide().css('left', '0px');

                $elem.find('.nav_active')
                     .stop(true)
                     .animate({ 'height': '0px' }, 300)
                     .andSelf().find('img')
                     .stop(true)
                     .animate({
                         'width': '0px',
                         'height': '0px',
                         'left': '85px'
                     }, 400)
                     .andSelf()
                     .find('.nav_wrap')
                     .stop(true)
                     .animate({ 'top': '25px' }, 500);
            });
        });
    </script>

    <script src="js/bootstrap.min.js"></script>

</body>
</html>