<?php
namespace App\Helpers;

use App\Models\Pengaturan;

class Helper{
    public static function checkAllowMenu()
    {
        $pengaturan = Pengaturan::where('nama','allow_menu')->first();

        $check_menu = false;

        if($pengaturan->tipe_data == 'array'){
            $check_menu = self::array($pengaturan->nilai);
        };
        return $check_menu;
    }
    public static function array($value)
    {
        try {
            $array = explode(',', $value);
            return in_array(auth()->user()->email, $array);
        } catch (\Throwable $th) {
            return false;
        }
    }
}