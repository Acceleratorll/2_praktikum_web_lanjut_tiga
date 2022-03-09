<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        if ($id = null){
            return '<a href="https://www.educastudio.com/news">
            https://www.educastudio.com/news</a>';;
        }else{
            return '<a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">
            https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19</a>';
        }
    }
}
