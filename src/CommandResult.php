<?php

namespace Vehsa\UniqueWordsCounter;

/**
 * @author Vehsamrak
 */
class CommandResult
{

    /** @var string */
    private $output;

    /**
     * @param string $output
     */
    public function __construct(string $output)
    {
        $this->output = $output;
    }

    /**
     * Echoes command output
     */
    public function printOutput()
    {
        echo $this->output . PHP_EOL;
    }
}
