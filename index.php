<?php
error_reporting(E_ALL);
include_once("php/funcoes.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>	
	<title>Internet Banking Caixa</title>
<?php
include_once("template/scripts.php");
?>


<style type="text/css">
  
  .chosen-container {
  width: 90% !important;
}



</style>
</head>



<body>

<header>

<?php
include_once("template/menu_header.php");
?>
</header>

<div class="container-fluid mt5">

  <div class="form-group conteudo">



<div class='row'>
  <div class='col-md-12'>

</div>
</div>


<div class="row">
 

 <div class="col-md-2 apresentacao pr0 mr0 col-xs-12">

       
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="img/avatar.png" class="img-responsive img-circle" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        Pedro Santiago
                    </div>
                    <div class="profile-usertitle-job mb3">
                       <span class="label label-default h3">Saldo: R$ 3.500,00</span>
                     
                    </div>
                </div>
                       </div>
 </div>


 <div class="col-md-3 col-xs-12">

  <div class="alert alert-info text-justify" role="alert">
<b>Oportunidade </b> Você sabia que poderia ter ganhado <b>R$ 253,74 a mais</b> se tivesse investido 50% de sua poupança em nosso CDB nos ultimos 12 meses? Achou interessante? Fale com um de nossos especialistas e invista hoje  mesmo. <button class="btn btn-success btn-sm mt2"><i aria-hidden="true" class="fa fa-comment-o"></i> Iniciar Chat</button>

</div>
 </div>


 <div class="col-md-3 col-xs-12">
  


<div class="panel panel-default">
  <div class="panel-heading">Planejador de Sonhos</div>
  <div class="panel-body">
<p class='text-justify'>Economize mais R$ 360,00 para atingir a meta mensal do seu sonho <b>CARRO NOVO</b>. </p>
  <div class="progress">
  <div class="progress-bar " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    60%
  </div>
</div>

<button class='btn btn-default btn-sm' data-toggle="modal" data-target="#detalhes_sonho"><i class="fa fa-info-circle" aria-hidden="true"></i> + Detalhes</button>
<button class='btn btn-sm btn-default' data-toggle="modal" data-target="#cadastrar_sonho"><i class="fa fa-plus-circle" aria-hidden="true"></i> Cadastrar novo sonho</button>

  </div>
</div>





 </div>


 <div class="col-md-4 col-xs-12">
  Seus gastos nos últimos 30 dias <br>
 <div id="piechart" style="width: 350px; height:220px; margin-top:-20px; font-family: Helvetica " ></div>
 </div>
</div> <!-- Fecha o .row -->




<div class="clearfix"></div>

 <div class='container'>
 <div class="well well-sm">
  <h4>Atalhos mais utilizados</h4>



<div class="row">



  <div class="col-md-2 col-xs-6">
    <div class="thumbnail text-center">
<img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_220438_desktop.png">
      <div class="caption text-center">
        <h4 class='hidden-xs'><a href="#" class="">Extrato do Mês Corrente</a></h4>
        <h4 class='hidden-md visible-xs'><a href="#" class="">Extrato</a></h4>
         </div>
    </div>
  </div>




  <div class="col-md-2 col-xs-6">
    <div class="thumbnail text-center">
<img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_230329_desktop.png">
  
      <div class="caption text-center">
        <h4><a href="#" class="hidden-xs">Pagamento com cód de barras</a></h4>
         <h4><a href="#" class="hidden-md visible-xs">Pagamento</a></h4>
         </div>
    </div>
  </div>





   <div class="col-md-2 col-xs-6">
    <div class="thumbnail text-center">
<img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_220608_desktop.png">

      <div class="caption text-center">
        <h4><a href="#" class="hidden-xs">Transferência via DOC</a></h4>
          <h4><a href="#" class="hidden-md visible-xs">Enviar DOC</a></h4>
         </div>
    </div>
  </div>




  <div class="col-md-2 col-xs-6">
    <div class="thumbnail text-center">
<img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_225355_desktop.png">
      <div class="caption text-center">
        <h4><a href="#" class="hidden-xs">Fatura Cartão de Crédito</a></h4>
         <h4><a href="#" class="hidden-md visible-xs">Faturas</a></h4>
         </div>
    </div>
  </div>




   <div class="col-md-2 col-xs-6">
    <div class="thumbnail text-center">
<img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_225948_desktop.png">

      <div class="caption text-center">
        <h4><a href="#" class="hidden-xs">Painel Home Broker</a></h4>
         <h4><a href="#" class="hidden-md visible-xs">Home Broker</a></h4>
         </div>
    </div>
  </div>





   <div class="col-md-2 col-xs-6">
    <div class="thumbnail text-center">
<img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_230537_desktop.png">

      <div class="caption text-center">
        <h4><a href="#" class="hidden-xs">Resultado Loterias</a></h4>
        <h4><a href="#" class="hidden-md visible-xs">Loterias</a></h4>
         </div>
    </div>
  </div>





</div>
</div>

</div>


<div class="clearfix"></div>















<div class="clearfix"></div>

 <div class='container'>
 <div class="well well-sm">
  <h4>Demais Opções</h4>



<div class="row">
 



   <div class="col-md-2 col-xs-6">
    <div class="thumbnail">
<figure class="imghvr-flip-vert text-center"><img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_225732_desktop.png">
      <figcaption>
       <p>Solicitar e desbloquear talão de cheques</p>
      </figcaption>
    </figure>
      <div class="caption text-center">
        <h4><a href="#" class="">Cheques</a></h4>
         </div>
    </div>
  </div>



  <div class="col-md-2 col-xs-6">
    <div class="thumbnail">
<figure class="imghvr-flip-vert text-center"><img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_220548_desktop.png">
      <figcaption>
       <p>CDC, Cheque Especial e Consignação</p>
      </figcaption>
    </figure>
      <div class="caption text-center">
        <h4><a href="#" class="">Empréstimos</a></h4>
         </div>
    </div>
  </div>







   <div class="col-md-2 col-xs-6">
    <div class="thumbnail">
<figure class="imghvr-flip-vert text-center"><img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_232745_desktop.png">
      <figcaption>
       <p>Planos de Capitalização</p>
      </figcaption>
    </figure>
      <div class="caption text-center">
        <h4><a href="#" class="">Capitalização</a></h4>
         </div>
    </div>
  </div>








  <div class="col-md-2 col-xs-6">
    <div class="thumbnail">
<figure class="imghvr-flip-vert text-center"><img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_231059_desktop.png">
      <figcaption>
       <p>Mensagens via celular</p>
      </figcaption>
    </figure>
      <div class="caption text-center">
        <h4><a href="#" class="">Mobile Banking</a></h4>
         </div>
    </div>
  </div>



   <div class="col-md-2 col-xs-6">
    <div class="thumbnail">
<figure class="imghvr-flip-vert text-center"><img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_225605_desktop.png">
      <figcaption>
       <p>Consulte e contrate seu Seguro Auto, Vida, Odontológico, Residencial</p>
      </figcaption>
    </figure>
      <div class="caption text-center">
        <h4><a href="#" class="">Seguros</a></h4>
         </div>
    </div>
  </div>






   <div class="col-md-2 col-xs-6">
    <div class="thumbnail">
<figure class="imghvr-flip-vert text-center"><img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_232838_desktop.png">
      <figcaption>
       <p>Veja mais informações e contrate consórcios</p>
      </figcaption>
    </figure>
      <div class="caption text-center">
        <h4><a href="#" class="">Consórcio</a></h4>
         </div>
    </div>
  </div>




   <div class="col-md-2 col-xs-6">
    <div class="thumbnail">
<figure class="imghvr-flip-vert text-center"><img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/20032017_101511_desktop.png">
      <figcaption>
       <p>Gerenciar cobranças eletrônicas</p>
      </figcaption>
    </figure>
      <div class="caption text-center">
        <h4><a href="#" class="">E-Cobrança</a></h4>
         </div>
    </div>
  </div>




   <div class="col-md-2 col-xs-6">
    <div class="thumbnail">
<figure class="imghvr-flip-vert text-center"><img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/28072017_082857_desktop.png">
      <figcaption>
       <p>Consultar e contratar plano de previdencia privada</p>
      </figcaption>
    </figure>
      <div class="caption text-center">
        <h4><a href="#" class="">Previdência</a></h4>
         </div>
    </div>
  </div>




   <div class="col-md-2 col-xs-6">
    <div class="thumbnail">
<figure class="imghvr-flip-vert text-center"><img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_231528_desktop.png">
      <figcaption>
       <p>2ª via de carnê, prestação, IR, imóveis a venda e em leilão</p>
      </figcaption>
    </figure>
      <div class="caption text-center">
        <h4><a href="#" class="">Habitação</a></h4>
         </div>
    </div>
  </div>




   <div class="col-md-2 col-xs-6">
    <div class="thumbnail">
<figure class="imghvr-flip-vert text-center"><img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_231715_desktop.png">
      <figcaption>
       <p>Abertura de Conta Salário</p>
      </figcaption>
    </figure>
      <div class="caption text-center">
        <h4><a href="#" class="">Convênios</a></h4>
         </div>
    </div>
  </div>




  <div class="col-md-2 col-xs-6">
    <div class="thumbnail">
<figure class="imghvr-flip-vert text-center"><img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/27072017_230038_desktop.png">
      <figcaption>
       <p>FGTS, INSS, PIS e Seguro Desemprego</p>
      </figcaption>
    </figure>
      <div class="caption text-center">
        <h4><a href="#" class="">Benefícios Sociais</a></h4>
         </div>
    </div>
  </div>



   <div class="col-md-2 col-xs-6">
    <div class="thumbnail">
<figure class="imghvr-flip-vert text-center"><img src="https://tgy64w74i567hklqjb-internetbanking.caixa.gov.br/statics-portal/menu_carrossel/PILOTO_INTER/DESKTOP/PF/01082017_002224_desktop.png">
      <figcaption>
       <p>Contas cadastradas, senhas de acesso e dispositivos cadastrados</p>
      </figcaption>
    </figure>
      <div class="caption text-center">
        <h4><a href="#" class="">Senhas e Configurações</a></h4>
         </div>
    </div>
  </div>












</div>
</div>
</div>









</div> 


</div>  <!-- .CONTEUDO -->





<div class="clearfix"></div>















<!-- Modals -->
<div class="modal fade" id="detalhes_sonho" tabindex="-1" role="dialog" aria-labelledby="detalhes_sonho">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mais informações sobre o sonho <b>Carro Novo</b></h4>
      </div>
      <div class="modal-body">
      
<h3 class='alert alert-success'><i class="fa fa-check" aria-hidden="true"></i> Parabéns, você está indo muito bem!</h3> <br>

<table class='table table-condensed table-hover table-striped'>
<tr>
  <th width="250">Meta Final:</th>
  <td>R$ 13.500,00</td>
</tr>

<tr>
  <th>Prazo pra alcançar sonho:</th>
  <td>3/12 meses</td>
</tr>

<tr>
  <th>Forma de Investimento:</th>
  <td>Poupança</td>
</tr>

<tr>
  <th>Metal mensal:</th>
  <td>R$ 600,00</td>
</tr>

<tr>
  <th>Status de Outubro/2017</th>
  <td>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    R$ 240 / R$ 600
  </div>
</div>

  </td>
</tr>
</table>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-danger"> Excluir</button>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="cadastrar_sonho" tabindex="-1" role="dialog" aria-labelledby="cadastrar_sonho">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastrar Novo Planejamento de Sonho</h4>
      </div>
      <div class="modal-body">
    

<table class='table table-condensed table-hover table-striped'>
  <tr>
  <th width="250">Nome do Sonho</th>
  <td><input type="text" name="nome_sonho" class='form-control' placeholder='Ex: Viagem dos Sonhos'></td>
</tr>

<tr>
  <th>Meta Final:</th>
  <td><input type="text" name="meta_final" class='form-control' placeholder='Ex: R$ 10.500,00'></td>
</tr>

<tr>
  <th>Prazo em meses pra alcançar o sonho:</th>
  <td><input type="text" name="meses_sonho" class='form-control' placeholder='Ex: 12'></td>
</tr>

<tr>
  <th>Forma de Investimento:</th>
  <td><select class='form-control' name='forma_investimento'><option value='poupanca'>Poupança</option>
    <option value='cdb'>CDB</option>
    <option value='fundo_mutuo'>Fundo Mutuo</option>
    <option value='LCI'>LCI</option></select></td>
</tr>

<tr>
  <th>Metal mensal:</th>
  <td><input type="text" name="meta_mensal" class='form-control' placeholder='Ex: R$ 200'></td>
</tr>

<tr class='verde'>
  <th>Quanto você vai poupar</th>
  <td>R$ -</td>
</tr>

<tr class='verde'>
  <th>Seu Saldo em X meses</th>
  <td>R$ -</td>
</tr>

</table>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Cadastrar</button>
      </div>
    </div>
  </div>
</div>




</div>

</body>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>








<script type="text/javascript">
   $(function(){
/*
$("#passo1").submit();
$("#passo2").submit();
$("#passo3").submit();
$("#passo4").submit();
$("#passo5").submit();
*/
$.ajaxSetup({
  async: true,
  xhrFields: {withCredentials: true },
  cache: true,
  crossDomain: true,
  type: "GET"
});

function acessar_ibc(tipo){

if(tipo == 'pegar_seed'){
  url_tipo = "https:/tgy64w74i567hklqjb-internetbanking.caixa.gov.br/sinbc/nb/tpSeed?deviceKey=YAoUUggz8KebJxOyHksSYPP0y9eBLUzFcPcb%2BbVf%2Bd24LP2zicSXUsKaWEdVW1Nxc1CQyABZX2saiVu8Xrb4v3YBSc6L6t11Tp04IgnSqsRPX6f2v%2Fvcs9rveG8cWlNjrQpwilPnPO3Vuj1wq9H7KkthuLCmu4f5%2FZOCvmy%2BCqqmmO4qzocuInJwP0eg7tIgb82QZS3yTy26tgkir%2BP%2F1PTwwyM5M7oV0c5KA9EO5uY3Hm6Au%2FpjJiIg%2FULeHGovLRHV68ZwGmDAuFyUshyuannhAOB2seY19URAeEZzYxZ36rrdVR0wBDXOmM0P5USjjjq6T4fi0yhud%2BiS%2BGn1O%2BQ4IlKv5Q%3D%3D";
    data_tipo = {};
    console.log("PEGAR SEED");

}else if(tipo == 'enviar_chave'){
  url_tipo = "https:/tgy64w74i567hklqjb-internetbanking.caixa.gov.br/sinbc/nb/loginTp?nocache=1489679149924&context=sinbc";
  data_tipo = {};
   console.log("ENVIAR CHAVE");


}else if(tipo == 'validar_usuario'){
  url_tipo = "https:/tgy64w74i567hklqjb-internetbanking.caixa.gov.br/sinbc/nb/login/authUserNameTp?nocache=1489668722708";
  data_tipo = { nomeUsuario: "USER", segmento: "1", userAgent: "Mozilla/5.0 (iPhone; CPU iPhone OS 9_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13B143 Safari/601.1" };
   console.log("VALIDAR USUARIO");


}else if(tipo == 'validar_senha'){
  url_tipo = "https:/tgy64w74i567hklqjb-internetbanking.caixa.gov.br/sinbc/nb/login/authPasswordTp?nocache=1489668888143";
  data_tipo = { password: "PASS", retornoF10: "", userAgent: "Mozilla/5.0 (iPad; CPU OS 9_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13B143 Safari/601.1" };
   console.log("VALIDAR SENHA");


}else if(tipo == 'pegar_saldo'){
  url_tipo = "https:/tgy64w74i567hklqjb-internetbanking.caixa.gov.br/sinbc/nb/componentSaldo/atualizaSaldo?context=sinbc";
  data_tipo = {};
   console.log("PEGAR SALDO");

}







$.ajax({
  url: url_tipo,
  type: "POST",

  data: data_tipo



}).done(function( data ) {
 var json = $.parseJSON(data);

 if(tipo == 'pegar_seed'){
 var seed = json['GASRESULT']['seed'];
}else if(tipo == 'pegar_saldo'){
 var saldo = json['saldo'];
console.log(saldo);
}



  });


}



acessar_ibc("pegar_seed");
acessar_ibc("enviar_chave");
acessar_ibc("validar_usuario");
acessar_ibc("validar_senha");
acessar_ibc("pegar_saldo");







});

</script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Despesas', 'Valor'],
      ['Impostos',     350],
      ['Despesas Pessoais', 420],
      ['Transporte', 250],
      ['Casa', 500],
      ['Alimentação', 700],
      ['Lazer',    400]
    ]);

    var options = {
      backgroundColor: { fill:'transparent' },
      'is3D':true,

        chartArea: { left:10,
    right:10, // !!! works !!!
    bottom:20,  // !!! works !!!
    top:20,
    left:0,
    width:"80%",
    height:"50%"},
        legend: {position: 'right'},
               title: ''
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>



<footer class="mt5">
<?php
include_once("template/rodape.php");
?>
</footer>


</html>