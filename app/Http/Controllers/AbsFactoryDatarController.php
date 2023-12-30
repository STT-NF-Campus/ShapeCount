<?php

namespace App\Http\Controllers;

// import class Request
use Illuminate\Http\Request;


/**
 * Abstract class AbsFactoryDatarController untuk membuat factory bangun datar
 */
abstract class AbsFactoryDatarController extends Controller
{

    /**
     * Abstract method untuk membuat factory bangun datar belah ketupat
     * @return ShapesController
     */
    abstract public function createBelahKetupat(): ShapesController;

    /**
     * Abstract method untuk membuat factory bangun datar jajar genjang
     * @return ShapesController
     */
    abstract public function createJajarGenjang(): ShapesController;

    /**
     * Abstract method untuk membuat factory bangun datar lingkaran
     * @return ShapesController
     */
    abstract public function createLingkaran(): ShapesController;

    /**
     * Abstract method untuk membuat factory bangun datar persegi
     * @return ShapesController
     */
    abstract public function createPersegi(): ShapesController;

    /**
     * Abstract method untuk membuat factory bangun datar persegi panjang
     * @return ShapesController
     */
    abstract public function createPersegiPanjang(): ShapesController;

    /**
     * Abstract method untuk membuat factory bangun datar segitiga
     * @return ShapesController
     */
    abstract public function createSegitiga(): ShapesController;
}
