// Criandos cosntantes:
const precoBarato = 0, precoCaro = 1;
const amassadoMuito = 0, amassadoPouco = 1;
const seguroAlto = 0, seguroBaixo = 1;
const idadeNovo = 0, idadeVelho = 1;
const kmAlto = 0, kmBaixo = 1;
const anoVelho = 0, anoNovo = 1;

let paginaPassada = "main_form";

const preco = [ [1, 0.9, 0.8, 0.7, 0.6, 0.5, 0.4, 0.3, 0.2, 0.1, 0],
                [0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1]];
const amassado = [[0,0,0,0.2,0.4,0.6,0.8,1,1],
                  [1,1,1,0.8,0.6,0.4,0.2,0,0]];
const idade = [ [1,0.8,0.6,0.4,0.2,0],
                [0,0.2,0.4,0.6,0.8,1]];
const km = [[0,0,0.3,0.6,0.9,1],
            [1,0.9,0.6,0.3,0,0]];
const ano = [ [1,0.6,0.2,0,0,0],
              [0,0,0,0.2,0.6,1]];
const seguro = [[0,0,0.2,0.4,0.6,0.75,1,1],
                [1,1,0.8,0.6,0.4,0.2,0,0]];


// Corpo principal da função:
function mainfuzzy() {

  const valoresEntrada = pegaValoresFront();
  // Se preço é caro e amassados são poucos e idade é novo Então seguro é alto						
  // Se preço é barato e amassados são poucos e quilometragem é alta Então seguro é baixo						
  // Se preço é barato e amassados são muitos e ano é novo Então seguro é alto

  var resultadoRegra1 = testarRegra(valoresEntrada, precoCaro, amassadoPouco, idadeNovo, "idade", idade);
  var resultadoRegra2 = testarRegra(valoresEntrada, precoBarato, amassadoPouco, kmAlto, "km", km);
  var resultadoRegra3 = testarRegra(valoresEntrada, precoBarato, amassadoMuito, anoNovo, "ano", ano);

  var valorFinalRegra1 = pegarValorSeguro(seguroAlto, resultadoRegra1);
  var valorFinalRegra2 = pegarValorSeguro(seguroBaixo, resultadoRegra2);
  var valorFinalRegra3 = pegarValorSeguro(seguroAlto, resultadoRegra3);

  printaValoresTela(resultadoRegra1, valorFinalRegra1, resultadoRegra2, valorFinalRegra2, resultadoRegra3 ,valorFinalRegra3);

  console.log(valorFinalRegra1);
  console.log(valorFinalRegra2);
  console.log(valorFinalRegra3);

}

// Pegando valores do front, calculando e arredondando conforme necessário:
function pegaValoresFront() {
  const form = document.querySelector('form');
  const inputs = form.querySelectorAll('input[type="number"]');
  const valoresEntrada = {};

  inputs.forEach(input => {
    valoresEntrada[input.name] = parseFloat(input.value);
  });

  // Calculando e arredondando os valores
  valoresEntrada["preco"] = valoresEntrada["preco"] / 2500;
  valoresEntrada["preco"] = Math.round(valoresEntrada["preco"]);

  valoresEntrada["idade"] = (valoresEntrada["idade"] / 10) - 2;
  valoresEntrada["idade"] = Math.round(valoresEntrada["idade"]);

  valoresEntrada["km"] = valoresEntrada["km"] / 20000;
  valoresEntrada["km"] = Math.round(valoresEntrada["km"]);

  valoresEntrada["ano"] = (valoresEntrada["ano"] - 2006) / 3;
  valoresEntrada["ano"] = Math.round(valoresEntrada["ano"]);

  return valoresEntrada;
}

