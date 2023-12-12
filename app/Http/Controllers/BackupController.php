<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{
    public function create()
    {
        $ubicacionDescarga = storage_path('app/') . "RespaldoBD_" . date("Y-m-d") . "_Hospital.sql";
        $comando = sprintf(
            "%s --user=\"%s\" --password=\"%s\" %s > %s",
            env("UBICACION_MYSQLDUMP"),
            env("DB_USERNAME"),
            env("DB_PASSWORD"),
            env("DB_DATABASE"),
            escapeshellarg($ubicacionDescarga)
        );

        exec($comando, $salida, $codigoSalida);

        if ($codigoSalida !== 0) {
            return "Hubo un error al realizar el respaldo. Código de salida: $codigoSalida";
        }

        return response()->download($ubicacionDescarga)->deleteFileAfterSend(true);
    }
}