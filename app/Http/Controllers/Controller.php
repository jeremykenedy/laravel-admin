<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Base Controller Call and Entendor
    |--------------------------------------------------------------------------
    |
    | Create Controllers to extent this Class
    |
    */

	use DispatchesCommands, ValidatesRequests;

}
