<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_crud' shared service.

$this->privates['maker.auto_command.make_crud'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCrud(($this->privates['maker.doctrine_helper'] ?? $this->load('getMaker_DoctrineHelperService.php'))), ($this->privates['maker.file_manager'] ?? $this->load('getMaker_FileManagerService.php')));

$instance->setName('make:crud');

return $instance;
