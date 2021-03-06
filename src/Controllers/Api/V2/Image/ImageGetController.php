<?php

/*
 * This file is part of Chevereto.
 *
 * (c) Rodolfo Berrios <rodolfo@chevereto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Chevereto\Controllers\Api\V2\Image;

use Chevere\Components\Action\Controller;
use Chevere\Components\Parameter\Parameters;
use Chevere\Components\Parameter\StringParameter;
use Chevere\Components\Regex\Regex;
use Chevere\Interfaces\Parameter\ArgumentsInterface;
use Chevere\Interfaces\Parameter\ParametersInterface;
use Chevere\Interfaces\Response\ResponseInterface;

final class ImageGetController extends Controller
{
    public function getStringParameter(): StringParameter
    {
        return new StringParameter();
    }

    public function getDescription(): string
    {
        return 'Get the image identified by its id.';
    }

    public function getParameters(): ParametersInterface
    {
        return (new Parameters())
            ->withAddedRequired(
                id: (new StringParameter())->withRegex(new Regex('/\d+/')),
            );
    }

    public function run(ArgumentsInterface $arguments): ResponseInterface
    {
        return $this->getResponse();
    }
}
