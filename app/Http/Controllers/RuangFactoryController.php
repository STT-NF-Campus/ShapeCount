<?php

namespace App\Http\Controllers;

// import class
use App\Http\Controllers\BangunRuang\KubusController;
use App\Http\Controllers\BangunRuang\BalokController;
use App\Http\Controllers\BangunRuang\BolaController;
use App\Http\Controllers\BangunRuang\KerucutController;
use App\Http\Controllers\BangunRuang\LimasController;
use App\Http\Controllers\BangunRuang\TabungController;



/**
 * Class ini digunakan untuk membuat objek dari class-class yang ada di folder view "BangunRuang"
 * @extends AbsFactoryRuangController
 */
class RuangFactoryController extends AbsFactoryRuangController
{

    /**
     * Method untuk menginstansiasi class KubusController
     * @override method createKubus() dari class AbsFactoryRuangController
     * @return ShapesController instance dari class KubusController
     */
    public function createKubus(): ShapesController
    {
        return new KubusController();
    }


    /**
     * Method untuk menginstansiasi class BalokController
     * @override method createBalok() dari class AbsFactoryRuangController
     * @return ShapesController instance dari class BalokController
     */
    public function createBalok(): ShapesController
    {
        return new BalokController();
    }


    /**
     * Method untuk menginstansiasi class BolaController
     * @override method createBola() dari class AbsFactoryRuangController
     * @return ShapesController instance dari class BolaController
     */
    public function createBola(): ShapesController
    {
        return new BolaController();
    }


    /**
     * Method untuk menginstansiasi class KerucutController
     * @override method createKerucut() dari class AbsFactoryRuangController
     * @return ShapesController instance dari class KerucutController
     */
    public function createKerucut(): ShapesController
    {
        return new KerucutController();
    }


    /**
     * Method untuk menginstansiasi class LimasController
     * @override method createLimas() dari class AbsFactoryRuangController
     * @return ShapesController instance dari class LimasController
     */
    public function createLimas(): ShapesController
    {
        return new LimasController();
    }


    /**
     * Method untuk menginstansiasi class TabungController
     * @override method createTabung() dari class AbsFactoryRuangController
     * @return ShapesController instance dari class TabungController
     */
    public function createTabung(): ShapesController
    {
        return new TabungController();
    }

}
