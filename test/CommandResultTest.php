<?php

namespace Vehsa\UniqueWordsCounter;

/**
 * @author Vehsamrak
 */
class CommandResultTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function printOutput_stringPassedToConstructor_outputPrintedToStdout()
    {
        $output = 'test output';
        $commandResult = new CommandResult($output);

        $this->expectOutputRegex('/^test output$/');
        $commandResult->printOutput();
    }
}
