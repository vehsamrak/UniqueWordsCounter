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
            $filePath = $parameters[0] ?? null;

            if (file_exists($filePath)) {
                $output = 'File has been processed.';
            } else {
                $output = sprintf('File "%s" not found.', $filePath);
            }
        } else {
            $output = 'Please specify file path to process.';
        }

        return new CommandResult($output);
    }
}
