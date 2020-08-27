<?php


namespace Monogram\CLI\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloMonogramCommand extends Command
{
    protected static $defaultName = 'hello:monogram';

    protected function configure()
    {
        $this->setDescription('Outputs "Hello Monogram"');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello Monogram');
        return 0;
    }
}