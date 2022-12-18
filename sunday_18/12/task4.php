<?php
class ArraySorter {
  public static function sort(array $arr) {
    sort($arr);
    return $arr;
  }
}
$array = [11, -2, 4, 35, 0, 8, -9];
$sortedArray = ArraySorter::sort($array);
print_r($sortedArray);

?>
