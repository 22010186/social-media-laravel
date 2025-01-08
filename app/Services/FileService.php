<?php

namespace App\Services;

class FileService
{

    public function addFile($model, $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg,mp4|max:2048',
        ]);
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $extension == 'mp4' ? $path = '/videos/' : $path = '/images/';

        if ($fileName) {
            $model->file = $path . $fileName;
            $model->isVideo = $extension == 'mp4' ? true : false;
            $file->move(public_path($path), $fileName);
        }

        return $model;
    }
}
