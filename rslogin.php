<?php
require_once '_GNPANEL/_connect.php';
require_once FUNC;
setcookie('email','',time()-100);
setcookie('pass','',time()-100);
session_destroy();
Header("Location: $_GD->home");