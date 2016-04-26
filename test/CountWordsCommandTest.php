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
        $parameters = $this->createInputParametersWithFilepathAsFirstParameter();

        $commandResult = $command->execute($parameters);

        $this->assertEquals('File has been processed.', $commandResult->getOutput());
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
    private function createInputParametersWithFilepathAsFirstParameter()
    {
        return ['filepath.txt'];
    }
}
