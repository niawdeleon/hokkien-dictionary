<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = "hokkiendict";
    public $timestamps = "false";
    static $numberCombinations = array('*', '+', '::', 'a2', 'a3', 'a5', 'a7', 'a8', 'i2', 'i3', 'i5', 'i7', 'i8', 'u2', 'u3', 'u5', 'u7', 'u8', 'e2', 'e3', 'e5', 'e7', 'e8', 'o2', 'o3', 'o5', 'o7', 'o8', 'n2', 'n3', 'n5', 'n7', 'n8', 'm2', 'm3', 'm5', 'm7', 'm8');
    static $diacritics = array('ⁿ', '·', '', 'á', 'à', 'â', 'ā', 'a̍', 'í', 'ì', 'î', 'ī', 'i̍', 'ú', 'ù', 'û', 'ū', 'u̍', 'é', 'è', 'ê', 'ē', 'e̍', 'ó', 'ò', 'ô', 'ō', 'o̍', 'ń', 'ǹ', 'n̂', 'n̄', 'n̍', 'ḿ', 'm̀', 'm̂', 'm̄', 'm̍');

    public function getFormattedTaiwanese()
    {
        $original = $this->attributes['taiwanese'];

        return str_replace(Entry::$numberCombinations, Entry::$diacritics, $original);
    }
}
