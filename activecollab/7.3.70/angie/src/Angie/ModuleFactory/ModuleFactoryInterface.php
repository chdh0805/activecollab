<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

namespace Angie\ModuleFactory;

use AngieModule;

interface ModuleFactoryInterface
{
    public function createModule(string $module_name): AngieModule;
}
