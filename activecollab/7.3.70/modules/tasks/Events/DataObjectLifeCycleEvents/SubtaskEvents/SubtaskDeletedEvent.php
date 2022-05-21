<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

namespace ActiveCollab\Module\Tasks\Events\DataObjectLifeCycleEvents\SubtaskEvents;

use ActiveCollab\Foundation\Events\WebhookEvent\DataObjectLifeCycleWebhookEventTrait;

class SubtaskDeletedEvent extends SubtaskLifeCycleEvent implements SubtaskDeletedEventInterface
{
    use DataObjectLifeCycleWebhookEventTrait;

    public function getWebhookEventType(): string
    {
        return 'SubtaskDeleted';
    }
}
