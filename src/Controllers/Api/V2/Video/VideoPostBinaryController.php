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

use Chevere\Interfaces\Parameter\StringParameterInterface;
use Chevereto\Controllers\Api\V2\File\Traits\FileStoreBinarySourceTrait;
use Chevereto\Controllers\Api\V2\Video\VideoPostController;

final class VideoPostBinaryController extends VideoPostController
{
    use FileStoreBinarySourceTrait;

    public function getDescription(): string
    {
        return 'Uploads a binary image resource.';
    }

    public function getSourceParameter(): StringParameterInterface
    {
        return $this->getBinaryStringParameter()
            ->withDescription('A binary image.');
    }
}
