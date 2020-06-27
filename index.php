<?php
require "Solution.php";

$solution = new Solution();
print_r($solution->groupThePeople([3, 3, 3, 3, 3, 1, 3]));

$solution = new Solution();
print_r($solution->groupThePeople([2, 1, 3, 3, 3, 2]));

$solution = new Solution();
print_r($solution->groupThePeople([2, 2, 1, 1, 1, 1, 1, 1]));
