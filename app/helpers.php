<?php
    function saveImage($file, $path) {

        $filename = $file->getClientOriginalName();

        // Upload file
        $file->move($path, $filename);
        return $filename;
    }
    
    function deleteImage($filename, $path) {

        $path = public_path() . $path . $filename;
        
        if (file_exists($path)) {
            unlink($path);
        }
    }

    function activeClass($route) {
        if(is_array($route)) {
            $flag = false;
            foreach ($route as $key => $value) {
                if(!is_null(\Request::route()) && \Request::route()->getName() == $value)
                    return 'active-link'; 
            }
            return 'active';
        }
        return !is_null(\Request::route()) && \Request::route()->getName() == $route? 'active-link': 'active';
    }