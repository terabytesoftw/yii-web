<?php

declare(strict_types=1);

namespace Yiisoft\Yii\Web\Data;

use Psr\Http\Message\ResponseFactoryInterface;
use Yiisoft\Http\Status;

final class DataResponseFactory implements DataResponseFactoryInterface
{
    protected ResponseFactoryInterface $responseFactory;

    public function __construct(ResponseFactoryInterface $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function createResponse($data = null, int $code = Status::OK, string $reasonPhrase = ''): DataResponse
    {
        return new DataResponse($data, $code, $reasonPhrase, $this->responseFactory);
    }
}
