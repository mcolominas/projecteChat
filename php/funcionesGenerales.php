<?php
  session_start();
  function getURLHost(){
    return $_SERVER['SERVER_NAME']."/";
  }
  function getURLcartepa(){
    return "projecteChat/";
  }
  function getURLPage(){
    if (strpos(getURLHost(), 'www.') !== false) return "https://".getURLHost().getURLcartepa();
    else return "https://www.".getURLHost().getURLcartepa();
  }
  function getURLAbsolute(){
    return "/".getURLcartepa();
  }
  function getCurrentPage(){
    return $_SERVER["REQUEST_URI"];
  }

?>