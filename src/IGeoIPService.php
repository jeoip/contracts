<?php

namespace Jeoip\Contracts;

interface IGeoIPService
{
    public function query(?string $ip = null): ILocation;
}
