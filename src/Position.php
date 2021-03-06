<?php

namespace Battleship;

class Position
{
    const VERTICAL = 0;
    const HORIZONTAL = 1;

    /**
     * @var int
     */
    private $position;

    /**
     * @param int $position
     */
    private function __construct($position)
    {
        $this->position = $position;
    }

    public static function fromVertical()
    {
        return new self(self::VERTICAL);
    }

    public static function fromHorizontal()
    {
        return new self(self::HORIZONTAL);
    }

    public function equals(self $position)
    {
        return $this->position === $position->position;
    }
}
