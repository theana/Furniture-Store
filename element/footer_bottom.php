<?php defined('C5_EXECUTE') or die(_("Access Denied."));?>
</section></div></div></div><!--конец wraper offcanvas-->

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/foundation/5.0.2/js/foundation.min.js"></script>
<script src="<?php echo $view->getThemePath()?>/js/vendor/modernizr.js"></script>
<script src="<?php echo $view->getThemePath()?>/js/vendor/fastclick.js"></script>
<script src="<?php echo $view->getThemePath()?>/js/accordslide.js"></script>
<script> $(document).foundation({ clearing : { close_selectors : '.clearing-close'  }});
         $(".off-canvas-submenu").hide();
				$(".off-canvas-submenu-call").click(function() {
					 var icon = $(this).parent().next(".off-canvas-submenu").is(':visible') ? '+' : '-';
					 $(this).parent().next(".off-canvas-submenu").slideToggle('fast');
					 $(this).find("span").text(icon);
				}); 
</script>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "http://mebelsvitrini.ru/catalogue";
    };  
</script>
<script> $('body').on('click','ul.pagination a',function(){
    var $form = $(this); var $outputplace = $(this).closest('div.ccm-custom-style-container');
    // c5 outputs <div class="ccm-custom-style-container ccm-custom-style-XXX" >
    // gets ccm-custom-style-XXX by splitting the space and selecting the second class attribute.
    var $outputclass = $($outputplace).get(0).className.split(" ")[1];
    $.ajax({ type: 'GET',  url: $form.attr('href'), dataType: 'html' })
    .done(function(data) {
        var $outputdata = $(data).find("."+$outputclass); $outputplace.html($outputdata);});
    return false;});
</script>
   <?php  Loader::element('footer_required')?> </body></html>
