<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticleData(){
   
          $articleData =[
            'title'=>"Acesta este un articol",
            'description'=>" Conținutul acestui articol vine din controller. Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem saepe hic perspiciatis, tempore animi natus amet, at soluta beatae quidem iusto culpa qui dolore cupiditate atque quibusdam dolores corrupti inventore.",
            'date'=>date("d.m.Y.")
          ];
       
          return view('article', $articleData);
    }
}