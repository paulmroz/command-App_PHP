<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 27.12.17
 * Time: 16:18
 */

namespace Acme;


use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ShowCommand extends Command
{

    public function configure()
    {
        $this->setName('show')
            ->setDescription('Show all tasks.');

    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->showTasks($output);
    }

}