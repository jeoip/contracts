<?php

namespace Jeoip\Contracts;

interface ICidr
{
    public function getNetwork(): string;

    public function getPrefix(): int;

    public function __toString(): string;
}
