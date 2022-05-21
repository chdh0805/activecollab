<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

namespace ActiveCollab\Module\System\Events\DataObjectLifeCycleEvents\CommentEvents;

use ActiveCollab\Foundation\Events\WebhookEvent\DataObjectLifeCycleWebhookEventTrait;

class CommentCreatedEvent extends CommentLifeCycleEvent implements CommentCreatedEventInterface
{
    use DataObjectLifeCycleWebhookEventTrait;

    public function getWebhookEventType(): string
    {
        return 'CommentCreated';
    }
}
