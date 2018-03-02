<?php

namespace unixelias\OpenPagoo\Boletos;

class Sicredi extends AbstractBoleto
{
    /**
     * Retorna campos obrigatórios
     *
     * @return array
     */
    public function getRequiredFields()
    {
        $fields = [
            'posto',
            'byte_idt',
            'carteira',
        ];

        return array_merge(self::$requiredFields, $fields);
    }
}