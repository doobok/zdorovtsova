<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function index()
    {
      $blocks = collect();
      $blocks->push(['name' => 'directions', 'menu' => true]);
      $blocks->push(['name' => 'numbers', 'menu' => false]);
      $blocks->push(['name' => 'services', 'menu' => true]);
      $blocks->push(['name' => 'steps', 'menu' => true]);
      $blocks->push(['name' => 'reviews', 'menu' => true]);
      $blocks->push(['name' => 'aboutme', 'menu' => true]);

      return view('pages.index', [
        'blocks' => $blocks,
      ]);
    }

    public function policy()
    {
      $domain = Str::after(config('app.url'), '//');

      return view('pages.policy', [
        'blocks' => false,
        'domain' => $domain,
      ]);
    }
}
