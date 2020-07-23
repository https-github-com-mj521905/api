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

namespace Chevereto\Controllers\Web\Index;

use Chevere\Components\Controller\Controller;
use Chevere\Components\Controller\ControllerResponse;
use Chevere\Interfaces\Controller\ControllerArgumentsInterface;
use Chevere\Interfaces\Controller\ControllerResponseInterface;

class IndexGetController extends Controller
{
    public function getDescription(): string
    {
        return 'Presents the user interface.';
    }

    public function run(ControllerArgumentsInterface $controllerArguments): ControllerResponseInterface
    {
        return new ControllerResponse(true, []);
    }
}