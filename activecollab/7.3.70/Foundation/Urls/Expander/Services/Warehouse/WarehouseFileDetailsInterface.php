<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

namespace ActiveCollab\Foundation\Urls\Expander\Services\Warehouse;

interface WarehouseFileDetailsInterface
{
    public function getFileName(): string;
    public function getFileSize(): int;
}
