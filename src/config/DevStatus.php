<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Additional Compiled Classes
  |--------------------------------------------------------------------------
  |
  | Here you may specify additional classes to include in the compiled file
  | generated by the `artisan optimize` command. These should be classes
  | that are included on basically every request into the application.
  |
  */
  'url' => env('GITHUB_API_URL'),

  'user-agent' => "$_SERVER['HTTP_USER_AGENT']"

];