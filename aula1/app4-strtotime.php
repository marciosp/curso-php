<?php

echo 'Now: ', date('d/m/Y', strtotime('now')), '<br />';
echo 'Next Year: ', date('d/m/Y', strtotime('16 August 2015')), '<br />';
echo 'Tomorrow: ', date('d/m/Y', strtotime('+1 day', mktime(0, 0, 0, 1, 11, 2015 )) ), '<br />';
echo 'Next week: ', date('d/m/Y', strtotime('+1 week')), '<br />';
echo 'Next week 2  days 4 hours and 2 seconds later: ', date('d/m/Y H:i:s', strtotime('+1 week 2 days 4 hours 2 seconds')), '<br />';
echo 'Next Thursday: ', date('d/m/Y', strtotime('next Thursday')), '<br />';
echo 'Last Monday: ', date('d/m/Y', strtotime('last Monday')), '<br />';
echo 'Last day of month: ', date('d/m/Y', strtotime('last day of August')), '<br />';
