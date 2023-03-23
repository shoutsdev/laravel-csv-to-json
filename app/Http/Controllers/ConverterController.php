<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConverterController extends Controller
{
    public function csvToJson(Request $request)
    {
        try {
            $filePath = $request->file('csv_file');
            $keys = $newArray = $data = [];
            if (($handle = fopen($filePath, 'r')) !== FALSE) {
                $i = 0;
                $delimiter = ',';
                while (($lineArray = fgetcsv($handle, 4000, $delimiter, '"')) !== FALSE) {
                    for ($j = 0; $j < count($lineArray); $j++) {
                        $data[$i][$j] = $lineArray[$j];
                    }
                    $i++;
                }
                fclose($handle);
            }
            $count = count($data) - 1;
            $labels = array_shift($data);
            foreach ($labels as $label) {
                $keys[] = $label;
            }
            $keys[] = 'id';
            for ($i = 0; $i < $count; $i++) {
                $data[$i][] = $i;
            }
            for ($j = 0; $j < $count; $j++) {
                $d = array_combine($keys, $data[$j]);
                $newArray[$j] = $d;
            }
            dd($newArray);
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
