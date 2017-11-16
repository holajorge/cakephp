<?php
use Cake\Auth\DefaultPasswordHasher;
use Migrations\AbstractMigration;

//lap
require_once 'C:/Users/HoloMundo/Desktop/myappcake/vendor/fzaninotto/faker/src/autoload.php';

//pc
// require_once 'C:\Users\holamundo\Desktop\cakephp\vendor\fzaninotto\faker\src\autoload.php';

class CreateDataSeedMigration extends AbstractMigration {

	/**
	 * Change Method.
	 *
	 * More information on this method is available here:
	 * http://docs.phinx.org/en/latest/migrations.html#the-change-method
	 * @return void
	 */
	public function change() {

		$faker = Faker\Factory::create();
		$populator = new Faker\ORM\CakePHP\Populator($faker);

		$populator->addEntity('Users', 30, [

			'first_name' => function () use ($faker) {
				return $faker->firstName();
			},
			'email' => function () use ($faker) {
				return $faker->safeEmail();
			},
			'password' => function () {
				$hasher = new DefaultPasswordHasher();
				return $hasher->hash('secret');
			},
			'role' => 'user',
			'active' => function () {
				return rand(0, 1);
			},
			'created' => function () use ($faker) {
				return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
			},
			'modified' => function () use ($faker) {
				return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
			},

		]);

		$populator->execute(['validate' => false]);

	}
}
