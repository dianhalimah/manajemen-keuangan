<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Pemasukan extends Model
{
 protected $fillable = [
 "sumber_pemasukan",
 "nominal",
 "tanggal",
 "keterangan"
 ];
}
?>