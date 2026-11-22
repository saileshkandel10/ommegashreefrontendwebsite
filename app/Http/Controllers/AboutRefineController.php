<?php
namespace App\Http\Controllers;
class AboutRefineController extends Controller {
  public function chairperson() { return view('about.chairperson'); }
  public function vision() { return view('about.vision'); }
  public function board() { return view('about.board'); }
  public function who() { return view('about.who'); }
  public function expertise() { return view('about.expertise'); }
  public function milestones() { return view('about.milestones'); }
  public function quality() { return view('about.quality'); }
}
