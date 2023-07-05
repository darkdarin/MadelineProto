<?php declare(strict_types=1);

namespace danog\MadelineProto\EventHandler\Filter\Media;

use danog\MadelineProto\EventHandler\Filter\Filter;
use danog\MadelineProto\EventHandler\Media\AbstractSticker;
use danog\MadelineProto\EventHandler\Message;
use danog\MadelineProto\EventHandler\Update;

/**
 * Filter that only matches stickers.
 */
final class FilterSticker extends Filter
{
    public function apply(Update $update): bool
    {
        return $update instanceof Message && $update->media instanceof AbstractSticker;
    }
}
