<?php

namespace El;

class ValueReference
{
    private $base;
    private $property;

    public function __construct($base, $property)
    {
        $this->base = $base;
        $this->property = $property;
    }

    public function __serialize(): array
    {
        return [
            'base' => serialize($this->base),
            'property' => serialize($this->property)
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->base = unserialize($data['base']);
        $this->property = unserialize($data['property']);
    }

    public function getBase()
    {
        return $this->base;
    }

    public function getProperty()
    {
        return $this->property;
    }
}
