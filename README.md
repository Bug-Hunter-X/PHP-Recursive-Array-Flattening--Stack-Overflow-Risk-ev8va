# PHP Recursive Array Flattening: Stack Overflow Risk

This repository demonstrates a potential stack overflow error in a PHP function designed to flatten multidimensional arrays recursively.

The `bug.php` file contains the original code, which is vulnerable to stack overflow errors for very deep or large arrays. The `bugSolution.php` file provides an iterative solution to mitigate the risk.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` with a deeply nested array to trigger the stack overflow.

## Solution
The `bugSolution.php` file provides an iterative approach, using a loop and queue, which avoids the recursion and thus the risk of a stack overflow error.  This solution is more robust for handling extremely large or deeply nested arrays. 