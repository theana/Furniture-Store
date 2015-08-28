<?php defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header_top.php');?>  
     
         <?php $c = Page::getCurrentPage();// чтобы был виден топ-бар администратору
               $cp = new Permissions($c);
                   if (is_object($cp) && ($cp->canWrite() || $cp->canAddSubContent() || $cp->canAdminPage())) { ?>
                       <style type="text/css"> .top-bar{top: 3rem;}.parallax-background{top: 2.8rem;}.tab-bar{top: 2.8rem;} </style>
                        <?php } ?><style>
body { position: static; }
</style>
                        <? $bt = BlockType::getByHandle('autonav');
  $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
  $bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
  $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
  $bt->controller->displaySubPages = 'all';  //none', 'all, 'relevant_breadcrumb', 'relevant'          
  $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
  $bt->controller->displaySubPageLevelsNum = ''; // if displaySubPages is set 'custom'
  $bt->render('templates/f_top_bar_off_canvas'); // for template 'templates/template_name';
 ?>
    <div class="inner-wrap"> <a class="exit-off-canvas"></a>
        <section class="main-section">
