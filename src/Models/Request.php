<?php

namespace Ktran\Priapi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $table = "priapi_requests";

    protected $fillable = [
        "name",
        "description",
        "parent",
        "sort",
        "type",
        "request_type",
        "uri",
        "request_params",
        "request_header",
        "request_body",
    ];
}
