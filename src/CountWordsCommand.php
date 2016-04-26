<?php

namespace Vehsa\UniqueWordsCounter;

/**
 * @author Vehsamrak
 */
class CountWordsCommand implements CommandInterface
{

    /**
     * @param array $parameters
     * @return CommandResult
     */
    public function execute(array $parameters = []): CommandResult
    {
        if (count($parameters)) {
            $output = 'File has been processed.';
        } else {
            $output = 'Please specify file path to process.';
        }

        return new CommandResult($output);
    }
}
