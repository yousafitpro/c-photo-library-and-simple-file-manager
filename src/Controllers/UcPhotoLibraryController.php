<?php

namespace Yousafitpro\PhotoLibrary\Controllers;
use App\Http\Controllers\Controller;
class UcPhotoLibraryController extends Controller
{

  public function index()
  {
      return view('UcPhotoLib::index');
  }
}
