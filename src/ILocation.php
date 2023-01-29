<?php

namespace Jeoip\Contracts;

interface ILocation extends \JsonSerializable
{
    public function getQuery(): string;

    public function getCountryCode(): string;

    public function getSubnet(): ICidr;
}
