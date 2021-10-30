<?php

namespace Aminetiyal\LaravelReusableActions\Actions;

use Aminetiyal\LaravelReusableActions\DTOs\GetIpInfoDTO;
use Illuminate\Support\Facades\Http;
use Lorisleiva\Actions\Concerns\AsAction;

class GetIpInfoAction
{
    use AsAction;

    /**
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public function handle(string $ip): GetIpInfoDTO
    {
        $response = Http::get("https://ip.nf/{$ip}.json");

        return new GetIpInfoDTO($response->json()['ip']);
    }
}
