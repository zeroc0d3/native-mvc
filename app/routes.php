<?php
/*
*  ---------------------------
*  Load All Your Controller
*  ---------------------------
*/
/* All Controller */
require('app/__controller.php');

/*
*  ---------------------------
*  Load All Your Model
*  ---------------------------
*/
/* All Model */
require('app/__model.php');

/*
* -------------------
*     MAIN ROUTES
* -------------------
*/
MainController::index();
