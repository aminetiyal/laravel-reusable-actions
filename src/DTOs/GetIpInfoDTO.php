<?php

namespace Aminetiyal\LaravelReusableActions\DTOs;

use Spatie\DataTransferObject\Attributes\MapFrom;
use Spatie\DataTransferObject\DataTransferObject;

class GetIpInfoDTO extends DataTransferObject
{
    public string $ip;
    public ?string $asn;
    public ?string $netmask;
    public ?string $hostname;
    public ?string $city;
    #[MapFrom('post_code')]
    public ?string $postCode;
    public string $country;
    #[MapFrom('country_code')]
    public string $countryCode;
    public ?string $latitude;
    public ?string $longitude;
}
