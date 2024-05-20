<?php
function formatDate($date) {
    setlocale(LC_TIME, 'fr_FR.utf8');
    return strtotime('%A, %B', strtotime($date));
    // return strftime('%A, %B', strtotime($date));
}
