<?php

declare(strict_types=1);

namespace App\Exceptions;

use Exception;
use QeeZer\ApiResponder\Contracts\BusinessException as BusinessExceptionContract;

class BusinessException extends Exception implements BusinessExceptionContract
{
}
