<?php
/**
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @since         0.10.0
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/

$cakeDescription = 'Qualitex Engenharia e Serviços';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('responsive.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('owl.carousel.min.css') ?>
    <?= $this->Html->css('owl.theme.default.min.css') ?>

    <?= $this->Html->script('jquery.1.8.3.min.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this->Html->script('jquery-scrolltofixed.js') ?>
    <?= $this->Html->script('jquery.easing.1.3.js') ?>
    <?= $this->Html->script('jquery.isotope.js') ?>
    <?= $this->Html->script('wow.js') ?>
    <?= $this->Html->script('classie.js') ?>

    <?= $this->Html->script('owl.carousel.js') ?>

</head>

<body>


<?= $this->Flash->render() ?>
<div>
    <?= $this->fetch('content') ?>
</div>



</body>

</html>


<script type="text/javascript">

$(document).ready(function(e) {

    $('#test').scrollToFixed();
    $('.res-nav_click').click(function(){
        $('.main-nav').slideToggle();
        return false

    });

});

</script>

<script>
wow = new WOW(
    {
        animateClass: 'animated',
        offset:       100
    }
);
wow.init();
</script>


<script type="text/javascript">
$(window).load(function(){


    $('.main-nav li a, .servicelink').bind('click',function(event){
        var $anchor = $(this);

        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 30
        }, 1500,'easeInOutExpo');
        /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
    }, 1000);
    */
    if ($(window).width() < 768 ) {
        $('.main-nav').hide();
    }
    event.preventDefault();
});
})
</script>

<script type="text/javascript">

$(window).load(function(){

    var $container = $('.portfolioContainer'),
    $body = $('body'),
    colW = 375,
    columns = null;

    $container.isotope({
        // disable window resizing
        resizable: true,
        masonry: {
            columnWidth: colW
        }
    });

    $(window).smartresize(function(){
        // check if columns has changed
        var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
        if ( currentColumns !== columns ) {
            // set new column count
            columns = currentColumns;
            // apply width to container manually, then trigger relayout
            $container.width( columns * colW )
            .isotope('reLayout');
        }

    }).smartresize(); // trigger resize to set container width
    $('.portfolioFilter a').click(function(){

        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
        });
        return false;

    });

});

</script>
