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

//Rotina para movimentação do title
var repeat=1 // 0 para rolar uma vez, 1 para rolar infinitamente
var title=document.title
var leng=title.length
var start=1

function titlemove() {
    
    titl=title.substring(start, leng) + title.substring(0, start)
    document.title=titl
    start++
    if (start==leng+1) {
        start=0
    if (repeat==0)
        return
    }
    setTimeout("titlemove()",300)  // aqui vc pode aumentar ou diminuir a velocidade 
}

if (document.title)
    titlemove()
