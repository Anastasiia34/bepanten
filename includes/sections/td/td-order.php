			<form id="orderForm">
				<div class="_td-container-in rel">
					<div class="_td-text tal">
						<h2 class="tac green-text">Заявка</h2>
						<div class="_td-form-container">
							<div class="_td-form-in">
								<!-- -->
								<div class="_td-form-field">
								   <div class="_td-form-field-title _validation">ФИО</div>
								   <input type="text" id="name" autocomplete="off" />
								</div>
								<!-- -->
								<div class="_td-form-field clearfix">
									<div class="_td-form-inl">
										<div class="_td-form-field">
										   <div class="_td-form-field-title _validation">Город</div>
										   <input type="text" id="sity" placeholder="" /> 
										</div>
									</div>
									<div class="_td-form-inl">
									   <div class="__holder">
										   <div class="field-3">
											   <label for="year" class="_validation __label-3">Возраст ребёнка</label>
											   <input type="text" class="input-3 inp-s-1" id="year" placeholder="лет" maxlength="2" />  
											   <input type="text" class="input-3 inp-s-1" id="month" placeholder="мес." maxlength="2" />
										   </div>
									   </div>
										<div class="field-2">
											<label class="__label-2">Пол<br>ребёнка</label>
											<div class="select">
												<span class="placeholder">Мальчик</span>
												<ul>
													<li data-value="male">Мальчик</li>
													<li data-value="female">Девочка</li>
												</ul>
												<input class="select-sex" type="hidden" name="sex" value="male"/>
											</div>
										</div>
									</div>
								</div>
								<!-- -->
								<div class="_td-form-line"></div>
								<!-- -->
								<div class="_td-form-field">
								   <div class="_td-form-field-title _validation">Адрес доставки</div>
								   <input type="text" id="address" />
								</div>
								<!-- -->
								<div class="_td-form-field">
								   <div class="_td-form-field-title _validation">Эл. почта</div>
								   <input type="email" id="email" autocomplete="off" />
								</div>
								<!-- -->
								<div class="_td-form-field">
								   <div class="_td-form-field-title _validation">Мобильный телефон</div>
								   <input type="text" id="phone" />
								</div>
							</div>
							<div class="__form-checkbox __order tal">
								<input id="agree" class="_validation not_error" type="checkbox" name="check" value="" checked>
								<label class="__user-check" for="agree">Принять <a href="#" class="_link js-rules">Условия участия</a></label>
							</div>
						</div>
					</div>
				</div>
				<div class="__button-form tac">
					<button type="submit" class="__form-submit  js-submit" style="opacity:.5;">Оставить заявку</button> <!--  style="visibility:hidden;" -->
				</div>
			</form>
					


