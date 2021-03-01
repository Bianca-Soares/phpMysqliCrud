//id form cadastro e método submit
$('#form_cadastro').submit(function(e){
    e.preventDefault();

    var nome_usuario = $('#nome_usuario').val();
    var telefone = $('#telefone').val();
    var endereco = $('#endereco').val();
    console.log(nome_usuario);
    $('#nome_usuario').val('');
    $('#telefone').val('');
    $('#endereco').val('');

    $.ajax({
        url: "http://localhost:3000/controle.php",
        method: "POST",
        data: {var_usuario: nome_usuario, var_telefone: telefone, var_endereco: endereco},
        dataType: "json"
    }).done(function(result){

    });
});


