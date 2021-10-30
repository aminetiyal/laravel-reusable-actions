<?php

use Aminetiyal\LaravelReusableActions\Actions\GetIpInfoAction;
use Aminetiyal\LaravelReusableActions\DTOs\GetIpInfoDTO;

it('can fetch ip information', function () {

    $ipListByCountry = [
        '69.162.81.155' => ['name' => 'United States', 'code' => 'US'],
        '197.221.23.194' => ['name' => 'South Africa', 'code' => 'ZA'],
        '95.142.107.181' => ['name' => 'Netherlands', 'code' => 'NL'],
        '47.94.129.116' => ['name' => 'China', 'code' => 'CN'],
    ];

    foreach ($ipListByCountry as $ip => $countryData) {
        $ipInfo = GetIpInfoAction::run($ip);
        expect($ipInfo->country)->toEqual($countryData['name']);
        expect($ipInfo->countryCode)->toEqual($countryData['code']);
    }
});

it('can returns GetIpInfoDTO', function () {
    $ipInfo = GetIpInfoAction::run('127.0.0.1');
    expect($ipInfo)->toBeInstanceOf(GetIpInfoDTO::class);
});