<script>

		$(document).ready(function () {
			$(function(){
			$("#phone").mask("(999) 999-99-99");
		});
		
		// Псевдо селект
		$('.select').on('click','.placeholder',function(){
		  var parent = $(this).closest('.select');
		  if ( ! parent.hasClass('is-open')){
			parent.addClass('is-open');
			$('.select.is-open').not(parent).removeClass('is-open');
		  }else{
			parent.removeClass('is-open');
		  }
		}).on('click','ul>li',function(){
		  var parent = $(this).closest('.select');
		  parent.removeClass('is-open').find('.placeholder').text( $(this).text() );
		  parent.find('input[type=hidden]').attr('value', $(this).attr('data-value') );
		});
		
		$(document).mouseup(function (e){ // событие клика по веб-документу
			var div = $(".select"); // тут указываем ID элемента
			if (!div.is(e.target) // если клик был не по нашему блоку
				&& div.has(e.target).length === 0) { // и не по его дочерним элементам
				div.removeClass('is-open'); // скрываем его
			}
		});
		
        // Устанавливаем обработчик потери фокуса для всех полей ввода текста
        $('input#name, input#sity, input#year, input#month, input#address, input#email, input#phone').unbind().blur(function () { //, input#phone, input#agree

            // Для удобства записываем обращения к атрибуту и значению каждого поля в переменные 
            var id = $(this).attr('id');
            var val = $(this).val();			

            // После того, как поле потеряло фокус, перебираем значения id, совпадающее с id данного поля
            switch (id)
            {
					// Проверка поля "Имя"
                case 'name':
                    var rv_name = /^[a-zA-Zа-яА-Я ]+$/; 

                    if (val.length > 2 && val != '' && rv_name.test(val))
                    {
                        $(this).removeClass('error').addClass('not_error');
                        $(this).prev('._validation').removeAttr('style');
                    }
                    else
                    {
                        $(this).removeClass('not_error').addClass('error');
                        $(this).prev('._validation').css('color', 'red');
                    }
                    break;
					
					// Проверка поля "Город" ----------------------
                case 'sity':
                    var rv_sity = /^[a-zA-Zа-яА-Я ]+$/; 

                    if (val.length > 2 && val != '' && rv_sity.test(val))
                    {
                        $(this).removeClass('error').addClass('not_error');
                        $(this).prev('._validation').removeAttr('style');
                    }
                    else
                    {
                        $(this).removeClass('not_error').addClass('error');
                        $(this).prev('._validation').css('color', 'red');
                    }
                    break;
					
					// Проверка поля "Лет" ----------------------
                case 'year':
                    var rv_year = /^[0-9\\+]/; 

                    if (val.length > 0 && val.length < 3 && val != '' && rv_year.test(val))
                    {
                        $(this).removeClass('error').addClass('not_error');
                        $(this).prev('._validation').removeAttr('style');
                    }
                    else
                    {
                        $(this).removeClass('not_error').addClass('error');
                        $(this).prev('._validation').css('color', 'red');
                    }
                    break;
					
					// Проверка поля "Месяцев" ----------------------
                case 'month':
                    var rv_month = /^[0-9\\+]/; 

                    if (val.length > 0 && val.length < 3 && val != '' && rv_month.test(val))
                    {
                        $(this).removeClass('error').addClass('not_error');
                        $(this).prev('._validation').removeAttr('style');
                    }
                    else
                    {
                        $(this).removeClass('not_error').addClass('error');
                        $(this).prev('._validation').css('color', 'red');
                    }
                    break;
					
					// Проверка поля "Аддрес" ----------------------
                case 'address':
                    if (val != '')
                    {
                        $(this).removeClass('error').addClass('not_error');
						$(this).prev('._validation').removeAttr('style');
                    } 
					else
                    {
                        $(this).removeClass('not_error').addClass('error');
						$(this).prev('._validation').css('color', 'red');
                    }
                    break;
					
                    // Проверка email ----------------------
                case 'email':
                    var rv_email = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
                    if (val != '' && rv_email.test(val))
                    {
                        $(this).removeClass('error').addClass('not_error');
                        $(this).prev('._validation').removeAttr('style');
                    } else
                    {
                        $(this).removeClass('not_error').addClass('error');
                        $(this).prev('._validation').css('color', 'red');
                    }
                    break;
					
                    // Проверка поля "Телефон" ----------------------
                case 'phone':
					var rv_phone = /^\([\d]{2,3}\)\ [\d]{2,3}-[\d]{2,3}-[\d]{2,3}$/; 

                    if (val.length > 0 && val != '' && rv_phone.test(val))
                    {
                        $(this).removeClass('error').addClass('not_error');
						$(this).prev('._validation').removeAttr('style');
                    } 
					else
                    {
                        $(this).removeClass('not_error').addClass('error');
						$(this).prev('._validation').css('color', 'red');
                    }
                    break;

            } // end switch(...)

        }); // end blur()
		
		// Проверка поля "Чекбокс" ----------------------
		$(function(){
				$('#agree').on('change', function(){
					if($(this).prop('checked')){
						$('#agree + .__user-check').removeClass('error');
					}else{
                        $('#agree + .__user-check').addClass('error');
					}
				});
			});
		
		// управление кнопкой отправки ----------------------
		$(function(){
			$('#orderForm').on('click', function(){
				var calc = $(this).find('.not_error').length;
				if (calc == 8 && $('#agree').prop('checked'))
				{
					$('.__form-submit').css( 'opacity', '1' )/*.prop('disabled', false)*/;
				} else
				{
					$('.__form-submit').css( 'opacity', '.5' )/*.prop('disabled', true)*/;
				}
				//console.log(calc);        
			});
		});
		
        $('form#orderForm').submit(function (e) {
            e.preventDefault();

        }); // end submit()


    }); // end script

</script>
