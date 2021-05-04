<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use Illuminate\Http\Request;

class LimitController extends Controller
{
    public function getLimit()
    {
        $now = date('d');
        return count(Penerimaan::whereDay('tgl_data', $now)->get());
    }
}
