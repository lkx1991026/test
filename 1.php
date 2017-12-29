<?php
    $zip=new ZipArchive();
    $filename='test.zip';
    var_dump($zip->open($filename,ZipArchive::OVERWRITE|ZipArchive::CREATE));
    $zip->addFile('jquery10.js');
    $zip->close();
    header ( "Cache-Control: max-age=0" );
    header ( "Content-Description: File Transfer" );
    header ( 'Content-disposition: attachment; filename=' .$filename  ); // 文件名
    header ( "Content-Type: application/zip" ); // zip格式的
    header ( "Content-Transfer-Encoding: binary" ); // 告诉浏览器，这是二进制文件
//    header ( 'Content-Length: ' . filesize ( $filename ) ); // 告诉浏览器，文件大小
    @readfile ( $filename );