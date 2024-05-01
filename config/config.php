<?php

declare(strict_types=1);

use Afup\Antenne\Config\Site;

return Site::configure('Lyon')
    ->repository('https://github.com/afup/lyon.afup.org')
    ->twitter('AFUP_Lyon')
    ->linkedIn('https://www.linkedin.com/company/afup-lyon/')
    ->meetup('https://www.meetup.com/fr-FR/afup-lyon/')
    ->currentEvent('AFUP Day 2024')
;
