			<form id="addForm">	
				<div class="_td-container-in rel">
					<div class="_td-text tal">
						<h2 class="_leos-r green-text tac">Добавить отзыв</h2>
						<div class="_td-form-container">
							<input id="inputImage" type="file" accept=".jpg,.jpeg,.gif,.png" data-rel="1" class="" style="display: none;">
							<div class="_td-form-in">
								<!-- -->
								<div class="_td-form-field">
								   <div class="_td-form-field-title">Заголовок</div>
								   <input id="_title" type="text" id="n" />
								</div>
								<!-- -->
								<div class="_td-form-field _textareafield">
									<div class="_td-form-field-title-2">Отзыв</div>
									<textarea id="_caption" autocomplete="off"></textarea>
								</div>
								<!-- -->
								<div class="__img-form">
									<div class="__img-form-load clearfix rel">
										<div class="__img-form-load-txt">Загрузите фото</div>
										<!-- -->
										<div class="__img-form-item">
											<div class="_img-final"></div>
											<a href="#" class="__loading-img-dell"></a>
										</div>
										<!-- -->
										<div class="__img-form-item tac">
											<div class="__img-download">
												Загрузка
												<div class="__img-download-view">
													<div style="width:33%"></div> <!-- ВНИМАНИЕ! Изменяется ширина блока от 0% до 100% в зависимости от процента загрузки -->
												</div>
											</div>
										</div>
										<!-- -->
										<div class="__img-form-item tac">
											<input type="hidden" name="photoUrl" id="photoUrl" value=""/>
											<input type="hidden" name="photo" id="photo" value=""/>
											<label for="inputImage" class="__img-form-upload">Загрузить<br>фото</label>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="__button-form tac">
					<button type="submit" class="__form-publish  js-submit" style="visibility:hidden;">Опубликовать</button>
				</div>
				
<!-- crop -->
				<div class="cropper __td">
					<div class="modal modal-in modal-cropper">
						<div class="crop-modal"> 
							<div class="crop-modal__wrap">
				
								<!--<img src="" alt="" id="final">-->
								<div class="image-cropper">
									<div class="img-container">
										<img src="" alt="Picture">
									</div>
									<div class="image-resize">
										<a href="javascript://" title="" class="image-zoomin css-corner-3" onclick="cropper.zoom(0.1)">+</a>
										<a href="javascript://" title="" class="image-zoomout css-corner-3" onclick="cropper.zoom(-0.1)">–</a>
									</div>
								</div>
								
								
								<div class="upload-holder clearfix"> 
									<div class="upload-container">
										<div class="file-upload">
											<label for="inputImage"><span>Другое фото</span></label>
											<!--<input id="inputImage2" name="files" type="file" class="" accept=".jpg,.jpeg,.gif,.png" data-rel="1"/>-->
										</div>
										<input type="text" id="filename" class="filename" autocomplete="off" disabled style="text-overflow: ellipsis;">
									</div>
									<div class="tac">
										<button type="submit" class="__comment-form-submit _js_save">Сохранить</button>
									</div>
								</div>
				
							</div>
						</div>
					</div>
				</div>						
<!-- /crop -->
				
			</form>				
				
				
				
<!-- crop components -->
<script src="https://st.babyblog.ru/st1/promo22601/v4_bem/2016/cicaplast/js/cropper.min.js"></script>
				

<script>
	$('.__loading-img-dell').on('click', function(e) {
		e.preventDefault()
		$('._img-final').removeAttr( 'style' );
		$(this).hide();
	});
	
	$(function(){
		$('#addForm').on('change', function(){
			setInterval(function(){
				if ($('#_title').val().length > 0 && $('#_caption').val().length > 0 && $('._img-final').attr('style') !== undefined) {
					$('.__form-publish').css( 'visibility', 'visible' );
				} else {
					$('.__form-publish').css( 'visibility', 'hidden' );
				}        
			}, 100);
		});
	});
	
    //////////////////////////////////////////////////////////////////////////////////
    var uploadedImageURL;
    var image = document.querySelector('.img-container > img');
    var croppable = false;
    var options = {
        dragMode: 'move',
        aspectRatio: 1.77,
        autoCropArea: 0.9,
//            minContainerWidth: 303,
//            minContainerHeight: 191,
        restore: true,
        guides: false,
        center: false,
        highlight: true,
        cropBoxMovable: false,
        cropBoxResizable: false,
        toggleDragModeOnDblclick: false,
        viewMode: 1,
        ready: function () {
            croppable = true;
        }

    };
    var cropper = new Cropper(image, options);
    //        window.cropper = cropper;

    var inputImage = document.getElementById('inputImage');
   // var inputImage2 = document.getElementById('inputImage2');

    inputImage.onchange = function () {
        var files = this.files;
        var file;
        console.log('CHANGE', files);

        if (cropper && files && files.length) {
            file = files[0];

            if (/^image\/\w+/.test(file.type)) {
                if (uploadedImageURL) {
                    URL.revokeObjectURL(uploadedImageURL);
                }

                image.src = uploadedImageURL = URL.createObjectURL(file);
                cropper.destroy();
                window.cropper = new Cropper(image, options);
                inputImage.value = null;
//                    console.log(inputImage);
                $('.cropper').fadeIn('fast');
            } else {
                window.alert('Please choose an image file.');
            }
        }
    };
    function getRoundedCanvas(sourceCanvas) {
        var canvas = document.createElement('canvas');
        var context = canvas.getContext('2d');
        var width = sourceCanvas.width;
        var height = sourceCanvas.height;

        width = 524;
        height = 269;

        canvas.width = width;
        canvas.height = height;
        context.beginPath();
        context.rect(0,0,width,height);
        context.strokeStyle = 'rgba(0,0,0,0)';
        context.stroke();
        context.clip();
        context.drawImage(sourceCanvas, 0, 0, width, height);

        return canvas;
    }

    $('._js_save').on('click', function(e){
        var croppedCanvas;
        var roundedCanvas;
        var roundedImage;
        e.preventDefault();
        

//                    console.log(croppable);
        if (!croppable) {
            return;
        }

        // Crop
        croppedCanvas = window.cropper.getCroppedCanvas();

        // Round
        roundedCanvas = getRoundedCanvas(croppedCanvas);

        var dataUrl = roundedCanvas.toDataURL();
        
        
        $('#photoUrl').val(dataUrl);
//		$('._img-final').attr('src', dataUrl);
		$('._img-final').css({'background-image':'url("'+dataUrl+'")'});
		$('.__loading-img-dell').show();
		
//        $('#filename').val('Фото загружено');
//        $('#filename').css({color: 'black'});
        $('.cropper').hide();

//        console.log(dataUrl);

    });
	
    /*setInterval(function(){
		if ($('#_title').val().length > 0 && $('#_caption').val().length > 0 && $('._img-final').attr('style') !== undefined) {
			$('._js-submit').css( 'visibility', 'visible' );
		} else {
			$('._js-submit').css( 'visibility', 'hidden' );
		}        
	}, 100);*/
    //////////////////////////////////////////////////////////////////////////////////

</script>
<!-- /crop components -->	