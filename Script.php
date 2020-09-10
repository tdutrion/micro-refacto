<?php

declare(strict_types=1);

final class Script
{
    public function test(array $name_pdf): string
    {
        $nom = '';
        for ($j = 0; $j < count($name_pdf); $j++) {
            if ($nom == "") {
                $nom = $name_pdf[$j];
            } else {
                $nom = $name_pdf[$j]. '-' . $nom;
            }
        }
        return $nom;
    }
}

