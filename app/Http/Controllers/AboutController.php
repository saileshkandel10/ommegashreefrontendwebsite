<?php
namespace App\Http\Controllers;
class AboutController extends Controller {
  public function index() { return view('about.index'); }
  public function chairperson() { return view('about.chairperson'); }
  public function vision() { return view('about.vision'); }
  public function board() { return view('about.board'); }
  public function milestones() { return view('about.milestones'); }
  public function governance() { return view('about.governance'); }
  public function quality() { return view('about.quality'); }
}
