<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

class MigrateAddTimesheetPeoplePickerConfigOption extends AngieModelMigration
{
    public function up()
    {
        $this->setConfigOptionValue('timesheet_people_picker', null);
    }
}
