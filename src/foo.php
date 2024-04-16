<?php
function foo($intervals): array
{
    //trie des intervales par ordre croissant de leur minimum
    usort($intervals, function ($a, $b) {
        return $a[0] - $b[0];
    });

    //tableau de retour avec pour 1er element l'intervale avec le plus petit minimum
    $sortedIntervals = [$intervals[0]];

    //boucle de comparaison des intervales
    foreach ($intervals as $interval) {

        //assignation par reference du dernier intervale a comparer
        $cmpInterval = &$sortedIntervals[count($sortedIntervals) - 1];

        //si les intervales se superposent, on les fusionne
        if ($interval[0] <= $cmpInterval[1]) {

            // on fusionne en récuperant la valeur max entre les 2 intervales
            $cmpInterval[1] = max($cmpInterval[1], $interval[1]);

        //sinon on ajoute l'intervale a la suite au tableau de retour
        } else {
            $sortedIntervals[] = $interval;
        }
    }

    // tableau de retour avec les intervales fusionnés et triés
    return $sortedIntervals;
}

print_r($test1 = foo([[0, 3], [6, 10]]));
print_r($test2 = foo([[0, 5], [3, 10]]));
print_r($test3 = foo([[0, 5], [2, 4]]));
print_r($test4 = foo([[7, 8], [3, 6], [2, 4]]));
print_r($test5 = foo([[3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]]));

