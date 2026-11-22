<?php
namespace App\Http\Controllers;
class DepartmentPageController extends Controller {
  public function index() { return view('departments.index'); }
  public function show($slug) { return view('departments.show', compact('slug')); }
}
