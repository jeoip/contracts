<?php

namespace Jeoip\Contracts;

interface IGeoIPService
{
    public function query(string $ip): ILocation;
}
