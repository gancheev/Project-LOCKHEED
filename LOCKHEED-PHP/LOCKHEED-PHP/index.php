<!DOCTYPE html>
<html>
<head>
   
    <meta http-equiv="content-type" content="text/php; charset=UTF-8">
    <link rel="stylesheet" href="styles/styles.css" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
    <?php include("layout.php") ?>

    <title> <?php echo "$title" ?>  </title>
</head>
<body>
    <div class="wrapper">
     <div id="header">

           <?php include("logo.php") ?>

        </div>
        <nav>
            <?php include("navigation.html")?>
       </nav>
        <div id="content">
            
            <section>
                <article><img src="images/Big-Bang-Theory2.jpg" /></article>
                </section>
            <section>
                <article>
                    <img src="images/Big-Bang-Theory2.jpg" /></article>
                </section>
            <section id="texts">
                
                <?php include("content.html") ?>
                 
            </section>
        </div>

       
        
        <div id="footer">
            <hr />
            <?php include("footer.html") ?>
            <hr />

        </div>
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
   
</body>

</html>
