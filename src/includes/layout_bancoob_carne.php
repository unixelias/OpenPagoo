<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $dadosboleto['identificacao']; ?></title>
    <meta name="Generator" content="Open Pagoo - https://github.com/unixelias/open-pagoo - Licença AGPL-3" />
	<meta name="author" content="Elias Alves"/>
    <style> <?php include 'css/a4-style.css'; ?>  </> </style>
    <style> <?php include 'css/carne-style.css'; ?>  </> </style>
</head>

<body>
	<main id="content" class="group pagina" role="main">
		<table border="0" cellpadding="0" cellspacing="0" class="carne">
			<col class="col0">
			<col class="col1">
			<col class="col2">
			<col class="col3">
			<col class="col4">
			<col class="col5">
			<col class="col6">
			<col class="col7">
			<col class="col8">
			<col class="col9">
			<col class="col10">
			<col class="col11">
			<tbody>
				<tr>
					<td class="logo-banco-maior" colspan="2">
                        <img src="<?php echo $boleto->getImageBasePath() ?>logobancoob.jpg" />
                    </td>
                    <td class="pontilhado-vertical-a" rowspan="24"></td>
					<td></td>
					<td class="logo-banco-menor" colspan="2">
                        <img src="<?php echo $boleto->getImageBasePath() ?>logobancoob.jpg" />
					</td>
					<td class="column6 numero-banco"><?php echo $dadosboleto['codigo_banco_com_dv'] ?></td>
					<td class="column7 linha-digitavel" colspan="5"><?php echo $dadosboleto['linha_digitavel'] ?></td>
				</tr>
				<tr>
					<td class="topline sem-borda-esq">Parcela/Plano</td>
					<td class="topline sem-borda-dir">Vencimento</td>
					<td class="pontilhado-vertical-b" rowspan="19"></td>
					<td class="topline sem-borda-esq" colspan="7">Local de pagamento</td>
					<td class="topline destaque sem-borda-dir">Vencimento</td>
				</tr>
				<tr>
					<td class="bottomline dir sem-borda-esq"><?php echo $dadosboleto['numero_parcela'].'/'.$dadosboleto['total_parcelas'] ?></td>
					<td class="bottomline dir sem-borda-dir"><?php echo $dadosboleto['data_vencimento'] ?></td>
					<td class="bottomline sem-borda-esq" colspan="7">Pagável em qualquer Banco até o vencimento</td>
					<td class="bottomline dir destaque  sem-borda-dir"><?php echo $dadosboleto['data_vencimento'] ?></td>
				</tr>
				<tr>
					<td class="topline sem-borda-ambos" colspan="2">Nº do Documento</td>
					<td class="topline sem-borda-esq" colspan="7">Cedente</td>
					<td class="topline sem-borda-dir">Agência / Código do Cedente</td>
				</tr>
				<tr>
					<td class="bottomline dir sem-borda-ambos" colspan="2"><?php echo $dadosboleto['numero_documento'] ?></td>
					<td class="bottomline sem-borda-esq" colspan="7"><?php echo $dadosboleto['sacado'] ?></td>
					<td class="bottomline dir  sem-borda-dir"><?php echo $dadosboleto['agencia_codigo'] ?></td>
				</tr>
				<tr>
					<td class="topline sem-borda-esq">Espécie</td>
					<td class="topline sem-borda-dir">Quantidade</td>
					<td class="topline sem-borda-esq">Data do Documento</td>
					<td class="topline" colspan="2">Nª Documento</td>
					<td class="topline">Espécie doc.</td>
					<td class="topline">Aceite</td>
					<td class="topline" colspan="2">Data processamento</td>
					<td class="topline sem-borda-dir">Nosso Número</td>
				</tr>
				<tr>
					<td class="bottomline dir sem-borda-esq"><?php echo $dadosboleto['especie'] ?></td>
					<td class="bottomline dir sem-borda-dir"><?php echo $dadosboleto['quantidade'] ?></td>
					<td class="bottomline dir sem-borda-esq"><?php echo $dadosboleto['data_documento'] ?></td>
					<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['numero_documento'] ?></td>
					<td class="bottomline dir"><?php echo $dadosboleto['especie_doc'] ?></td>
					<td class="bottomline dir"><?php echo $dadosboleto['aceite'] ?></td>
					<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['data_processamento'] ?></td>
					<td class="bottomline dir sem-borda-dir"><?php echo $dadosboleto['nosso_numero'] ?></td>
				</tr>
				<tr>
					<td class="topline sem-borda-ambos" colspan="2">Agência/Código do Cedente</td>
					<td class="topline destaque sem-borda-esq" colspan="2">Uso do Banco</td>
					<td class="topline">Carteira</td>
					<td class="topline">Espécie</td>
					<td class="topline" colspan="2">Quantidade</td>
					<td class="topline">(x) Valor</td>
					<td class="topline sem-borda-dir">(=) Valor documento</td>
				</tr>
				<tr>
					<td class="bottomline dir sem-borda-ambos" colspan="2"><?php echo $dadosboleto['agencia_codigo'] ?></td>
					<td class="bottomline destaque  sem-borda-esq" colspan="2"></td>
					<td class="bottomline dir"><?php echo $dadosboleto['carteira'] ?></td>
					<td class="bottomline dir"><?php echo $dadosboleto['especie'] ?></td>
					<td class="bottomline dir" colspan="2"><?php echo $dadosboleto['quantidade'] ?><</td>
					<td class="bottomline dir"><?php echo $dadosboleto['valor_unitario'] ?></td>
					<td class="bottomline dir  sem-borda-dir"><?php echo $dadosboleto['valor_boleto'] ?></td>
				</tr>
				<tr>
					<td class="topline  sem-borda-ambos" colspan="2">Nosso Número</td>
					<td class="topline  sem-borda-esq" colspan="7">Instruções (Texto de responsabilidade do cedente)</td>
					<td class="topline  sem-borda-dir">(-) Desconto / Abatimentos</td>
				</tr>
				<tr>
					<td class="bottomline dir sem-borda-ambos" colspan="2"><?php echo $dadosboleto['nosso_numero'] ?></td>
					<td class="instrucao  sem-borda-esq" colspan="7"><?php echo $dadosboleto['instrucoes1']; ?></td>
					<td class="bottomline dir  sem-borda-dir"><?php echo $dadosboleto['valor_desconto_1']; ?></td>
				</tr>
				<tr>
					<td class="topline  sem-borda-ambos" colspan="2">(=) Valor documento</td>
					<td class="instrucao sem-borda-esq" colspan="7"><?php echo $dadosboleto['instrucoes2']; ?></td>
					<td class="topline  sem-borda-dir">(+) Mora / Multa</td>
				</tr>
				<tr>
					<td class="bottomline dir  sem-borda-ambos" colspan="2"><?php echo $dadosboleto['valor_boleto'] ?></td>
					<td class="instrucao sem-borda-esq" colspan="7"><?php echo $dadosboleto['instrucoes3']; ?></td>
					<td class="bottomline dir sem-borda-dir"><?php echo $dadosboleto['valor_multa'] ?></td>
				</tr>
				<tr>
					<td class="topline sem-borda-ambos" colspan="2">(-) Desconto / Abatimentos</td>
					<td class="instrucao  sem-borda-esq" colspan="7"><?php echo $dadosboleto['instrucoes4']; ?></td>
					<td class="topline sem-borda-dir">(+) Outros acréscimos</td>
				</tr>
				<tr>
					<td class="bottomline dir sem-borda-ambos" colspan="2"><?php echo $dadosboleto['valor_desconto_1']; ?></td>
					<td class="instrucao sem-borda-esq" colspan="7"></td>
					<td class="bottomline dir sem-borda-dir">3.14</td>
				</tr>
				<tr>
					<td class="topline sem-borda-ambos" colspan="2">(+) Mora/Multa</td>
					<td class="topline sem-borda-esq" colspan="7">Sacado / Pagador</td>
					<td class="topline sem-borda-dir">(=) Valor cobrado</td>
				</tr>
				<tr>
					<td class="bottomline dir  sem-borda-ambos" colspan="2"><?php echo $dadosboleto['valor_multa'] ?></td>
					<td class="instrucao sem-borda-esq" colspan="7"><?php echo $dadosboleto['sacado'] ?></td>
					<td class="bottomline dir sem-borda-dir">30,04</td>
				</tr>
				<tr>
					<td class="topline sem-borda-ambos" colspan="2">(+) Outros acréscimos</td>
					<td class="instrucao sem-borda-esq" colspan="7"><?php echo $dadosboleto['endereco1'] ?></td>
					<td></td>
				</tr>
				<tr>
					<td class="bottomline dir sem-borda-ambos" colspan="2">3,14</td>
					<td class="instrucao  sem-borda-esq" colspan="7"><?php echo $dadosboleto['endereco2'] ?></td>
					<td></td>
				</tr>
				<tr>
					<td class="topline  sem-borda-ambos" colspan="2">(=) Valor cobrado</td>
                    <td class="avalista sem-borda-esq">Sacado / Avalista:</td>
                    <td class="avalista sem-borda-esq" colspan="6"><?php echo isset($dadosboleto['avalista']) ? ' '.$dadosboleto['avalista'] : '' ?></td>
					<td class="cod-baixa">Cód. baixa</td>
				</tr>
				<tr>
					<td class="bottomline dir sem-borda-ambos" colspan="2">30,04</td>
					<td ></td>
					<td class="autentica-carne" colspan="7">Autenticação mecânica </td>
					<td class="compensacao-carne">Ficha de Compensação</td>
				</tr>
				<tr>
					<td class="topline sem-borda-ambos" colspan="2">Sacado / Pagador</td>
					<td ></td>
					<td class="barras" colspan="7" rowspan="4"><?php echo self::fbarcode($dadosboleto['codigo_barras'], $boleto->getImageBasePath()); ?></td>
				</tr>
				<tr>
					<td class="instrucao dir sem-borda-ambos" colspan="2" ><?php echo $dadosboleto['sacado'] ?></td>
					<td colspan="2"></td>
				</tr>
				<tr>
                    <td class="bottomline dir sem-borda-ambos" colspan="2">123.456.789.00</td>
				</tr>
				<tr>
					<td class="pagador tracejada" colspan="2">Recibo do Sacado</td>
					<td class="tracejada" colspan="9"></td>
					<td class="tracejada" >Corte na linha pontilhada</td>
				</tr>
				<tr></tr>
			</tbody>
		</table>
	</main>
</body>

</html>