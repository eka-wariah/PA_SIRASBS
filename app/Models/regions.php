<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class regions extends Model
{
    use HasFactory, SoftDeletes ;
    protected $table = 'regions';
    protected $primaryKey = 'rgn_id';
    protected $guarded = [];

    const CREATED_AT = 'rgn_created_at';
    const UPDATED_AT = 'rgn_updated_at';
    const DELETED_AT = 'rgn_deleted_at';
}
