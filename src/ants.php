<?php



function ants($n, $left, $right)
{
    if ($right > $left) {
        $pathLeft = $left + 1;
        $pathRight = $n - $right + 1;
    $result = ($pathLeft < $pathRight) ? $pathLeft : $pathRight;
    } else {
        $temp = 0;
        while ($left != $right + 1) {
            $left -= 1;
            if ($left != $right + 1) {
                $right += 1;
                $temp += 1;
            } else {
                $right -= 1;
                $temp += 1;
                break;
            }
        }
        $result = ants($n, $right, $left);
        $result += $temp;
    }
    return $result;
}

print_r(ants(7, 7, 1));


