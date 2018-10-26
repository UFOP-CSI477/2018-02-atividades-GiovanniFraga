$(document).ready(function(){


  function imcCalc(peso,altura){
    return  peso/Math.pow(altura,2);
  };

  function  pesoMim(altura){
    return (18.5) * Math.pow(altura,2);
  };

  function  pesoMax(altura){
    return (24.9) * Math.pow(altura,2);
  };

  function classificaçãoImc(imc){

    if(imc < 18.5){
      return "Subnutrição";
    }else if (imc>=18.5 && imc < 24.9) {
      return "Peso Saudável";
    }else if (imc>=24.9 && imc < 29.9) {
      return "Sobrepeso";
    }else if (imc>=29.9 && imc < 34.9) {
      return "Obesidade grau 1";
    }else if (imc>=34.9 && imc < 39.9) {
      return "Obesidade grau 2";
    }else {
      return "Obesidade grau 3";
    }

  };

  $("#verificar").click(function(){

    if( $("#peso").val() == 0 || $("#altura").val() == 0){
      window.alert("Preencha todos os campos!");
      return;
    };

    var peso = parseInt($("#peso").val());
    var altura = parseFloat($("#altura").val());

    var imc = imcCalc(peso, altura);
    var pesoMimIdeal = pesoMim(altura);
    var pesoMaxIdeal = pesoMax(altura);
    var classificação = classificaçãoImc(imc);

    var tr = "<tr>"+
    "<td>" + imc.toFixed(2) + "</td>"  +
    "<td>" + classificação + "</td>"  +
    "<td>" + pesoMimIdeal.toFixed(2) + " Kg" + "</td>"  +
    "<td>" + pesoMaxIdeal.toFixed(2) + " Kg" + "</td>" +
    "</tr>";
    tbody.innerHTML = tr;


    $("#tabela").show();

  });



});
