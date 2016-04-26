<?php

namespace Vehsa\UniqueWordsCounter;

/**
 * @author Vehsamrak
 */
interface CommandInterface
{

    public function execute(array $parameters = []): CommandResult;
}
