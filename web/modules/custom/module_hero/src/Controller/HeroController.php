<?php

    namespace Drupal\module_hero\Controller;

    use Drupal\Core\Controller\ControllerBase;

    /**
     * This is our hero controller
     */
    class HeroController extends ControllerBase {

        public function heroList() {
            $heroes = [
                ['name' => 'Hulk'],
                ['name' => 'Thor'],
                ['name' => 'Iron Man'],
                ['name' => 'Luke Cake'],
                ['name' => 'Black Widow']
            ];
           
            return [
                '#theme' => 'hero_list',
                '#items' => $heroes,
                '#title' => $this->t('Our Crazy Heroes List'),
            ];
        }
    }