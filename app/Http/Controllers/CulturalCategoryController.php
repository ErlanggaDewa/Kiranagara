<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CulturalCategory;
use App\Http\Requests\StoreCulturalCategoryRequest;
use App\Http\Requests\UpdateCulturalCategoryRequest;

class CulturalCategoryController extends Controller
{


  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\StoreCulturalCategoryRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreCulturalCategoryRequest $request)
  {
    $culturalCategory = $request->validate([
      'name' => ['required', 'string', 'max:255', 'unique:cultural_categories'],
      'img' =>  ['required', 'string', 'max:255']
    ]);

    $status = CulturalCategory::create($culturalCategory);
    if ($status) {
      return redirect()->route('budaya-admin')->withToastSuccess('Data Berhasil Ditambah!');
    }
    return redirect()->back()->withToast('toast_error', 'Data Gagal Ditambah');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\CulturalCategory  $culturalCategory
   * @return \Illuminate\Http\Response
   */
  public function show(CulturalCategory $culturalCategory, Request $request)
  {
    $selectedData = CulturalCategory::where('id', '=', $request->id)->get()[0];
    return view(
      'admin.detail-kategori',
      [
        "detailData" => $selectedData,
      ]
    );
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\CulturalCategory  $culturalCategory
   * @return \Illuminate\Http\Response
   */
  public function edit(CulturalCategory $culturalCategory, Request $request)
  {
    $selectedData = CulturalCategory::where('id', '=', $request->id)->get()[0];
    return view(
      'admin.edit-kategori',
      [
        "selectedData" => $selectedData,
      ]
    );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdateCulturalCategoryRequest  $request
   * @param  \App\Models\CulturalCategory  $culturalCategory
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateCulturalCategoryRequest $request, CulturalCategory $culturalCategory,)
  {
    $data = $request->validate([
      'name' => ['required', 'string', 'max:255', 'unique:cultural_data,name,' . $request->id],
      'img' =>  ['required', 'string', 'max:255'],
    ]);

    $status = CulturalCategory::where("id", "=", $request->id)->update($data);
    if ($status) {
      return redirect()->back()->withToastSuccess('Data Berhasil Diupdate');
    }
    return redirect()->back()->withToast('toast_error', 'Data Gagal Diupdate');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\CulturalCategory  $culturalCategory
   * @return \Illuminate\Http\Response
   */
  public function destroy(CulturalCategory $culturalCategory, Request $request)
  {
    $status = CulturalCategory::where('id', '=', $request->id)->delete();
    if ($status) {
      return redirect()->back()->withToastSuccess('Data Berhasil Dihapus');
    }
    return redirect()->back()->withToast('toast_error', 'Data Gagal Dihapus');
  }

  function crop(Request $request)
  {

    $path = 'img/budaya/kategori/';
    $file = $request->file('img-file');
    $new_image_name = 'UIMG' . date('Ymd') . uniqid() . '.jpg';
    $upload = $file->move(public_path($path), $new_image_name);
    if ($upload) {
      return response()->json(['status' => 1, 'msg' => 'Image has been cropped successfully.', 'name' => $new_image_name]);
    } else {
      return response()->json(['status' => 0, 'msg' => 'Something went wrong, try again later']);
    }
  }
}
