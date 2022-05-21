<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

namespace ActiveCollab\Foundation\Mail\Incoming\Processor\MailboxesSet\Resolver;

interface DefaultSenderResolverInterface
{
    public function getDefaultSender(): string;
}
