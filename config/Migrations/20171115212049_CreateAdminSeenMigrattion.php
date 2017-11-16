<?php
use Migrations\AbstractMigration;
use Cake\Auth\DefaultPasswordHasher;
//lap
// require_once 'C:/Users/HoloMundo/Desktop/myappcake/vendor/fzaninotto/faker/src/autoload.php';

//pc
require_once 'C:\Users\holamundo\Desktop\cakephp\vendor\fzaninotto\faker\src\autoload.php';
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
			'password' => function(){
                $hasher = new DefaultPasswordHasher();
                return $hasher->hash('secret');
            },
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
