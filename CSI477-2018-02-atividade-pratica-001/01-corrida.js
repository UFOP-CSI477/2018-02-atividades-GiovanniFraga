$(document).ready(function(){


  var dados= new Array();

  function addCorredor(largada,nome, tempo, chegada){
    var corredor = {
      Largada:largada,
      Nome:nome,
      Tempo:tempo,
      Chegada:chegada,
      Vencedor:""
    };

    dados.push(corredor);
  }

  var tbody = document.getElementById('tbody');

  function compare(a,b) {
    var aa = parseInt(a.Tempo),
    bb = parseInt(b.Tempo);

    if (aa < bb)
    return -1;
    if (aa > bb)
    return 1;
    return 0;
  }


  $("#cadastrar").click(function(){

    if( $("#nome1").val() == 0 || $("#tempo1").val() == 0 ||
        $("#nome2").val() == 0 || $("#tempo2").val() == 0 ||
        $("#nome3").val() == 0 || $("#tempo3").val() == 0 ||
        $("#nome4").val() == 0 || $("#tempo4").val() == 0 ||
        $("#nome5").val() == 0 || $("#tempo5").val() == 0 ||
        $("#nome6").val() == 0 || $("#tempo6").val() == 0  ) {
      window.alert("Preencha todos os campos!");

      return;
    }

    addCorredor(1,$("#nome1").val(),$("#tempo1").val(),1,"");
    addCorredor(2,$("#nome2").val(),$("#tempo2").val(),1,"");
    addCorredor(3,$("#nome3").val(),$("#tempo3").val(),1,"");
    addCorredor(4,$("#nome4").val(),$("#tempo4").val(),1,"");
    addCorredor(5,$("#nome5").val(),$("#tempo5").val(),1,"");
    addCorredor(6,$("#nome6").val(),$("#tempo6").val(),1,"");

    dados.sort(compare);

    var chegada=1;
    for (i = 0; i < 5; i++) {
      if(dados[i].Tempo == dados[i+1].Tempo){
        dados[i+1].Chegada = chegada;
      }
      else {
        dados[i+1].Chegada  = chegada+1;
        chegada+=1;
      }
    }

    for (i = 0; i < 6; i++) {
      if(dados[i].Chegada==1){
        dados[i].Vencedor = "Vencedor(a)";
      }
    }

    for (i = 0; i < 6; i++) {
      var tr = "<tr>"+
      "<td>" + dados[i].Chegada + "</td>"  +
      "<td>" + dados[i].Largada + "</td>"  +
      "<td>" + dados[i].Nome + "</td>"  +
      "<td>" + dados[i].Tempo + "</td>"  +
      "<td>" + dados[i].Vencedor + "</td>"  +
      "</tr>";
      tbody.innerHTML += tr;
    }



    $("#dados").hide();

    $("#subtitulo").text("Resultado da corrida");

    $("#tabela").show();
  });



});
