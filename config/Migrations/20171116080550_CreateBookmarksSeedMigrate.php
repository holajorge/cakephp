<?php
use Migrations\AbstractMigration;
use Cake\Auth\DefaultPasswordHasher;
//lap
// require_once 'C:/Users/HoloMundo/Desktop/myappcake/vendor/fzaninotto/faker/src/autoload.php';

//pc
require_once 'C:\Users\holamundo\Desktop\cakephp\vendor\fzaninotto\faker\src\autoload.php';
class CreateBookmarksSeedMigrate extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {

        $faker = Faker\Factory::create();
        $populator = new Faker\ORM\CakePHP\Populator($faker);

        $populator->addEntity('Bookmarks', 200, [

            'title' => function() use ($faker) {
                return $faker->sentence($nbWords = 3, $variableNbWords = true);
            },
            'description' => function() use ($faker) {
                return $faker->paragraph($nbSentences = 3, $variableNbsentences = true);
            },
            'url' => function() use ($faker){                
                return $faker->url;
            },

            'created' => function () use ($faker) {
                return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
            },
            'modified' => function () use ($faker) {
                return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
            },          
            'user_id' => function () {
                return rand(1, 31);
            }    
          
        ]);

        $populator->execute();
    }
}
