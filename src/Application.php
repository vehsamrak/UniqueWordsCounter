<?php

namespace Vehsa\UniqueWordsCounter;

/**
 * @author Vehsamrak
 */
class Application
{

    /**
     * @param CommandInterface $command
     */
    public function run(CommandInterface $command)
    {
        $commandResult = $command->execute();
        $commandResult->printOutput();
    }
}
