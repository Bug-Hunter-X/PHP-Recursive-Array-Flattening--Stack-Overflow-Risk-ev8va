function foo(array $arr): array {
  if (empty($arr)) {
    return [];
  }

  $result = [];
  foreach ($arr as $item) {
    if (is_array($item)) {
      $result = array_merge($result, foo($item));
    } else {
      $result[] = $item;
    }
  }

  return $result;
}

$arr = [1, [2, [3, 4], 5], 6];
echo json_encode(foo($arr)); // Output: [1,2,3,4,5,6]

$arr = [1, [2, [3, [4, [5]]]]];
echo json_encode(foo($arr)); // Output: [1,2,3,4,5]