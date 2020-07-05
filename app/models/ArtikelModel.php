<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel{

    public static function save($data){
        // buang token
        unset($data['_token']);
        $new_artikel = DB::table('artikels')->insert($data);
        return $new_artikel;

    }


}

?>
