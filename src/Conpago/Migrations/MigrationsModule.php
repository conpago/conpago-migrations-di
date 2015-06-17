<?php
	/**
	 * Created by PhpStorm.
	 * User: bg
	 * Date: 19.05.15
	 * Time: 23:25
	 */

	namespace Conpago\Migrations;


	use Conpago\DI\IContainerBuilder;
	use Conpago\DI\IModule;

	class MigrationsModule implements IModule {

		public function build( IContainerBuilder $builder ) {

			$builder
				->registerType('Conpago\Migrations\MigrateCommand')
				->asA('Conpago\Console\Contract\IMigrateCommand');

			$builder
				->registerType('Conpago\Migrations\Presentation\MigrateCommandPresenter')
				->asA('Conpago\Console\Contract\Presentation\IMigrateCommandPresenter');
		}
	}
