<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class UserSekolahController extends Controller
{
    public function getProfileSekolahById() {
        $sekolahbyId = Sekolah::get();

        return response()->json($sekolahbyId, $status=200);
    }
}
