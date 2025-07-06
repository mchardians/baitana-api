<?php

namespace App\Filters;

class NewsFilter extends ApiFilter {
    protected $safeParams = [
        "status" => ["eq"],
        "title" => ["eq", "lk"]
    ];

    protected $operatorMap = [
        "eq" => "=",
        "lk" => "like"
    ];
}