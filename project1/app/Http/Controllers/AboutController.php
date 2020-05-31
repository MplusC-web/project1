<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller {

  public function privacy() {
    return view('privacy');
  }

  public function terms() {
    return view('terms');
  }

  public function index() {
    return view('about');
  }

}