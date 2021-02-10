<?php

namespace App\Http\Controllers;

use App\Domains\Lancamentos\Actions\GetLancamentosAction;

class LancamentoController extends Controller
{
    public function __invoke(GetLancamentosAction $getLancamentosAction)
    {
        return $getLancamentosAction->execute();
    }
}
