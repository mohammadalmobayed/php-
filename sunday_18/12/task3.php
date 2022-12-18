<?php
// class FactorialCalculator {
//     public static function calculate($n) {
//     if ($n === 0) {
//         return 1;
//     } else {
//         return $n * self::calculate($n - 1);
// }
//     }
// }
// $factorial = FactorialCalculator::calculate(5);
// echo $factorial;

?>
<?php
class Factorial {
    public function calculate($n) {
      $result = 1;
      for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
      }
      return $result;
    }
  }

  $factorial = new Factorial();
$result = $factorial->calculate(5);
echo $result."<br>"; 
?>