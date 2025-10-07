<?php

/*
 * This file is part of the Sylius Mollie Plugin package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\MolliePlugin\StateMachine;

final class MollieRecurringTransitions
{
    public const GRAPH_MANUAL = 'mollie_subscription_payment_graph_manual';

    public const TRANSITION_PAUSE = 'pause';

    public const TRANSITION_RESUME = 'resume';

    public const TRANSITION_CANCEL = 'cancel';

    private function __construct()
    {
    }
}
