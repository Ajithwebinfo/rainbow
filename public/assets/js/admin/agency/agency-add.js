$(function() {
    "use strict";

    var runTextEditors   =   function(){

        tinymce.init({
            selector: 'textarea#remarks',  // change this value according to your html
            images_upload_url: '../api/universityDescriptionImageUpload',
            images_upload_base_path: '../',
            images_upload_credentials: true,
            plugins: 'preview image link media table insertdatetime imagetools help',
            toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,

        });


    };


    var runValidation  =   function(){
        $("#addAgencyForm").validate({
            rules: {
                // simple rule, converted to {required:true}

                name :{
                    required : true
                },
                email: {
                    email : true,
                }


            },
            messages: {
                name :{
                    required: "Required an Agency Name."
                },
                email :{
                    email : "Please type a valid email",
                }


            },
            errorPlacement: function(error, element) {
                if(element.attr('type') == "text" ){
                    error.insertAfter(element.parent().find('label').last());
                }
                if(element.attr('type') == 'file'){
                    error.insertAfter(element);
                }
                if ( element.is('select') ){
                    error.insertAfter(element.parent().find('label'));
                }

            },
            submitHandler: function (form) { // for demo
                // alert('valid form submitted'); // for demo
                //return false; // for demo
                form.Submit();
            }

        });
    }


    runTextEditors();

    runValidation();


});
