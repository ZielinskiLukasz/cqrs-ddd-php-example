<?php

declare(strict_types = 1);

namespace CodelyTv\Mooc\Video\Infrastructure\Persistence;

use CodelyTv\Mooc\Video\Domain\VideoId;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\StringType;

final class VideoIdType extends StringType
{
    const NAME = 'video_id';

    public function getName(): string
    {
        return static::NAME;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return new VideoId($value);
    }

    /** @var VideoId $value */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return $value->value();
    }
}

