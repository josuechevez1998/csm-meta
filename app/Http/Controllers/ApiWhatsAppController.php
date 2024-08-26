<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiWhatsAppController extends Controller
{

    protected string $WTP_META_URL = "";
    protected string $WTP_WEBHOOK = "";
    protected string $WTP_META_TOKEN = "";

    public function __construct()
    {
        $this->WTP_META_URL   = config('services.whatsapp.wtp_meta_url');
        $this->WTP_WEBHOOK    = config('services.whatsapp.wtp_webhook');
        $this->WTP_META_TOKEN = config('services.whatsapp.wtp_meta_token');
    }

    /**
     * Verificar y autenticacion de conversacion
     * 
     * @param Request $request enviados de Api WTP
     */
    public function verifyWebhook(Request $request) : mixed
    {
        try {

            $this->WTP_META_TOKEN = config('services.whatsapp.wtp_meta_token');
            
            if ($this->WTP_META_TOKEN == $request->has('hub_verify_token')) {
                return $request->get('hub_challenge');
            }

        } catch (\Exception $e) {
            return response()->json([
                'error' => $e
            ]);
        }
    }
}
