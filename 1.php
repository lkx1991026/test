这是在master分支编辑的内容
这是在hotfix上的编辑内容
这是在hotfix分支上修复的bug
---hotfix11.56
<?php

class a
{
    const APP = 1;
    const PLATEFORM = 2;

    public static function getType()
    {
        return [
            'app' => self::APP,
            'plateform' => self::PLATEFORM
        ];
    }
}