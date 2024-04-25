<?php

class Message
{
  public function setMessage(string $message, string $type, string $redirect = '/'): void
  {
    $_SESSION['message'] = $message;
    $_SESSION['type'] = $type;

    if ($redirect != 'back') {
      header("Location: $redirect");
    } else {
      header("Location:" . $_SERVER['HTTP_REFERER']);
    }
  }

  public function getMessage(): array|bool
  {
    if (!empty($_SESSION['message'])) {
      return [
        'message' =>  $_SESSION['message'],
        'type' => $_SESSION['type']
      ];
    } else {
      return false;
    }
  }

  public function clearMessage()
  {
    $_SESSION['message'] = '';
    $_SESSION['type'] = '';
  }
}
