/*$.ajax({
   url : '../pdfprotuna.php',
   dataType : 'html',
   type : 'POST',
   data : {'npis' : npis},
   beforeSend : function () {
         console.log('Carregando...');
   },
   success : function(retorno){
       alert(retorno);
   },
   error : function(a,b,c){
       alert('Erro: '+a[status]+' '+c);
   }
});*/

function enviaRequisicaoLogin() {
   $.ajax({
      url:'index.php',
      dataType : 'html',
      type : 'POST',
      data : {'email' : email, 'password' : password},
      complete: function (response) {
         alert(response.responseText);
      },
      error: function () {
          alert('Erro');
      }
  });  

  return false;
}

function enviaTesteConexao() {
   $.ajax({
      url:'index.php?servico=dbtest',
      dataType : 'html',
      type : 'GET',      
      complete: function (response) {
         alert(response.responseText);
      },
      error: function () {
          alert('Erro');
      }
  });  

  return false;
}