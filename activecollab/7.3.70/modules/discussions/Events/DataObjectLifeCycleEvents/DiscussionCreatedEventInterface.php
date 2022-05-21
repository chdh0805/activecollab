<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

namespace ActiveCollab\Module\Discussions\Events\DataObjectLifeCycleEvents;

use ActiveCollab\Foundation\Events\WebhookEvent\WebhookEventInterface;

interface DiscussionCreatedEventInterface extends DiscussionLifeCycleEventInterface, WebhookEventInterface
{
}
