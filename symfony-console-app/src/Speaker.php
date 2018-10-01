<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Speaker extends Command
{
	protected function configure()
	{
		$this->setName('speak')
			->setDescription('Tell tomy to speak something');
		$this->addArgument('toSay', InputArgument::REQUIRED, 'You need to tell tomy what to say');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$arg = $input->getArgument('toSay');
		exec('say ' . $arg);
		$output->writeln('Done');
	}
}



