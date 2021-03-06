<?php
use Cake\Auth\DefaultPasswordHasher;
use Migrations\AbstractMigration;

//lap
require_once 'C:/Users/holamundo/Desktop/cakephp/vendor/fzaninotto/faker/src/autoload.php';

//pc
// require_once 'C:\Users\holamundo\Desktop\cakephp\vendor\fzaninotto\faker\src\autoload.php';
class CreateAdminSeenMigrattion extends AbstractMigration {
	/**
	 * Change Method.
	 *
	 * More information on this method is available here:
	 * http://docs.phinx.org/en/latest/migrations.html#the-change-method
	 * @return void
	 */

	public function up() {

		$faker = Faker\Factory::create();
		$populator = new Faker\ORM\CakePHP\Populator($faker);

		$populator->addEntity('Users', 1, [

			'first_name' => 'jorge',
			'email' => 'jorge@gmail.com',
			'password' => 'jorge123',
			'role' => 'admin',
			'active' => 1,
			'created' => function () use ($faker) {
				return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
			},
			'modified' => function () use ($faker) {
				return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
			},
		]);
		$populator->execute();
	}
}
