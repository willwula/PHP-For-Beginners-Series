# PHP-For-Beginners-Series
20221229 "一起學MVC" ep.5-3 
20221230 "一起學MVC" ep.8 

網頁架構：
根目錄下的index.php require function.php & router.php
router.php決定指向controllers資料夾中的那一個位置。
controllers中index.php ＆ about.php & contact.php丟出各自的$heading到views/partials/nav.php，並require各自對應的*.view.php

建立clsss Database.php，將PDO連線與query獨立出來。
