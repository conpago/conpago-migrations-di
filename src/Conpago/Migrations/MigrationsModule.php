<?php
	/**
	 * Created by PhpStorm.
	 * User: bg
	 * Date: 19.05.15
	 * Time: 23:25
	 */

	namespace Saigon\Conpago\Migrations;


	use Saigon\Conpago\DI\IContainerBuilder;
	use Saigon\Conpago\DI\IModule;

	class MigrationsModule implements IModule {

		public function build( IContainerBuilder $builder ) {

			$builder
				->registerType('Saigon\Conpago\Migrations\MigrateCommand')
				->asA('Saigon\Conpago\Console\Contract\IMigrateCommand');

			$builder
				->registerType('Saigon\Conpago\Migrations\Presentation\MigrateCommandPresenter')
				->asA('Saigon\Conpago\Console\Contract\Presentation\IMigrateCommandPresenter');
		}
	}