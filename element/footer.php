<?php use Concrete\Core\Validation\CSRF\Token;
defined('C5_EXECUTE') or die("Access Denied.");
$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSocial = new GlobalArea('Footer Social');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();
$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();
?>      <!--Start footer-->
            <footer>
              <div class="footer-podval">
                <div class="row">
                  <div class="large-9 show-for-large-up columns">
                    <?php $a = new GlobalArea('Footer Site Title'); $a->display(); 
                            ?>
                  </div>
                  <div class="large-3 medium-6 medium-centered small-6 small-centered columns ">
                    <?php $a = new GlobalArea('Footer Social'); $a->display(); ?>
                  </div>
                </div>
              </div>
              <div class="bottom-footer" >
                <div class="row medium-collapse large-collapse small-uncollapse">
                  <div class="large-4 medium-6 small-12 columns">
                    <div class="box" style="margin-bottom: 10px;">
                      <div class="box-icon">
                        <span class="fi-telephone"></span>
                      </div>
                      <div class="info">
                        <p>Если у Вас возникли вопросы позвоните, и мы с радостью ответим Вам! </p>
                        <h5 class="text-center">8-925-232-73-70</h5>
                      </div>
                    </div>
                  </div>
                  <div class="large-4   show-for-large-up columns">
                    <div class="box">
                      <div class="box-icon">
                           <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
                            <div id="SkypeButton_Call_houli-gunsales_1">
                            <script type="text/javascript">
                            Skype.ui({"name": "call","element": "SkypeButton_Call_houli-gunsales_1","participants": ["houli-gunsales"],
                            "imageColor": "white","imageSize": 70 });</script> 
                            </div>                          
                      </div>
                      <div class="info"> 
                      <hr/>                     
                      <?php $a = new GlobalArea('Footer Legal');$a->display(); ?>
                      </div>
                    </div>
                  </div>
                  <div class="large-4 medium-6  small-12 columns ">
                    <div class="box" style="margin-bottom: 10px;">
                      <div class="box-icon">
                        <span class="fi-mail"></span>
                      </div>
                      <div class="info">
                        <p>Ваши пожелания и предложения Вы  можете отправить нам по&nbsp;e&#8209;mail !</p>
                        <a href="http://mebelsvitrini.ru/index.php/contacts" class="button info">Бланк письма</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="concret-brand">
                <div class="row">
                  <div class="large-9 medium-9  small-9 columns">
                     <div class="show-for-large-up">
                         <?php echo t('Built with <a href="http://www.concrete5.org" class="concrete5">concrete5</a> CMS.')?>
                     </div>
                     <div class=" hide-for-large-up  ">
                         <?php $a = new GlobalArea('Footer Legal');$a->display(); ?>
                     </div>
                 </div>
                 <div class="large-3 medium-3 small-3 columns text-right">
                    <?php if (!id(new User)->isLoggedIn()) { ?>
                          <a href="
                              <?php echo URL::to('/login')?>" class="button alert tiny"><?php echo t('Log in') ?>
                          </a>
                    <?php } else {$token = new Token();
                            ?>
                               <form id="login" action="
                                 <?php echo URL::to('/login', 'logout') ?>"><?php id(new Token())->output('logout'); 
                            ?>
                                 <a href="#" onclick="$(this).closest('#login').submit();return true;" class="button tiny">
                                  <?php echo t('Log out') ?>
                                 </a>
                              </form>
                      <?php }
                            ?>
                  </div>
                </div>
              </div>
            </footer>
          </div><!--Паралакс-контент-->  
        
          <?php $this->inc('elements/footer_bottom.php');?>
