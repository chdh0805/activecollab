<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

/**
 * on_reset_manager_states event handler implementation.
 *
 * @package angie.frameworks.labels
 * @subpackage handlers
 */

/**
 * Handle on_reset_manager_states event.
 */
function labels_handle_on_reset_manager_states()
{
    Labels::resetState();
}
