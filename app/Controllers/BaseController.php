<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

// meregister model
use App\Models\MAdmin;
use App\Models\Mfasilitashotel;
use App\Models\Mfasilitaskamar;
use App\Models\Mkamar;
use App\Models\Mdetailkamar;
use App\Models\Mreservasi;


/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;
// membuat properti admin
    protected $admin;
    protected $fasilitashotel;
    protected $fasilitaskamar;
    protected $kamar;
    protected $detailkamar;
    protected $reservasi;




    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['fasilitaskamar'];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        $this->admin = NEW MAdmin;
        $this->fasilitashotel = NEW Mfasilitashotel;
        $this->fasilitaskamar = NEW Mfasilitaskamar;
        $this->kamar = NEW Mkamar;
        $this->detailkamar = NEW Mdetailkamar;
        $this->reservasi = NEW Mreservasi;


    }
}
