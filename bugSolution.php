function foo(array $arr): array {
  $result = [];
  $queue = [$arr];

  while (!empty($queue)) {
    $current = array_shift($queue);
    foreach ($current as $item) {
      if (is_array($item)) {
        $queue[] = $item;
      } else {
        $result[] = $item;
      }
    }
  }

  return $result;
}

$arr = [1, [2, [3, [4, [5]]]]];
echo json_encode(foo($arr)); // Output: [1,2,3,4,5]

$arr = [1, [2, [3, 4], 5], 6];
echo json_encode(foo($arr)); // Output: [1,2,3,4,5,6] 