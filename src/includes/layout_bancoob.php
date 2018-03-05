<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $dadosboleto['identificacao']; ?></title>
    <meta name="Generator" content="Open Pagoo -br - Licença GPL" />
		<meta name="author" content="Elias Alves"/>
    <style> <?php include 'css/a4-style.css'; ?>  </> </style>
</head>

  <body>
	<table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="boletoa4">
		<col class="col0">
		<col class="col1">
		<col class="col2">
		<col class="col3">
		<col class="col4">
		<col class="col5">
		<col class="col6">
		<col class="col7">
		<col class="col8">
		<tbody>
		  <tr>
			<td class="cen" colspan="9">Instruções de Impressão</td>
		  </tr>
		  <tr class="row40">
			<td class="aviso" colspan="9">
                <ul>
                    <li>Imprima em impressora jato de tinta (ink jet) ou laser em qualidade normal ou alta (Não use modo econômico).</li>
                    <li>Utilize folha A4 (210 x 297 mm) ou Carta (216 x 279 mm) e margens mínimas à esquerda e à direita do formulário.</li>
                    <li>Corte na linha indicada. Não rasure, risque, fure ou dobre a região onde se encontra o código de barras.</li>
                    <li>Caso tenha problemas ao imprimir, copie a sequência numérica abaixo e pague no caixa eletrônico ou no internet banking:</li>
                </ul>
		  </tr>
		  <tr>
			<td class="aviso-canhoto" colspan="9">Linha Digitável: &nbsp;<?php echo $dadosboleto['linha_digitavel'] ?></td>
		  </tr>
		  <tr>
			<td class="aviso-canhoto" colspan="9">Valor: &nbsp;&nbsp;R$ <?php echo $dadosboleto['valor_boleto'] ?></td>
		  </tr>
		  <tr>
			<td class="tracejada" colspan="9"></td>
          </tr>
		  <tr class="row8">
			<td class="aviso-tracejada" colspan="9">Recibo do Sacado</td>
		  </tr>
		  <tr>
			<td class="logo-empresa" colspan="3" rowspan="4"><img src="<?php echo $boleto->getImageBasePath() ?>logo_ns.png" /></td>
			<td class="titulo-empresa" colspan="6"><?php echo $dadosboleto['identificacao']; ?></td>
          </tr>
		  <tr class="row8">
            <td class="cnpj-empresa" colspan="6">
                <?php echo isset($dadosboleto['cpf_cnpj']) ? ' '.$dadosboleto['cpf_cnpj'] : '' ?>
            </td>
		  </tr>
		  <tr class="row8">
			<td class="end-empresa" colspan="6"><?php echo $dadosboleto['endereco']; ?></td>
		  </tr>
		  <tr class="row8">
			<td class="end-empresa"  colspan="6"><?php echo $dadosboleto['cidade_uf']; ?></td>
		  </tr>
		  <tr class="row40">
			<td  colspan="9"></td>
		  </tr>
		  <tr class="row20">
			<td class="logo-banco" colspan="2"><img src="<?php echo $boleto->getImageBasePath() ?>logobancoob.jpg" /></td>
			<td class="numero-banco"><?php echo $dadosboleto['codigo_banco_com_dv'] ?></td>
			<td class="linha-digitavel" colspan="6"><?php echo $dadosboleto['linha_digitavel'] ?></td>
		  </tr>
		  <tr>
			<td class="topline" colspan="4">Cedente</td>
			<td class="topline" colspan="2">Agência / Cód. do Cedente</td>
			<td class="topline">Espécie</td>
			<td class="topline">Quantidade</td>
			<td class="topline">Nosso Número</td>
		  </tr>
		  <tr>
			<td class="bottomline" colspan="4"><?php echo $dadosboleto['cedente']; ?></td>
			<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['agencia_codigo'] ?></td>
			<td class="bottomline dir"><?php echo $dadosboleto['especie'] ?></td>
			<td class="bottomline dir"><?php echo $dadosboleto['quantidade'] ?></td>
			<td class="bottomline dir"><?php echo $dadosboleto['nosso_numero'] ?></td>
		  </tr>
		  <tr>
			<td class="topline">Nº documento</td>
			<td class="topline">Contrato</td>
			<td class="topline" colspan="3">CPF/CNPJ</td>
			<td class="topline" colspan="2">Vencimento</td>
			<td class="topline" colspan="2">Valor documento</td>
		  </tr>
		  <tr>
			<td class="bottomline dir"><?php echo $dadosboleto['numero_documento'] ?></td>
			<td class="bottomline dir"><?php echo $dadosboleto['numero_documento'] ?></td>
			<td class="bottomline dir" colspan="3"><?php echo $dadosboleto['cpf_cnpj'] ?></td>
			<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['data_vencimento'] ?></td>
			<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['valor_boleto'] ?></td>
		  </tr>
		  <tr>
			<td class="topline">(-) Desconto/Abatimentos</td>
			<td class="topline" colspan="2">(-) Outras deduções</td>
			<td class="topline" colspan="2">(+) Mora/Multa</td>
			<td class="topline" colspan="2">(+) Outros acréscimos</td>
			<td class="topline destaque" colspan="2">(=) Valor cobrado</td>
		  </tr>
		  <tr>
			<td class="bottomline dir"><?php echo $dadosboleto['valor_desconto_1'] ?></td>
			<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['valor_desconto_2'] ?></td>
			<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['valor_multa'] ?></td>
			<td class="bottomline dir" colspan="2"></td>
			<td class="bottomline dir destaque" colspan="2"> 99,99 </td>
		  </tr>
		  <tr>
			<td class="topline" colspan="9">Sacado</td>
		  </tr>
		  <tr>
			<td class="bottomline" colspan="9"><?php echo $dadosboleto['sacado'] ?></td>
		  </tr>
		  <tr>
			<td class="aviso-tracejada esq" colspan="8">Demonstrativo</td>
			<td class="aviso-tracejada">Autenticação Mecânica</td>
		  </tr>
		  <tr class="row10">
			<td class="aviso" colspan="9"> <?php echo $dadosboleto['demonstrativo1'] ?></td>
		  </tr>
		  <tr class="row10">
			<td class="aviso" colspan="9"> <?php echo $dadosboleto['demonstrativo2'] ?></td>
		  </tr>
		  <tr class="row10">
			<td class="aviso" colspan="9"> <?php echo $dadosboleto['demonstrativo3'] ?></td>
          </tr>
          <tr class="row10">
			<td class="aviso" colspan="9"> Essa lista pode ser estendida por exemplo com uma descrição dos itens de contrato</td>
		  </tr>
		  <tr>
			<td class="tracejada" colspan="9">Corte na linha pontilhada</td>
		  </tr>
		  <tr class="row15">
			<td  colspan="9"></td>
		  </tr>
		  <tr class="row20">
			<td class="logo-banco" colspan="2"><img src="<?php echo $boleto->getImageBasePath() ?>logobancoob.jpg" /></td>
			<td class="numero-banco"><?php echo $dadosboleto['codigo_banco_com_dv'] ?></td>
			<td class="linha-digitavel" colspan="6"><?php echo $dadosboleto['linha_digitavel'] ?></td>
		  </tr>
		  <tr>
			<td class="topline" colspan="7">Local de pagamento</td>
			<td class="topline destaque" colspan="2">Vencimento</td>
		  </tr>
		  <tr>
			<td class="bottomline" colspan="7">Pagável em qualquer Banco até o vencimento</td>
			<td class="bottomline dir destaque" colspan="2"><?php echo $dadosboleto['data_vencimento'] ?></td>
		  </tr>
		  <tr>
			<td class="topline" colspan="7">Cedente</td>
			<td class="topline" colspan="2">Agência / Código do Cedente</td>
		  </tr>
		  <tr>
			<td class="bottomline" colspan="7"><?php echo $dadosboleto['cedente'] ?></td>
			<td class="bottomline dir" colspan="2"> <?php echo $dadosboleto['agencia_codigo'] ?></td>
		  </tr>
		  <tr>
			<td class="topline">Data do documento</td>
			<td class="topline" colspan="2">Nª Documento</td>
			<td class="topline">Espécie doc.</td>
			<td class="topline">Aceite</td>
			<td class="topline" colspan="2">Data processamento</td>
			<td class="topline" colspan="2">Nosso Número</td>
		  </tr>
		  <tr>
			<td class="bottomline dir"><?php echo $dadosboleto['data_documento'] ?></td>
			<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['numero_documento'] ?></td>
			<td class="bottomline dir"><?php echo $dadosboleto['especie_doc'] ?></td>
			<td class="bottomline dir"><?php echo $dadosboleto['aceite'] ?></td>
			<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['data_processamento'] ?></td>
			<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['nosso_numero'] ?></td>
		  </tr>
		  <tr>
			<td class="topline destaque" colspan="2">Uso do Banco</td>
			<td class="topline">Carteira</td>
			<td class="topline">Espécie</td>
			<td class="topline" colspan="2">Quantidade</td>
			<td class="topline">(x) Valor</td>
			<td class="topline" colspan="2">(=) Valor documento</td>
		  </tr>
		  <tr>
			<td class="bottomline destaque" colspan="2"></td>
			<td class="bottomline dir"><?php echo $dadosboleto['carteira'] ?></td>
			<td class="bottomline dir"><?php echo $dadosboleto['especie'] ?></td>
			<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['quantidade'] ?></td>
			<td class="bottomline dir"><?php echo $dadosboleto['valor_unitario'] ?></td>
			<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['valor_boleto'] ?></td>
		  </tr>
		  <tr>
			<td class="topline" colspan="7">Instruções (Texto de responsabilidade do cedente)</td>
			<td class="topline" colspan="2">(-) Desconto / Abatimentos</td>
		  </tr>
		  <tr>
			<td class="instrucao" colspan="7"><?php echo $dadosboleto['instrucoes1']; ?></td>
			<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['valor_desconto_1'] ?></td>
		  </tr>
		  <tr>
			<td class="instrucao" colspan="7"><?php echo $dadosboleto['instrucoes2']; ?></td>
			<td class="topline" colspan="2">(-) Outras deduções</td>
		  </tr>
		  <tr>
			<td class="instrucao" colspan="7"><?php echo $dadosboleto['instrucoes3']; ?></td>
			<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['valor_desconto_2'] ?></td>
		  </tr>
		  <tr>
			<td class="instrucao" colspan="7"><?php echo $dadosboleto['instrucoes4']; ?></td>
			<td class="topline" colspan="2">(+) Mora / Multa</td>
		  </tr>
		  <tr>
			<td class="instrucao" colspan="7"></td>
			<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['valor_multa'] ?></td>
		  </tr>
		  <tr>
			<td class="topline" colspan="7">Sacador / Pagador</td>
			<td class="topline" colspan="2">(+) Outros acréscimos</td>
		  </tr>
		  <tr class="row10">
			<td class="instrucao" colspan="7"><?php echo $dadosboleto['sacado'] ?></td>
			<td class="bottomline dir" colspan="2"></td>
		  </tr>
		  <tr class="row10">
			<td class="instrucao" colspan="7"><?php echo $dadosboleto['endereco1'] ?></td>
			<td class="topline" colspan="2">(=) Valor cobrado</td>
		  </tr>
		  <tr class="row10">
			<td class="instrucao" colspan="7"><?php echo $dadosboleto['endereco2'] ?></td>
			<td class="bottomline dir" colspan="2"></td>
		  </tr>
		  <tr class="row20">
			<td class="topline-invertida" colspan="7">Sacador/Avalista: </td>
			<td class="topline-invertida" colspan="2">Cód. baixa</td>
		  </tr>
		  <tr>
			<td class="aviso-tracejada" colspan="8">Autenticação mecânica -</td>
			<td class="compensacao dir">Ficha de Compensação</td>
		  </tr>
		  <tr class="row40">
			<td class="aviso" colspan="9"><?php echo self::fbarcode($dadosboleto['codigo_barras'], $boleto->getImageBasePath()); ?></td>
		  </tr>
		</tbody>
	</table>
  </body>
</html>
