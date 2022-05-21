<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

namespace ActiveCollab\Module\Notes\Events\DataObjectLifeCycleEvents;

use ActiveCollab\Foundation\Events\WebhookEvent\DataObjectLifeCycleWebhookEventTrait;

class NoteUpdatedEvent extends NoteLifeCycleEvent implements NoteUpdatedEventInterface
{
    use DataObjectLifeCycleWebhookEventTrait;

    public function getWebhookEventType(): string
    {
        return 'NoteUpdated';
    }
}
