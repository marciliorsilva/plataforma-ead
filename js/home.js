$(document).ready(function() {
    $("#form-password").hide();

    $(".recuperarSenha").click(() => {
        $("#form-login").hide();
        $("#form-password").show();
    });

    $(".voltarLogin").click(() => {
        $("#form-login").show();
        $("#form-password").hide();
    });

    $(".msg").hide();
    
    $("#form-login").submit(function (event) {
        event.preventDefault();
        alert("  ");
        email = $("#email").val();
        senha = $("#password").val();
        

        
        $.post("../curso/model/login.php", { email: email, senha: senha }, function (retorno) {
            alert(retorno);
            if (retorno == "erro") {
                $(".msg").css("color","red");
                $(".msg").html("E-mail ou senha incorretos");
                $(".msg").show();
            } else if (retorno == "logado") {
                $(".msg").css("color","yellow");
                $(".msg").html("Já existe uma pessoa nesta conta.");
                $(".msg").show();
            } else {
                window.location = "../curso/aulas-online/";
                $(".msg").hide();
            }
        });

    });

});

