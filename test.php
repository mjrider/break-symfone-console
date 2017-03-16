#!/usr/bin/env php
<?php
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

(new Application('test', '1.0.0'))
  ->register('test')
      ->setCode(function(InputInterface $input, OutputInterface $output) {
	      $str = "<comment>Please configure New Relic:</comment> <info>set('newrelic', array('api_key' => 'xad3...', 'application_id' => '12873'));</info>";
	      throw new \Exception($str);
      })
  ->getApplication()
  ->setDefaultCommand('test', true) // Single command application
  ->run();
