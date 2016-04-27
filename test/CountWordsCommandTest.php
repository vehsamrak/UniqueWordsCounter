<?php

namespace Vehsa\UniqueWordsCounter;

/**
 * @author Vehsamrak
 */
class CountWordsCommandTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function run_noParameters_outputWithSpecifyFilepathMessage()
    {
        $command = new CountWordsCommand();
        $parameters = $this->createEmptyInputParameters();

        $commandResult = $command->execute($parameters);

        $this->assertEquals('Please specify file path to process.', $commandResult->getOutput());
    }

    /** @test */
    public function run_filePathParameter_outputWithSuccessMessage()
    {
        $command = new CountWordsCommand();
        $parameters = $this->createInputParametersWithPathToFileThatExists();

        $commandResult = $command->execute($parameters);

        $this->assertEquals('File has been processed.', $commandResult->getOutput());
    }

    /** @test */
    public function run_parameterWithPathToFileThatDoesNotExist_outputWithFileNotFoundMessage()
    {
        $command = new CountWordsCommand();
        $parameters = $this->createInputParametersWithPathToFileThatDoesNotExist();

        $commandResult = $command->execute($parameters);

        $this->assertEquals('File "not-existent-file.txt" not found.', $commandResult->getOutput());
    }

    /**
     * @return array
     */
    private function createEmptyInputParameters()
    {
        return [];
    }

    /**
     * @return array
     */
    private function createInputParametersWithPathToFileThatExists()
    {
        return ['files/file-for-testing.txt'];
    }

    /**
     * @return array
     */
    private function createInputParametersWithPathToFileThatDoesNotExist()
    {
        return ['not-existent-file.txt'];
    }
}
