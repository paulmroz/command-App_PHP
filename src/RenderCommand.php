<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 27.12.17
 * Time: 16:18
 */

namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RenderCommand extends Command
{
    public function configure()
    {
        $this->setName('render')
            ->setDescription('Render some tabular data.');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $table = new Table($output);

        $table->setHeaders(['Name', 'Age'])
              ->setRows([
                 ['John Dose', 30],
                 ['Jane Dose', 29],
                 ['Jack Sparrow', 35]
              ])
              -> render();
    }
}
