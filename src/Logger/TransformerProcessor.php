<?php

declare(strict_types=1);

/*
 * This file is part of the CleverAge/ProcessBundle package.
 *
 * Copyright (c) 2017-2023 Clever-Age
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CleverAge\ProcessBundle\Logger;

use Monolog\LogRecord;

/**
 * Class TransformerProcessor
 *
 * @package CleverAge\ProcessBundle\Logger
 * @author  Madeline Veyrenc <mveyrenc@clever-age.com>
 */
class TransformerProcessor extends AbstractProcessor
{
    public function __invoke(LogRecord $record): LogRecord
    {
        $record = parent::__invoke($record);

        $recordExtra = $record->extra;
        $this->addTaskInfoToRecord($recordExtra);
        $record->extra = $recordExtra;

        return $record;
    }
}