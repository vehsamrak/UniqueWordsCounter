<?php

namespace Vehsa\UniqueWordsCounter;

/**
 * @author Vehsamrak
 */
class Application
{

    /**
     * @var array
     */
    private $parameters;

    /**
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
        array_shift($this->parameters);
    }

    /**
     * @param CommandInterface $command
     */
    public function run(CommandInterface $command)
    {
        $commandResult = $command->execute($this->parameters);
        $commandResult->printOutput();
    }
}
