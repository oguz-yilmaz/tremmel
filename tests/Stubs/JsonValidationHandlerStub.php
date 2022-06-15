<?php

declare(strict_types=1);

namespace Oguz\Tremmel\Tests\Stubs;

use Oguz\Tremmel\Handlers\JsonValidationHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class JsonValidationHandlerStub extends JsonValidationHandler
{
    protected function handle(Request $request, Throwable $exception): JsonResponse
    {
        return new JsonResponse([
            'success' => 'json-validation-stub-handle-method-result'
        ]);
    }
}