// Testando as regras, recebendo os menores valores entre as pertinencias
function testarRegra(valoresEntrada, nivelPreco, nivelAmassado, nivelVariavel, nomeVariavel, vetorVariavel){
	let retorno = 0;
  const valorPreco = valoresEntrada["preco"];
  const valorAmassado = valoresEntrada["amassado"];
  const valorVariavel = valoresEntrada[nomeVariavel];

  if( (preco[nivelPreco][valorPreco] != 0) && 
      (amassado[nivelAmassado][valorAmassado] != 0) && 
      (vetorVariavel[nivelVariavel][valorVariavel] != 0)) {


        retorno = Math.min(
          preco[nivelPreco][valorPreco],
          amassado[nivelAmassado][valorAmassado],
          vetorVariavel[nivelVariavel][valorVariavel]
        );
  }	

  if(retorno == preco[nivelPreco][valorPreco])
    atualizaDetalhes(preco[nivelPreco][valorPreco], nivelPreco, "preco");
  if(retorno == amassado[nivelAmassado][valorAmassado]) 
    atualizaDetalhes(amassado[nivelAmassado][valorAmassado], nivelAmassado, "amassado");
  if(retorno == vetorVariavel[nivelVariavel][valorVariavel]) 
    atualizaDetalhes(vetorVariavel[nivelVariavel][valorVariavel], nivelVariavel, nomeVariavel);


	return retorno;
}

// Encontrando o valor do seguro
function pegarValorSeguro(nivelSeguro, valorRegra){
  const seguroPreco = [50,70,100,200,300,400,500,600];
  let indiceMaisProximo = 0;
  let menorDiferenca = Math.abs(seguro[nivelSeguro][0] - valorRegra);

  for(let i = 1; i < seguro[nivelSeguro].length; i++) {
    const diferencaAtual = Math.abs(seguro[nivelSeguro][i] - valorRegra);
    if (diferencaAtual < menorDiferenca) {
      menorDiferenca = diferencaAtual;
      indiceMaisProximo = i;
    }
  }

  atualizaDetalhes(valorRegra, nivelSeguro, "seguro");
  atualizaDetalhes(seguroPreco[indiceMaisProximo], "scope", "seguro");

  return seguroPreco[indiceMaisProximo];
}

// Printa na tela os resultados:
function printaValoresTela(resultadoRegra1, valorFinalRegra1, resultadoRegra2, valorFinalRegra2, resultadoRegra3 ,valorFinalRegra3) {
  document.getElementById("result-r1").innerHTML = resultadoRegra1;
  document.getElementById("result-r2").innerHTML = resultadoRegra2;
  document.getElementById("result-r3").innerHTML = resultadoRegra3;

  document.getElementById("final-r1").innerHTML = valorFinalRegra1;
  document.getElementById("final-r2").innerHTML = valorFinalRegra2;
  document.getElementById("final-r3").innerHTML = valorFinalRegra1;

  resultadofinal = ((resultadoRegra1*valorFinalRegra1)+(resultadoRegra2*valorFinalRegra2)+(resultadoRegra3*valorFinalRegra3)) / (resultadoRegra1+resultadoRegra2+resultadoRegra3);
  if(resultadofinal > 0)
    document.getElementById("result-final").innerHTML = resultadofinal+" reais";
  else {
    document.getElementById("result-final").innerHTML = "Seguro não aplicável!";
  }

  var main_form = document.getElementById("main_form");
  var main_resultado = document.getElementById("main_resultado");
  main_form.classList.add("hidden");
  main_resultado.classList.remove("hidden");
}

function mostraDetalhes() {
  var detalhes = document.getElementById("main_detalhes");
  var resultado = document.getElementById("main_resultado");
  var main_form = document.getElementById("main_form");

  if(detalhes.classList.contains("hidden")) {
    detalhes.classList.remove("hidden");
    resultado.classList.add("hidden");
    main_form.classList.add("hidden");
  } else {
    detalhes.classList.add("hidden");
    resultado.classList.add("hidden");
    main_form.classList.remove("hidden");
  }

}

function atualizaDetalhes(valorVariavel, nivelVariavel, nomeVariavel) {
  tabela_preco = document.getElementById("tabela_preco");
  tabela_amassados = document.getElementById("tabela_amassados");
  tabela_idade = document.getElementById("tabela_idade");
  tabela_km = document.getElementById("tabela_km");
  tabela_ano = document.getElementById("tabela_ano");

  console.log(nomeVariavel+"_"+nivelVariavel+"_"+valorVariavel);
  if(nivelVariavel == "scope") {
    console.log(document.getElementById(nomeVariavel+"_"+nivelVariavel+"_"+valorVariavel));
    document.getElementById(nomeVariavel+"_"+nivelVariavel+"_"+valorVariavel).classList.add("top-cel-hightlight");
  } else {
    document.getElementById(nomeVariavel+"_"+nivelVariavel+"_"+valorVariavel*10).classList.add("cel-hightlight");
  }
}