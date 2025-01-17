<?php

declare(strict_types=1);

/*
 * This file is part of the CleverAge/ProcessBundle package.
 *
 * Copyright (c) 2017-2024 Clever-Age
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CleverAge\ProcessBundle\Model;

/**
 * Allow the task to be initialized before any execution is done.
 */
interface FinalizableTaskInterface extends TaskInterface
{
    public function finalize(ProcessState $state): void;
}
