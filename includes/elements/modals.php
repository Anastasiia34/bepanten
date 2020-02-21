<!-- POPUP 1 RULES -->
<div id="modal_rules" class="<?php echo $spoPrefix ?>-modal-popup <?php echo $spoPrefix ?>-modal-popup--1" style="display: none;">
    <div class="<?php echo $spoPrefix ?>-modal">
        <div class="<?php echo $spoPrefix ?>-modal__wrap rel tac">
            <div class="<?php echo $spoPrefix ?>-modal-popup__scroll-bar"></div>
            <i class="<?php echo $spoPrefix ?>-modal__close">
                <svg class="white-svg">
                    <use xlink:href="#close"></use>
                </svg>
            </i>     
            <div class="<?php echo $spoPrefix ?>-modal-popup__content <?php echo $spoPrefix ?>-modal-popup__content--rules black-text">    
                <div class="<?php echo $spoPrefix ?>-modal-popup__title title">Правила участия</div>
                
                <div class="<?php echo $spoPrefix ?>-modal-popup__scroll rel tal" >
					<div class="<?php echo $spoPrefix ?>-modal-popup__rules-text">
                        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/elements/rules-text.php") ?>
                    </div>
                </div>
                

            </div>
        </div>    
    </div>
</div>
<!-- /POPUP 1 -->

<!-- POPUP 2 PRIZE -->
<div class="<?php echo $spoPrefix ?>-modal-popup <?php echo $spoPrefix ?>-modal-popup--2" style="display: none;">
    <div class="<?php echo $spoPrefix ?>-modal">
        <div class="<?php echo $spoPrefix ?>-modal__wrap rel tac">

            <i class="<?php echo $spoPrefix ?>-modal__close">
                <svg class="black-svg">
                    <use xlink:href="#close"></use>
                </svg>
            </i>     
            <div class="<?php echo $spoPrefix ?>-modal-popup__content black-text">    
                <div class="<?php echo $spoPrefix ?>-modal-popup__title title">Призы</div>
                <img src="src/images/common/img-prize-fk-new.png" alt="">

                <div class="tac">
                    =)
                </div>

            </div>
        </div>    
    </div>
</div>
<!-- /POPUP 2 -->

<script>

$(document).ready(function(){

    $('.<?php echo $spoPrefix ?>-modal__close, .<?php echo $spoPrefix ?>-modal').on('click', function(){
        $('.<?php echo $spoPrefix ?>-modal-popup__scroll').perfectScrollbar('destroy');
        $('.<?php echo $spoPrefix ?>-modal-popup').hide();
    });
    $('.<?php echo $spoPrefix ?>-modal__wrap').on('click', function(event){
        event.stopPropagation();
    });
    $('.js-rules').click(function(e) {
        e.preventDefault();
        $('.<?php echo $spoPrefix ?>-modal-popup--1').show(200, function(){
            $('.<?php echo $spoPrefix ?>-modal-popup__scroll').perfectScrollbar(/*{
				theme: 'orange'
			}*/);
        });
    });
    $('.js-prize').click(function(e) {
        e.preventDefault();
        $('.<?php echo $spoPrefix ?>-modal-popup--2').show();
    });

});
</script>