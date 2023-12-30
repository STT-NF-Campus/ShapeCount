<?php

namespace App\Http\Controllers;

// import class Request
use Illuminate\Http\Request;


/**
 * Class MainController adalah class user untuk mengeksekusi program sesuai dengan inputan user
 * @extends Controller
 */
class MainController extends Controller
{

    /**
     * Method untuk menghitung luas persegi dan mengembalikan view persegi
     * @param Request $request
     * @return view && $data array
     */
    public function persegi(Request $request)
    {
        $factory = FactoryProducerController::getFactory('Datar');
        $persegi = $factory->createPersegi();
        $data = $persegi->hitungLuas($request);

        return view('BangunDatar.persegi', ['data' => $data]);
    }


    /**
     * Method untuk menghitung luas persegi panjang dan mengembalikan view persegi panjang
     * @param Request $request
     * @return view && $data array
     */
    public function persegiPanjang(Request $request)
    {
        $factory = FactoryProducerController::getFactory('Datar');
        $persegi = $factory->createPersegiPanjang();
        $data = $persegi->hitungLuas($request);

        return view('BangunDatar.persegi_panjang', ['data' => $data]);
    }


    /**
     * Method untuk menghitung luas lingkaran dan mengembalikan view lingkaran
     * @param Request $request
     * @return view && $data array
     */
    public function lingkaran(Request $request)
    {
        $factory = FactoryProducerController::getFactory('Datar');
        $persegi = $factory->createLingkaran();
        $data = $persegi->hitungLuas($request);

        return view('BangunDatar.lingkaran', ['data' => $data]);
    }


    /**
     * Method untuk menghitung luas segitiga dan mengembalikan view segitiga
     * @param Request $request
     * @return view && $data array
     */
    public function segitiga(Request $request)
    {
        $factory = FactoryProducerController::getFactory('Datar');
        $persegi = $factory->createSegitiga();
        $data = $persegi->hitungLuas($request);

        return view('BangunDatar.segitiga', ['data' => $data]);
    }


    /**
     * Method untuk menghitung luas trapesium dan mengembalikan view trapesium
     * @param Request $request
     * @return view && $data array
     */
    public function jajarGenjang(Request $request)
    {
        $factory = FactoryProducerController::getFactory('Datar');
        $persegi = $factory->createJajarGenjang();
        $data = $persegi->hitungLuas($request);

        return view('BangunDatar.jajar_genjang', ['data' => $data]);
    }


    /**
     * Method untuk menghitung luas belah ketupat dan mengembalikan view belah ketupat
     * @param Request $request
     * @return view && $data array
     */
    public function belahKetupat(Request $request)
    {
        $factory = FactoryProducerController::getFactory('Datar');
        $persegi = $factory->createBelahKetupat();
        $data = $persegi->hitungLuas($request);

        return view('BangunDatar.belah_ketupat', ['data' => $data]);
    }



    /**
     * Method untuk menghitung luas balok dan mengembalikan view balok
     * @param Request $request
     * @return view && $data array
     */
    public function balok(Request $request)
    {
        $factory = FactoryProducerController::getFactory('Ruang');
        $persegi = $factory->createBalok();
        $data = $persegi->hitungLuas($request);

        return view('BangunRuang.balok', ['data' => $data]);
    }


    /**
     * Method untuk menghitung luas bola dan mengembalikan view bola
     * @param Request $request
     * @return view && $data array
     */
    public function bola(Request $request)
    {
        $factory = FactoryProducerController::getFactory('Ruang');
        $persegi = $factory->createBola();
        $data = $persegi->hitungLuas($request);

        return view('BangunRuang.bola', ['data' => $data]);
    }


    /**
     * Method untuk menghitung luas kubus dan mengembalikan view kubus
     * @param Request $request
     * @return view && $data array
     */
    public function kubus(Request $request)
    {
        $factory = FactoryProducerController::getFactory('Ruang');
        $persegi = $factory->createKubus();
        $data = $persegi->hitungLuas($request);

        return view('BangunRuang.kubus', ['data' => $data]);
    }


    /**
     * Method untuk menghitung luas kerucut dan mengembalikan view kerucut
     * @param Request $request
     * @return view && $data array
     */
    public function kerucut(Request $request)
    {
        $factory = FactoryProducerController::getFactory('Ruang');
        $persegi = $factory->createKerucut();
        $data = $persegi->hitungLuas($request);

        return view('BangunRuang.kerucut', ['data' => $data]);
    }


    /**
     * Method untuk menghitung luas limas dan mengembalikan view limas
     * @param Request $request
     * @return view && $data array
     */
    public function limas(Request $request)
    {
        $factory = FactoryProducerController::getFactory('Ruang');
        $persegi = $factory->createLimas();
        $data = $persegi->hitungLuas($request);

        return view('BangunRuang.limas', ['data' => $data]);
    }


    /**
     * Method untuk menghitung luas tabung dan mengembalikan view tabung
     * @param Request $request
     * @return view && $data array
     */
    public function tabung(Request $request)
    {
        $factory = FactoryProducerController::getFactory('Ruang');
        $persegi = $factory->createTabung();
        $data = $persegi->hitungLuas($request);

        return view('BangunRuang.tabung', ['data' => $data]);
    }


}
