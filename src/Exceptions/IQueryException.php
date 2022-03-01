<?php

namespace Jeoip\Contracts\Exceptions;

interface IQueryException extends IException
{
    public function getQuery(): string;
}
