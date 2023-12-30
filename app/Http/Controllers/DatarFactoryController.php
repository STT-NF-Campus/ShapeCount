<?php

namespace App\Http\Controllers;

// import class
use App\Http\Controllers\BangunDatar\PersegiController;
use App\Http\Controllers\BangunDatar\PersegiPanjangController;
use App\Http\Controllers\BangunDatar\SegitigaController;
use App\Http\Controllers\BangunDatar\LingkaranController;
use App\Http\Controllers\BangunDatar\JajarGenjangController;
use App\Http\Controllers\BangunDatar\BelahKetupatController;




/**
 * Class ini digunakan untuk membuat objek dari class-class yang ada di folder view "BangunDatar"
 * @extends AbsFactoryDatarController
 */
class DatarFactoryController extends AbsFactoryDatarController
{

    /**
     * Method untuk menginstansiasi class PersegiController
     * @override method createPersegi() dari class AbsFactoryDatarController
     * @return ShapesController instance dari class PersegiController
     */
    public function createPersegi(): ShapesController
    {
        return new PersegiController();
    }


    /**
     * Method untuk menginstansiasi class PersegiPanjangController
     * @override method createPersegiPanjang() dari class AbsFactoryDatarController
     * @return ShapesController instance dari class PersegiPanjangController
     */
    public function createPersegiPanjang(): ShapesController
    {
        return new PersegiPanjangController();
    }


    /**
     * Method untuk menginstansiasi class SegitigaController
     * @override method createSegitiga() dari class AbsFactoryDatarController
     * @return ShapesController instance dari class SegitigaController
     */
    public function createSegitiga(): ShapesController
    {
        return new SegitigaController();
    }


    /**
     * Method untuk menginstansiasi class LingkaranController
     * @override method createLingkaran() dari class AbsFactoryDatarController
     * @return ShapesController instance dari class LingkaranController
     */
    public function createLingkaran(): ShapesController
    {
        return new LingkaranController();
    }


    /**
     * Method untuk menginstansiasi class JajarGenjangController
     * @override method createJajarGenjang() dari class AbsFactoryDatarController
     * @return ShapesController instance dari class JajarGenjangController
     */
    public function createJajarGenjang(): ShapesController
    {
        return new JajarGenjangController();
    }


    /**
     * Method untuk menginstansiasi class BelahKetupatController
     * @override method createBelahKetupat() dari class AbsFactoryDatarController
     * @return ShapesController instance dari class BelahKetupatController
     */
    public function createBelahKetupat(): ShapesController
    {
        return new BelahKetupatController();
    }
}
