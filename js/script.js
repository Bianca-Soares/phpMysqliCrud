$('#formPesquisa').submit(function(e){
    e.preventDefault();

    var pesquisa = $('#nome_pesquisa').val();
    console.log(pesquisa);

    //Ajax
    $.ajax({
        "url": "http://localhost:3000/pesquisa.php",
        "data": {nome_pesquisa: pesquisa},
        "method": "POST",
        "dataType": "json"
     }).done(function(r){
         console.log(r);
    
    });
 });