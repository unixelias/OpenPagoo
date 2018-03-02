<?php

namespace unixelias\OpenPagoo\Boletos;

class Bancoob extends AbstractBoleto
{
	/**
	 * Retorna campos obrigatórios
	 *
	 * @return array
	 */
	public function getRequiredFields()
	{
		$fields = [
				'contrato',
				'convenio',
				'modalidade_cobranca',
				'valor_desconto_1',
				'valor_desconto_2',
				'valor_multa',
				'numero_parcela',
				'total_parcelas',
				'nome_avalista',
		];

		return array_merge(self::$requiredFields, $fields);
	}
}
?>