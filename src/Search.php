<?php
declare(strict_types=1);

namespace Ashishak\SearchPhone;

class Search
{
    public function getPhone(string $s):array{
        if (preg_match_all("/(?:^|\D)((?:8|\+7)[\-\s\(\d\)]{10,})(?:\D|$)/", $s, $match)){
            $phoneArray = [];
            foreach ($match[1] as $phone){
                $phoneArray[] = str_replace(['-','(',')', ' '], '', str_replace('+7', '8', trim($phone)));

            }
            return array_unique($phoneArray);
        }
    }
}