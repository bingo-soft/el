<?php

namespace El;

abstract class FunctionMapper
{
    /**
     * Resolves the specified prefix and local name into a function or a method
     *
     * @param prefix
     *            the prefix of the function, or "" if no prefix. For example, "fn" in
     *            ${fn:method()}, or "" in ${method()}.
     * @param localName
     *            the short name of the function. For example, "method" in ${fn:method()}.
     * @return \ReflectionMethod the static method to invoke, or null if no match was found.
     */
    abstract public function resolveFunction(string $prefix, string $localName);
}
