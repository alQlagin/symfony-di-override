<?php

namespace App\Command;

use App\Services\InternalDataSourceConnector;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:connect:internal',
    description: 'Add a short description for your command',
)]
class ConnectInternalCommand extends Command
{

    private InternalDataSourceConnector $dataSourceConnector;
    public function __construct(InternalDataSourceConnector $dataSourceConnector)
    {
        parent::__construct();
        $this->dataSourceConnector = $dataSourceConnector;

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->success($this->dataSourceConnector->getBaseUrl());

        return Command::SUCCESS;
    }
}
