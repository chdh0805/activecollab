<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

namespace ActiveCollab\Module\Tracking\Events\DataObjectLifeCycleEvents\TimeRecordEvents;

use ActiveCollab\Foundation\Events\DataObjectLifeCycleEvent\DataObjectLifeCycleEventInterface;
use DataObject;
use TimeRecord;

interface TimeRecordLifeCycleEventInterface extends DataObjectLifeCycleEventInterface
{
    /**
     * @return TimeRecord
     */
    public function getObject(): DataObject;
}
