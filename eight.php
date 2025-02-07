<?php
function generatePassword($length) {
    return bin2hex(random_bytes($length / 2));
}
