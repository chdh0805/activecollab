<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

class MigrateAddTaskDependenciesConfigOption extends AngieModelMigration
{
    public function up()
    {
        $this->addConfigOption('task_dependencies_enabled', true);
        $this->addConfigOption('task_dependencies_enabled_lock', true);
    }
}
