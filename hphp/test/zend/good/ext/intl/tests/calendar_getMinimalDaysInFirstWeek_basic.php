<?php
ini_set("intl.error_level", E_WARNING);
ini_set("intl.default_locale", "nl");

$intlcal = IntlCalendar::createInstance('UTC');
var_dump($intlcal->getMinimalDaysInFirstWeek());
var_dump(intlcal_get_minimal_days_in_first_week($intlcal));
echo "==DONE==";
