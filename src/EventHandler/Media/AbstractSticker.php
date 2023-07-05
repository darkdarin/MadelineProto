<?php declare(strict_types=1);

namespace danog\MadelineProto\EventHandler\Media;

use danog\MadelineProto\EventHandler\Media;
use danog\MadelineProto\MTProto;

/**
 * Represents a generic sticker.
 */
abstract class AbstractSticker extends Media
{
    /** Emoji representation of sticker */
    public readonly string $emoji;

    /** Associated stickerset */
    public readonly array $stickerset;

    /** @internal */
    public function __construct(
        MTProto $API,
        array $rawMedia,
        array $stickerAttribute
    ) {
        parent::__construct($API, $rawMedia);
        $this->emoji = $stickerAttribute['alt'];
        $this->stickerset = $stickerAttribute['stickerset'];
    }
}
