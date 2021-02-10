<?php

namespace App\Domains\Lancamentos\Actions;

use App\Domains\Lancamentos\Models\LancamentosModel;

class GetLancamentosAction
{

    public function execute()
    {
        return [
            'status' => 'ok',
            'data' => LancamentosModel::get()
        ];
    }

}
