<?php 
defined('C5_EXECUTE') or die(_("Access Denied.")); 
$this->inc('elements/header.php'); ?>
<? $ih = Loader::helper('image');

 $euro=79.9618; ?> 
      <!--Start search-product-->
      <div class="parallax-background show-for-large-up" id="parallax">
        <?php $a = new Area('Slider');  $a->display($c); ?>
      </div>
      <div class="parallax-content">
        <div class="panel show-for-large-up show-for-portrait">
          <div class="row collapse">
            <div class="large-9 large-pull-1 medium-8 small-12 columns">
              <a href="/">
                <picture>
                  <source srcset="http://mebelsvitrini.ru/application/files/2514/2903/6057/logo_bezh.png"
                          media="(min-width:  1140px)" class="ccm-image-block img-responsive bID-433606">
                    <source srcset="http://mebelsvitrini.ru/application/files/2514/2903/6057/logo_bezh.png" media="(min-width: 768px)"
                       class="ccm-image-block img-responsive bID-433606">
                      <img src="/application/files/2514/2903/6057/logo_bezh.png" alt="#"
                  class="ccm-image-block img-responsive bID-433606">
                      </picture>
              </a>
            </div>
            <div class="large-3 medium-4  columns hide-for-small-only">
              <?php   $a = new Area('Panel');  $a->display($c); ?>
            </div>
          </div>
        </div>
        <div class="row large-collapse xlarge-collapse">
          <div class="large-3  medium-3 columns show-for-large-up">
            <form role="form" data-search-form="pages" method="post" action="
              <?php echo $this->url($c->getCollectionPath(),'search')?>" >
              <fieldset>
                  
              <div class="row large-collapse">
                <div class="small-6 columns">
                  <?php echo $form->submit('search',t('Search'),array('class' =>'button small success expand '));?>                                                                                                                                         
                </div>
                <div class="small-6 columns">
                  <?php echo $form->submit('Reset',t('Clear'), array('id' =>'myButton','class' =>'button small secondary  expand ')); ?>
                </div>
              </div>
              <ul class="off-canvas-list">
                            
                <?php $ak = CollectionAttributeKey::getByHandle('country'); $akc = $ak->getController(); ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <label>
                      Страна <span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <?php $html = $ak->render('search', null, true);  echo $html; ?>
                </ul>
                <?php $ak = CollectionAttributeKey::getByHandle('style'); $akc = $ak->getController(); ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <label>
                      Стиль<span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <?php $html = $ak->render('search', null, true);  echo $html; ?>                               						  	                                                                                              
                </ul>
                <?php $ak = CollectionAttributeKey::getByHandle('gamma'); $akc = $ak->getController(); ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <label>
                      Цветовая гамма<span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <?php $html = $ak->render('search', null, true);  echo $html; ?>                               							                                                                                          
                </ul>
                <?php $ak = CollectionAttributeKey::getByHandle('predmet'); $akc = $ak->getController(); ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <label>
                      Предмет мебели<span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <?php $html = $ak->render('search', null, true);  echo $html; ?>
                </ul>
                <?php $ak = CollectionAttributeKey::getByHandle('light_type'); $akc = $ak->getController(); ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <label>
                      Тип светильника<span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <?php $html = $ak->render('search', null, true);  echo $html; ?>
                </ul>
                <?php  $ak = CollectionAttributeKey::getByHandle('bathroom_item');$akc = $ak->getController(); ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;" >
                    <label>
                      Тип сантехники<span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <?php $html = $ak->render('search', null, true);  echo $html; ?>
                </ul>
                <?php $ak = CollectionAttributeKey::getByHandle('accessory_type');$akc = $ak->getController(); ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <label>
                      Тип аксессуара<span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <?php $html = $ak->render('search', null, true);  echo $html; ?>
                </ul>
                <?php $ak = CollectionAttributeKey::getByHandle('decor_type'); $akc = $ak->getController(); ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <label>
                      Другие товары<span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <?php $html = $ak->render('search', null, true);  echo $html; ?>
                </ul>
                <?php $ak = CollectionAttributeKey::getByHandle('price_item_new'); $akc = $ak->getController(); ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <label>
                      Диапазон цен (руб)<span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <fieldset>
                    <? $akc->search();?>                                  
                  </fieldset>
                </ul>
                <?php $ak = CollectionAttributeKey::getByHandle('fabrika'); $akc = $ak->getController(); ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <label>
                      Фабрика <span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <?php $html = $ak->render('search', null, true);  echo $html; ?>
                </ul>
                <?php $ak = CollectionAttributeKey::getByHandle('length'); $akc = $ak->getController(); ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <label>
                      Длина (см)<span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <fieldset>
                    <?php $akc->search();?>
                  </fieldset>
                </ul>
                <?php $ak = CollectionAttributeKey::getByHandle('width'); $akc = $ak->getController(); ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <label>
                      Ширина (см)<span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <fieldset>
                    <?php $akc->search();?>
                  </fieldset>
                </ul>
                <?php $ak = CollectionAttributeKey::getByHandle('height'); $akc = $ak->getController(); ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <label>
                      Высота (см)<span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <fieldset>
                    <?php $akc->search();?>
                  </fieldset>
                </ul>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <label>
                      <?php echo t('Sort') ?>
                      <span class="right"> + </span>
                    </label>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <select name="orderBy" >
                    <label>
                      <option value="chrono_desc"
                        <?php if ($orderBy == 'chrono_desc') { echo selected ; } ?>>
                        <?php echo t('Most recent first') ?>
                      </option>
                      <option value="chrono_asc"
                        <?php if ($orderBy == 'chrono_asc') { echo selected ; } ?>>
                        <?php echo t('Earliest first') ?>
                      </option>
                      <option value="price_asc"
                        <?php if ($orderBy == 'price_asc') { echo selected ; } ?>>
                        <?php echo t('Цена по возрастанию') ?>
                      </option>
                      <option value="price_desc"
                        <?php if ($orderBy == 'price_desc') { echo selected;  } ?>>
                        <?php echo t('Цена по убыванию') ?>
                      </option>
                      <option value="alpha_asc"
                        <?php if ($orderBy == 'alpha_asc') { echo selected ; } ?>>
                        <?php echo t('Alphabetical order') ?>
                      </option>
                      <option value="alpha_desc"
                        <?php if ($orderBy == 'alpha_desc') { echo selected ; } ?>>
                        <?php echo t('Reverse alphabetical order') ?>
                      </option>
                    </label>
                  </select>
                </ul>
                <?php $c = Page::getCurrentPage(); $cp = new Permissions($c);
                         if (is_object($cp) && ($cp->canWrite() || $cp->canAddSubContent() || $cp->canAdminPage())) { ?>
                <?php  $ak = CollectionAttributeKey::getByHandle('shop'); $akc = $ak->getController(); 
                       ?>
                <li>
                  <a href="#" class="off-canvas-submenu-call" onclick="return false;">
                    <? echo $akc->label(); ?>                                                                                                                          
              
                    <span class="right"> + </span>
                  </a>
                </li>
                <ul class="off-canvas-submenu">
                  <?php $html = $ak->render('search', null, true);  echo $html; ?>
                </ul>
                <?php } ?>
              </ul>
              <br/><br/>
              <div class="row large-collapse">
                <div class="small-6 columns">
                  <?php echo $form->submit('search',t('Search'),array('class' =>'button small success expand'));?>
                </div>
                <div class="small-6 columns">
                  <?php echo $form->submit('Reset', t('Clear'), array('id' => 'myButton', 'class' => 'button small
                             right secondary  expand ')); 
                         ?>                 
                </div>
              </div>
              </fieldset>
            </form>
            <div class="row large-collapse">
              <div class="large-12 columns">
                <?php $a = new Area('Advertising'); $a->display($c); ?>
              </div>
            </div>
          </div>
          <!-- Конец левой колонки -->
          <div class="large-9  columns">
        
            <?php if ( !$pages ) {  ?>
            <div class="panel callout">
              <?php echo t('К сожалению, по Вашему запросу ничего не найдено.')?>
            </div>
            <?php } else { ?>
            <div class="ccm-custom-style-container ccm-custom-style-main-838350" >
                 <div class="row">
                     <div class="large-8 medium-12 small-12 columns " style="margin-top: -15px;" >
                        <?php if ($showPagination): ?>
                        <?php echo $pagination;?>
                        <?php endif; ?>
                     </div>
                     <div class="large-4 medium-12 small-12 columns " >
                        <p>
                          <span style="color:grey; margin-left: 2rem;">
                           <?php if (substr( $totalp, -1 )==1 && substr($totalp, -2)!=11) { ?> Найден <? echo $totalp; ?> товар.<?}
                                 elseif  (substr($totalp, -2, 1) !=1 &&  substr($totalp, -1)>1 && substr($totalp, -1)<5  ) { 
                                          echo 'Найдено '. $totalp.' товара.';} else {echo 'Найдено '. $totalp.' товаров.';} ?>
                        </span>
                      </p>
                   </div>
               </div>
               <ul class="medium-block-grid-2 medium-block-grid-2 xlarge-block-grid-3 small-block-grid-1 catalogue-img" >
                    <?php foreach ($pages as $page):
            	                   $price_item_new=$page->getAttribute('price_item_new');
                                   // Если цена указана в евро, то мы ее переводим в рубли
                                   $price_euro_new=$page->getAttribute('price_euro_new');
                                   $price_euro_old=$page->getAttribute('price_euro_old');
                                   if ($price_euro_new>0) { $price_item_new=round($price_euro_new * $euro,0);}
                                   if ($page->getAttribute('price_euro_new')>0 && 
                                       $page->getAttribute('price_item_new')!=$price_item_new) {                
                                       $page->setAttribute('price_item_new',$price_item_new); }
                                   if ($price_euro_old>0) { $price_item_old=round($price_euro_old * $euro,0);}
                                   if ($page->getAttribute('price_euro_old')>0 && 
                                       $page->getAttribute('price_item_old')!=$price_item_old) {                
                                       $page->setAttribute('price_item_old',$price_item_old); }
		                       $url = $nh->getLinkToCollection($page);
                                       $price_new_value=$page->getAttribute("price_item_new");
		                       $cID = $page -> getCollectionID(); 
                                       $price_old_value = $page->getAttribute("price_item_old");
                                       $country_value = $page->getAttribute("country");   
                                       $factory_value = $page->getAttribute("fabrika");
                                       $length=$page->getAttribute("length");
                                       $width=$page->getAttribute("width");
                                       $height=$page->getAttribute("height");
                                   if ($price_old_value>0) { $discount=round(($price_old_value-
                                       $price_new_value)/$price_old_value*100,0);}
                                 else {$discount=0;}   
                                       $type = \Concrete\Core\File\Image\Thumbnail\Type\Type::getByHandle('thumbnail');
                                   
                                  ?>
                                   
                  <li>           
                    <?php if ($page->getAttribute('thumbnail')) {
                              $file = $page->getAttribute('thumbnail');   if (is_object($file)) {
                                      
                                         $baseSrc = $file->getThumbnailURL($type->getBaseVersion());
                                        
                                         $doubleSrc = $file->getThumbnailURL($type->getDoubledVersion()); 
                                                                          
                                   }     
                                   ?>
                   <div class="item-wrapper  " >
                      <div  class="ccm-block-page-list-page-entry-grid-thumbnail" >
                         <a href="<?php echo $url ?>" target="_blank">
                            <picture>
                              <source srcset="<?php echo $doubledSrc; ?>"
                                  media="(min-width:  640px)" class="img-responsive">
                              <source srcset="<?php echo $baseSrc; ?>" media="(min-width: 320px)"
                                          class="img-responsive">
                               <img src="<?php echo $baseSrc; ?>" alt="<?php echo  $page->getCollectionDescription(); ?>"
                                          title="<?php echo $page->getCollectionName(); ?>"
                                    class="img-responsive">
                              </picture>
                           <!-- <img class="img-centered img-responsive"
                            src="<?php echo $baseSrc; ?>" data-at2x=<?php echo $doubledSrc; ?>
                            alt="<?php echo  $page->getCollectionDescription(); ?>"
                            title="<?php echo $page->getCollectionName(); ?>"/>-->
                   <?php if ($discount > 0) { ?>
                            <p class="discount">
                              -<span class="val">
                                     <?php echo $discount?>%
                               </span>
                             </p>
                    <?php } ?>                                           
                          <h4 class="price-new">
                             <span class="val">
                                <?php echo $price_item_new?>
                             </span>
                             <del>
                                <span style="font-family: 'Times New Roman'; font-size: 1rem;">Р</span>
                             </del>
                        </h4>
                  <?php if ($price_old_value) { ?>
                          <p class="price-old">
                          <?php echo $price_old_value ?>р.
                          </p> 
                  <?php }  ?>   
                          <div class="ccm-block-page-list-page-entry-grid-thumbnail-hover">
                              <div class="ccm-block-page-list-page-entry-grid-thumbnail-title-wrapper">
                                  <div class="ccm-block-page-list-page-entry-grid-thumbnail-title">
                                     <i class="ccm-block-page-list-page-entry-grid-thumbnail-icon"></i>
                            <?php if ($factory_value) {?>
                                     <p class="fabrika">
                                        Фабрика: &laquo;<?php echo $factory_value?>&raquo;
                                     </p>
                           <?php   } ?>
                           <?php if ($length && $width && $height) { ?>
                                    <p class="sizing">
                                       Размеры: <?php echo $length; ?>x <?php echo $width; ?>x<?php echo $height; ?>см
                                    </p>
                           <?php } ?>
                                    <p class="fabrika">
                                       Код товара: MB-<?php echo $cID?>
                                    </p>
                                 </div>
                              </div>
                          </div>
                        </a>
                    </div>
                    <div class="pricing-table" >
                      <div class="bullet-item">
                        <h5>
                          <?php echo $page->getCollectionName(); ?> МВ-<?php echo $page->getCollectionId(); ?>
                        </h5>
                      </div>
                      <?php if ($country_value): ?>
                                <div class="bullet-item">
                                    <p class="country">
                                      Страна: <span class="strana">
                                      <?php echo $country_value; ?>
                                      </span>
                                   </p>
                                </div>
                      <?php endif; ?>
                    </div>
               </div>
            <?php } ?>
         </li>
        <?php endforeach; ?>
     </ul>

                
                 <?php if (count($pages) == 0):  ?>
                 <div class="error">
                    По Вашему запросу товары не найдены.
                 </div>
                 <?php endif;?>

              <!--Следующий после картинок ряд -->
             <div class="row">
                <div class="large-4 medium-12 small-12 columns">
                  <p>
                    <span style="color:grey; margin-left: 2rem;">
                      <?php if (substr( $totalp, -1 )==1 && substr($totalp, -2)!=11) {  ?> Найден <?php echo $totalp; ?>товар.
                      <?php }
                        elseif  (substr($totalp, -2, 1) !=1 &&  substr($totalp, -1)>1 && substr($totalp, -1)<5  ) { 
                        echo 'Найдено '. $totalp.' товара.';} else {echo 'Найдено '. $totalp.' товаров.';}
                   ?>
                    </span>
                  </p>
                </div>
                
              <!-- Конец подсчета количества товаров -->
             
                <div class="large-8 medium-12 small-12 columns " >
                  <?php if ($showPagination): ?>
                  <?php echo $pagination;?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php }  ?><!--foreach -->
          </div>
        </div>

        <div class="row">
          <div class="large-6 medium-6 small-12 columns">
            <?php if (is_object($cp) && ($cp->canWrite() || $cp->canAddSubContent() || $cp->canAdminPage())) { ?>
            <div class="row collapse">
              <div class="small-7 columns">
                <?php if ($message!='') { echo $message; }  ?>
                <h5>  Перейти к товару МВ- </h5>
              </div>
              <div class="small-5 columns">
                <form method="post" action="
                  <?php echo $this->url('http://mebelsvitrini.ru/catalogue','code'); ?>"  id="code">
                  <div class="row collapse">
                    <div class="small-9 columns">
                      <?php print $form->number('codeGood', 1);  ?>
                    </div>
                    <div class="small-3 columns">
                      <span class="postfix">
                        <?php print $form->submit('submitCode', 'код', array('class' => 'postfix'));  ?>
                      </span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <?php } ?><!--if can write -->
          </div>
          <div class="large-6 medium-6 small-12 columns">
            
          </div>
        </div>
        <div class="row large-collapse">
          <div class="large-12 medium-12 small-12 columns">
            <?php $a = new Area('Main'); $a->display($c); ?>
          </div>
       </div>
<?php  $this->inc('elements/footer.php'); ?> 
