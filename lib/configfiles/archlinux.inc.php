<?php

/**
* This file is part of the Froxlor project.
* Copyright (c) 2010 the Froxlor Team (see authors).
*
* For the full copyright and license information, please view the COPYING
* file that was distributed with this source code. You can also view the
* COPYING file online at http://files.froxlor.org/misc/COPYING.txt
*
* @copyright (c) the authors
* @author Froxlor team <team@froxlor.org> (2010-)
* @license GPLv2 http://files.froxlor.org/misc/COPYING.txt
* @package Configfiles
*
*/

// Try to guess user/group from settings' email UID/GID
$vmail_user=posix_getpwuid($settings['system']['vmail_uid']);
$vmail_group=posix_getgrgid($settings['system']['vmail_gid']);

/* If one of them are not set, call it 'vmail' and suggest creating user/group
* in scripts. */
if ($vmail_user === false) {
$vmail_username="vmail";
} else {
$vmail_username=$vmail_user['name'];
}
if ($vmail_group === false) {
$vmail_groupname="vmail";
} else {
$vmail_groupname=$vmail_group['name'];
}

return Array(
  'archlinux' => Array(
    'label' => 'Archlinux',
    'services' => Array(
    )
  )
);
