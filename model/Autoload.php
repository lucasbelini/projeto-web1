<?php
$diretorio = _ROOT_CLASS_PATH_;
if ($dir = opendir(_ROOT_CLASS_PATH_)) {
  while (($arquivo = readdir($dir)) !== false) {
    if (($arquivo != ".") AND ($arquivo != "..")) {
      if (preg_match("/\.(php){1}$/i", $arquivo, $ext_library)) {
        if ($ext_library[1] == "php") {
          require_once($diretorio . $arquivo);
        }
      }
    }
  }
}
