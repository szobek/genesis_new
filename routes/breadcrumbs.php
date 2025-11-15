<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as Trail;


Breadcrumbs::for('pages.welcome', fn (Trail $trail) =>
    $trail->push('Főoldal', route('pages.welcome'))
);

Breadcrumbs::for('pages.contact', fn (Trail $trail) =>
    $trail->parent('pages.welcome')->push('Kapcsolat', route('pages.contact'))
);

Breadcrumbs::for('pages.about', fn (Trail $trail) =>
    $trail->parent('pages.welcome')->push('Ismerd meg', route('pages.about'))
);

Breadcrumbs::for('pages.genesis-houses', fn (Trail $trail) =>
    $trail->parent('pages.welcome')->push('Genesis Házak', route('pages.genesis-houses'))
);
Breadcrumbs::for('pages.components', fn (Trail $trail) =>
    $trail->parent('pages.welcome')->push('Előre gyártott elemek', route('pages.components'))
);
Breadcrumbs::for('pages.ads', fn (Trail $trail) =>
    $trail->parent('pages.welcome')->push('Hirdetések', route('pages.ads'))
);
Breadcrumbs::for('pages.blueprint-catalog', fn (Trail $trail) =>
    $trail->parent('pages.welcome')->push('Vázlatterv katalógus', route('pages.blueprint-catalog'))
);

Breadcrumbs::for('pages.simple-ad', fn (Trail $trail) =>
    $trail->parent('pages.ads')->push('Hirdetés', route('pages.blueprint-catalog'))
);

Breadcrumbs::for('pages.tender', fn (Trail $trail) =>
    $trail->parent('pages.welcome')->push('Árajánlat', route('pages.tender'))
);
Breadcrumbs::for('pages.adatvedelem', fn (Trail $trail) =>
    $trail->parent('pages.welcome')->push('Adatkezelés', route('pages.tender'))
);

Breadcrumbs::for('pages.alkalmazastechnika', fn (Trail $trail) =>
    $trail->parent('pages.welcome')->push('Alkalmazástechnika', route('pages.alkalmazastechnika'))
);

Breadcrumbs::for('pages.teljesitmennyilatkozat', fn (Trail $trail) =>
    $trail->parent('pages.welcome')->push('Teljesítménnyilatkozat', route('pages.teljesitmennyilatkozat'))
);

