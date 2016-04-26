<?php

namespace Vehsa\UniqueWordsCounter;

/**
 * @author Vehsamrak
 */
class ApplicationTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function run_commandWithResult_commandExecutedAndOutputPrinted()
    {
        $application = $this->createApplication();
        $commandResult = $this->createCommandResult();
        $command = $this->createCommandWithResult($commandResult);

        $application->run($command);

        \Phake::verify($command)->execute(\Phake::anyParameters());
        \Phake::verify($commandResult)->printOutput();
    }

    /**
     * @return CommandInterface|\Phake_IMock
     */
    private function createCommand()
    {
        return \Phake::mock(CommandInterface::class);
    }

    /**
     * @return CommandResult|\Phake_IMock
     */
    private function createCommandResult()
    {
        return \Phake::mock(CommandResult::class);
    }

    /**
     * @param CommandResult $commandResult
     * @return CommandInterface|\Phake_IMock
     */
    private function createCommandWithResult(CommandResult $commandResult)
    {
        $command = $this->createCommand();

        \Phake::when($command)->execute(\Phake::anyParameters())->thenReturn($commandResult);

        return $command;
    }

    /**
     * @return Application
     */
    private function createApplication()
    {
        $parameters = [];

        return new Application($parameters);
    }
}
