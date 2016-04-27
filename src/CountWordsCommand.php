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
                $uniqueWords = $this->countUniqueWords($filePath);
                $output = sprintf('File has %d unique words.', $uniqueWords);
            } else {
                $output = sprintf('File "%s" not found.', $filePath);
            }
        } else {
            $output = 'Please specify file path to process.';
        }

        return new CommandResult($output);
    }

    /**
     * @param string $filePath Text file path to count unique words
     */
    private function countUniqueWords(string $filePath)
    {
        $text = file_get_contents($filePath);

        $words = array_map('mb_strToLower', str_word_count($text, 1));
        $uniqueWords = array_unique($words);

        return count($uniqueWords);
    }
}
