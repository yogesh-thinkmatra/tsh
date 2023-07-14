<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BaseRepository
{
  public function curDateTime()
  {
    return date('Y-m-d, H:i:s');
  }

  public function getUpdateToken(int $id)
  {
    return User::where('id', '=', $id)->value('update_token');
  }

  public function hrmGetCurrentEmployeeDetails(int $id)
  {
    return User::where('id', '=', $id)->first();
  }

  public function handleSingleFileUpload($file, $path): string
  {
    $fileName = mt_rand(1, 9999) . time() . '.' . $file->extension();
    $file->move(public_path($path), $fileName);
    return $fileName;
  }

  public function handleMultiFileUpload($request, $key, $path, $limit = 50): array
  {
    $filesNames = [];
    foreach ($request->{$key} as $key => $file) :
      if ($key < $limit) {
        $name =  mt_rand(1, 99999999) . time() . '.' . $file->extension();
        $file->move(public_path($path), $name);
        $filesNames[] = $name;
      }
    endforeach;
    return $filesNames;
  }

  public function handleDeleteFile($file, $path): bool
  {
    if (Storage::disk('app_files')->exists("{$path}{$file}")) {
      return Storage::disk('app_files')->delete("{$path}{$file}");
    }
    return false;
  }
}
