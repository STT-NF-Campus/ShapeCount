<?php

namespace App\Http\Controllers;


/**
 * Class FactoryProducerController untuk membuat factory bangun datar dan bangun ruang
 */
class FactoryProducerController
{
    /**
     * Method untuk menginstansiasi class factory bangun datar atau bangun ruang
     * @param string $factory
     * @return RuangFactoryController|DatarFactoryController
     */
    public static function getFactory($factory)
    {
        // jika factory yang diminta adalah bangun datar
        if ($factory == 'Datar') {
            return new DatarFactoryController();
        }
        // jika factory yang diminta adalah bangun ruang
        else if ($factory == 'Ruang') {
            return new RuangFactoryController();
        }
    }

}
