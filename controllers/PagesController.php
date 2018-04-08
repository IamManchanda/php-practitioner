<?php

class PagesController {
  public function home() {
    return view('index');
  }

  public function about() {
    $companyName = 'Laracasts';
    return view('about', compact('companyName'));
  }

  public function contact() {
    return view('contact');
  }
}
