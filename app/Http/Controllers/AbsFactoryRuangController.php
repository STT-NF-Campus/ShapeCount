<?php

namespace App\Http\Controllers;

// import class Request
use Illuminate\Http\Request;


/**
 * Abstract class AbsFactoryRuangController untuk membuat factory bangun ruang
 */
abstract class AbsFactoryRuangController extends Controller
{
    /**
     * Abstract method untuk membuat factory bangun ruang balok
     * @return ShapesController
     */
    abstract public function createBalok(): ShapesController;

    /**
     * Abstract method untuk membuat factory bangun ruang bola
     * @return ShapesController
     */
    abstract public function createBola(): ShapesController;

    /**
     * Abstract method untuk membuat factory bangun ruang kerucut
     * @return ShapesController
     */
    abstract public function createKerucut(): ShapesController;

    /**
     * Abstract method untuk membuat factory bangun ruang kubus
     * @return ShapesController
     */
    abstract public function createKubus(): ShapesController;

    /**
     * Abstract method untuk membuat factory bangun ruang limas
     * @return ShapesController
     */
    abstract public function createLimas(): ShapesController;

    /**
     * Abstract method untuk membuat factory bangun ruang prisma
     * @return ShapesController
     */
    abstract public function createTabung(): ShapesController;
}
