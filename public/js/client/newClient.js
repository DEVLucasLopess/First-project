$(document).ready(function(){
    FormClientValidade.init();
    applyMask.init();
    viaCep();
});

var FormClientValidade = function(){
    return {
        init: function () {
            var form = $("#formClient");
            var error = $(".alert-danger", form);
            var success = $(".alert-success", form);
            var warning = $(".alert-warning", form);

            form.validate({
                doNotHideMessage: true,
                errorElement: "span",
                errorClass: "invalid-feedback",
                focusInvalid: false,
                onkeyup: false,
                rules: {
                    name: {
                        required: true
                    },
                    birth: {
                        required: true,
                        cpf: true
                    },
                    garnder: {
                        required: true
                    },
                    zipcode: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    number: {
                        required: true
                    },
                   
                    neighborhood: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    city: {
                        required: true
                    },                    
                },
                messages: {
                    name: {
                        required: "Informe um nome"
                    },
                    birth: {
                        required: "Informe uma  data de nascimento",
                    },
                    garnder: {
                        required: "Informe seu sexo",
                    },
                    zipcode: {
                        required: "Informe um cep"
                    },
                    address: {
                        required: "Informe um endereço"
                    },
                    number: {
                        required: "Informe um numero"
                    },
                    neighborhood: {
                        required:  "Informe um bairro"
                    },
                    state: {
                        required:  "Informe um estado"
                    },
                    city: {
                        required: "Informe um cidade"
                    },                   
                },
                errorPlacement: function (error, element) {
                    // render error placement for each input type
                    error.insertAfter(element); // for other inputs, just perform default behavior
                },

                invalidHandler: function (event, validator) {
                    //display error alert on form submit
                },

                highlight: function (element) {
                    // hightlight error inputs
                    $(element)
                        .closest(".form-control")
                        .removeClass("is-valid")
                        .addClass("is-invalid"); // set error class to the control group
                },

                unhighlight: function (element) {
                    // revert the change done by hightlight
                    $(element)
                        .closest(".form-control")
                        .removeClass("is-invalid"); // set error class to the control group
                },

                success: function (label) {
                    label
                        //.addClass('valid') // mark the current input as valid and display OK icon
                        .closest(".form-control")
                        .removeClass("is-invalid"); // set success class to the control group
                },

                submitHandler: function (form) {
                    return false;
                } 
        });
    }
};

}();



var applyMask = function(){
    return{
        init: function(){
        $(".cep").mask("00.000-000");
        /* $(".date").setMask("39/19/9999$"); */
     /*    $(".date").datepicker({
        language: "pt-BR",
        format: "yyyy-mm-dd",
        todayHighlight: true,
        autoclose: true
    }); */
        }
    }
}();

var clearAndress = function(){
    $("#formClient").find('input[name=address]').empty().val("");
    $("#formClient").find('input[name=neighborhood]').empty().val("");
    $("#formClient").find('input[name=city]').empty().val("");
    $("#formClient").find('input[name=state]').empty().val("");
}

var viaCep = function(){
    $("#zipcode").blur(function (){
        var zipcode = $(this).val().replace(/\D/g, '');

        if(zipcode != "") {

            var validaCep = /^[0-9]{8}$/;
            if(validaCep.test(zipcode)){
                $.getJSON("https://viacep.com.br/ws/"+ zipcode +"/json/?callback=?", function(dados){
                    if(!("erro" in dados)){
                        $("#formClient").find('input[name=address]').empty().val(dados.logradouro);
                        $("#formClient").find('input[name=neighborhood]').empty().val(dados.bairro);
                        $("#formClient").find('input[name=city]').empty().val(dados.localidade);
                        $("#formClient").find('input[name=state]').empty().val(dados.uf);                        
                        $("#formClient").find('input[name=number]').focus();
                    }else{
                        clearAndress();
                        alert("CEP não encontrado.");
                    }
                });
            }else {
                clearAndress();
                alert("Formato de Cep inválido")
            }
        }else{
            clearAndress();
        }
    })
} 

