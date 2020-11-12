<?php

namespace App\Command;

use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Style\SymfonyStyle;

class RandomSpellCommand extends Command
{
    protected static $defaultName = 'app:random-spell';
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * RandomSpellCommand constructor.
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('cast a random spell')
            ->addArgument('your-name', InputArgument::OPTIONAL, 'Please insert your name,')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'You can yell if you want to.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $yourName = $input->getArgument('your-name');
        $question = new Question('are you gay ?');
        $io->askQuestion($question);
        if ($yourName) {
            if (!$io->confirm('Is your mom gay?')) {
                $io->note(sprintf('Hi !: %s', $yourName));
                $io->text('you is no gay');
            } else {
                $io->text('you is gay');
            }
        }

        $spells = [
            'alohomora',
            'confundo',
            'engorgio',
            'expecto patronum',
            'expelliarmus',
            'impedimenta',
            'reparo',
        ];

        $spell = $spells[array_rand($spells)];

        if ($input->getOption('yell')) {
            $spell = strtoupper($spell);
        }
        $this->logger->info($yourName);

        $io->success($spell);

        return Command::SUCCESS;
    }
}
