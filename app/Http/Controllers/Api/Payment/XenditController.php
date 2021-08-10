<?php

namespace App\Http\Controllers\Api\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xendit\Xendit;

class XenditController extends Controller
{
    private $token = 'xnd_development_oifpMGLncsDaqGzV6jTRc1KYGVw13DBWpSClOWVttJ6l2YtOEd0LUuOb8H9g1c';

    public function getListVa(){

        Xendit::setApiKey('secretKey');

        $getVABanks = \Xendit\VirtualAccounts::getVABanks();

        return response()->json([
            'data' => $getVABanks
        ])->setStatusCode(200);
    }
}
