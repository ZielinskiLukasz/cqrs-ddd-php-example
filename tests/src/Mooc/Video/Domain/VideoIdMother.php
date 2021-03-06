<?php

declare(strict_types = 1);

namespace CodelyTv\Test\Mooc\Video\Domain;

use CodelyTv\Mooc\Video\Domain\VideoId;
use CodelyTv\Test\Shared\Domain\UuidMother;

final class VideoIdMother
{
    public static function create(string $id)
    {
        return new VideoId($id);
    }

    public static function random()
    {
        return self::create(UuidMother::random());
    }
}
