<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

namespace ActiveCollab\Module\System\Events\DataObjectLifeCycleEvents\NotificationRecipientEvents;

use ActiveCollab\Foundation\Events\WebhookEvent\DataObjectLifeCycleWebhookEventTrait;
use ActiveCollab\Module\System\EventListeners\BadgeCountEvents\BadgeCountChangedEventInterface;

class NotificationRecipientDeletedEvent extends NotificationRecipientLifeCycleEvent implements NotificationRecipientCreatedEventInterface, BadgeCountChangedEventInterface
{
    use DataObjectLifeCycleWebhookEventTrait;

    public function getWebhookEventType(): string
    {
        return 'NotificationRecipientDeleted';
    }
}
