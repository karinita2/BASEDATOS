//para colocar la vista previa de la imagen
function readURL(input, img) {
		 if (input.files && input.files[0]) {
			  var reader = new FileReader();
			  
			  reader.onload = function (e) {
			   		$(img).attr('src', e.target.result);
			  }
			  reader.readAsDataURL(input.files[0]);
		 }
}

function browseURL(path,path2){
		$(path).change(function(){
		 readURL(this,path2);
		});
}

//para borrar elementos del formulario
function clear_form_elements(ele) {

        $(ele).find(':input').each(function() {
            switch(this.type) {
                case 'password':
                case 'select-multiple':
                case 'select-one':
                case 'text':
                case 'textarea':
                case 'email':
                //case 'hidden':
                
                
                    $(this).val('');
                    break;
                case 'checkbox':
                case 'radio':
                    this.checked = false;
            }
        });
}

