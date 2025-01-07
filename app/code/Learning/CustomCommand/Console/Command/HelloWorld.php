<?php
namespace Learning\CustomCommand\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{


    protected function configure(): void
    {
        $this->setName('helloworld');
        $this->setDescription('This is my first console command.');
        parent::configure();
    }

    /**
     * Execute the command
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int
     */
     protected function execute(InputInterface $input, OutputInterface $output): int
     {
         $exitCode = 0;
        $output->writeln('<info>Success message.</info>');
        $output->writeln('<comment>hello world</comment>');
       
        
        return $exitCode;
    }
}
