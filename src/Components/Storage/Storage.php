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

namespace Chevereto\Components\Storage;

use Chevereto\Interfaces\Storage\StorageInterface;
use League\Flysystem\FilesystemAdapter;

final class Storage implements StorageInterface
{
    private FilesystemAdapter $adapter;

    public function __construct(FilesystemAdapter $adapter) {
        $this->adapter = $adapter;
    }

    final public function adapter(): FilesystemAdapter
    {
        return $this->adapter;
    }
}
