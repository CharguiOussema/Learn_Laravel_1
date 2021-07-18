<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
// normalemnt supprimer
    /*public function blog($myId, $author="valeur par defaut "){
        // tableau
        $posts = [
            1=> ['title' => 'learn laravel'],
            2=> ['title' => 'learn angular']
        ];
        // affiche dans la view  de la chemin views/posts/show
        // posts un dossier
        // show une view
        return view('posts.show', [
            // data est le nom de la variable de composont show
            'data' => $posts[$myId],
            'author' => $author
        ]);

        //return $myId . " author : $author";
    }*/
}
