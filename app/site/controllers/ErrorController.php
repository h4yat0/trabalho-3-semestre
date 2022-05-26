<?php

namespace app\site\controllers;

class ErrorController
{
    public function index()
    {
        // echo 'página de erro!!!';
        http_response_code(404);
    }
}
