<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class VerifyWebhookSignature
{
    public function handle(Request $request, Closure $next)
    {
        $signature = $request->header('X-Signature');
        $secret = config('services.webhook.secret'); // Store your secret in the config/services.php file

        if (is_null($signature) || !$this->isValidSignature($request->getContent(), $signature, $secret)) {
            Log::warning('Invalid signature', [
                'computed' => $this->computeSignature($request->getContent(), $secret),
                'received' => $signature,
            ]);
            return response('Invalid signature', Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }

    protected function isValidSignature($payload, $signature, $secret)
    {
        $computedSignature = $this->computeSignature($payload, $secret);

        return hash_equals($computedSignature, $signature);
    }

    protected function computeSignature($payload, $secret)
    {
        return hash_hmac('sha256', $payload, $secret);
    }
}