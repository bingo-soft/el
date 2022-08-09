<?php

namespace El;

class MethodInfo
{
    private $name;
    private $returnType;

    /**
     * Creates a new instance of MethodInfo with the given information.
     *
     * @param name
     *            The name of the method
     * @param returnType
     *            The return type of the method
     */
    public function __construct(string $name, ?string $returnType = null)
    {
        $this->name = $name;
        $this->returnType = $returnType;
    }

    /**
     * Returns the name of the method
     *
     * @return string the name of the method
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns the return type of the method
     *
     * @return string the return type of the method
     */
    public function getReturnType(): string
    {
        return $this->returnType;
    }
}
