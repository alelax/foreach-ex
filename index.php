<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php

            $people = [
                [
                    'name' => 'Michele',
                    'age' => 30,
                ],
                [
                    'name' => 'Fabio',
                    'age' => 40,
                ],
                [
                    'name' => 'Davide',
                    'age' => 27,
                ],
                [
                    'name' => 'Alessandro',
                    'age' => 15,
                ],
                [
                    'name' => 'Michele P.',
                    'age' => 45,
                ],
            ];

            $minorenni = [];
            $maggiorenni = [];
            $pensionati = [];

            foreach ($people as $personData)
            {
                if ($personData['age'] < 18) {
                    $minorenni[] = $personData;
                }
                else if ($personData['age'] > 65) {
                    $pensionati[] = $personData;
                }
                else {
                    $maggiorenni[] = $personData;                }
            }

         ?>

         <ul>
             <li>
                 Minorenni (<?php echo count($minorenni); ?>)
                 <ul>
                     <?php foreach ($minorenni as $minorenne) { ?>

                         <li><?php echo $minorenne['name'] . ' con età '. $minorenne['age']; ?></li>

                     <?php } ?>
                 </ul>
             </li>
             <li>
                 Maggiorenni (<?php echo count($maggiorenni); ?>)
                 <ul>
                     <?php foreach ($maggiorenni as $maggiorenne) { ?>

                         <li><?php echo $maggiorenne['name'] . ' con età '. $maggiorenne['age']; ?></li>

                     <?php } ?>
                 </ul>
             </li>
             <?php if (!empty($pensionati)) { ?>
                 <li>
                     Pensionati (<?php echo count($pensionati); ?>)
                     <ul>
                         <?php foreach ($pensionati as $pensionato) { ?>

                             <li><?php echo $pensionato['name'] . ' con età '. $pensionato['age']; ?></li>

                         <?php } ?>
                     </ul>
                 </li>
             <?php }
                else { ?>
                    <span style="color: red;">Non ci sono pensionati</span>
                <?php }
             ?>
         </ul>

    </body>
</html>
