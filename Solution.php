<?php


class Solution
{

    /**
     * @param Integer[] $groupSizes
     * @return Integer[][]
     */
    function groupThePeople($groupSizes)
    {
        $final = [];
        $groups = [];
        foreach ($groupSizes as $id => $groupSize) {
            if (count($groups[$groupSize] ?? []) >= $groupSize) {
                $final[] = $groups[$groupSize];
                unset($groups[$groupSize]);
            }
            $groups[$groupSize][] = $id;
        }
        $final = array_merge($final, $groups);

        return $final;
    }
}
