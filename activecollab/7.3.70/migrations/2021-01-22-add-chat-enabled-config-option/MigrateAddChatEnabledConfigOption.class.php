<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

class MigrateAddChatEnabledConfigOption extends AngieModelMigration
{
    public function up()
    {
        $this->addConfigOption('chat_enabled', true);
        $this->addConfigOption('chat_enabled_lock', true);
    }
}
