<?php
require_once "../vendor/autoload.php";
use unixelias\OpenPagoo\Boletos;
/*
 * Modelo apenas demonstrativo para o layout
 * Para validar os dados insira informações reais
 */
$boleto = new Boletos(Boletos::BOLETOSPHP_BANCOOB);
//var_dump($boleto);
$boleto->setData([
	//Campos requeridos
	"valor_boleto" => "3,00",
	"data_vencimento" => "30/03/2018",
	"nosso_numero" => "1800001",//passar o índice do boleto
	"agencia" => "3046",
	"conta" => "25151", //Número da conta
	"conta_dv" => "3",
	"convenio" => "306380", //Código do Cliente
	"carteira" => "1",
	"identificacao" => "Preparatório Diamantinense",
	"cpf_cnpj" => "72.035.942/0001-16",

	//DEMAIS CAMPOS
	"numero_documento" => "DEV180001",//por enquanto o mesmo do contrato
	"data_documento" => "07/03/2018",
	"data_processamento" => "07/03/2018",
	"endereco" => "R. da Glória, 152, 39100-000",
	"sacado" => "Elias da Cunha Alves",
	"cpf_cnpj_sacado" => "042.720.316-35",
	"endereco1" => "Rua Belvedere, 287 Queluz",
	"endereco2" => "Conselheiro Lafaiete - MG",
	"nome_avalista" => "Etelvaldo Madeira",

	//Informativo do canhoto que fica com o Sacado
	"demonstrativo1" => "Demonstrativo 1 do canhoto - interno/não vai pro banco - informação ao cliente",
	"demonstrativo2" => " *- interno/não vai pro banco - informação ao cliente",
	"demonstrativo3" => " *- interno/não vai pro banco - informação ao cliente",

	//Instruções dentro do boleto
	"instrucoes1" => "Após venc. Mora 0,03%ad/multa2,00%",
	"instrucoes2" => "Não Conceder Desconto",
	"instrucoes3" => "Sujeito a protesto após o venc.",
	"instrucoes4" => "VelvetTux Soluções em Sistemas <('')",

	"quantidade" => "3",
	"valor_unitario" => "1,0",
	"aceite" => "N",
	"especie" => "R$",
	"especie_doc" => "DM",
	"cidade_uf" => "Diamantina/MG",
	"cep" => "39100-000",
	"cedente" => "Avelar e Cordeiro Ltda-ME",

	//Específicos do SICOOB
	"modalidade_cobranca" => "01",
	"valor_desconto_1" => "",
	"valor_desconto_2" => "",
	"valor_multa" => "",
	"contrato" => "DEV180001",
	"numero_parcela" => "01",
	"total_parcelas" => "01"

]);
$boleto->setImageBasePath("img/boleto/");
//echo $boleto->render('carne');
//echo $boleto->render('carne');
//echo $boleto->render('carne');




//echo '<br /><br /><br /><br /><br /><br />';
echo $boleto->render('a4');


/*
$dadosboleto = $boleto->getDadosBoleto();

foreach ($dadosboleto as $i => $value) {
	echo ($dadosboleto[$i] . "<br />");
}
*/
?>
