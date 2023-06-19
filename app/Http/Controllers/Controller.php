<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
*@OA\Server(url="http://alairtonjunior.com/api")
*OAz\Info(title="ApiOrbis", version="1.0.0" )
*/

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
