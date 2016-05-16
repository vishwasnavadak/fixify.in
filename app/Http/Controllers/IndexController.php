<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Issues;
class IndexController extends Controller {
  public function index() {
    return view('index')->with([
      'issues' => Issues::all()
    ]);
  }
  public function login() {
    return view('login')->with('title', 'Login');
  }
  public function complaint(Request $req) {
    $complaint = ($req->input('selected') == "true")?Issues::find($req->input('item')):$req->input('item');
    return view('complaint')->with([
      'title' => 'Complaint',
      'complaint' => $complaint
    ]);
  }
}
