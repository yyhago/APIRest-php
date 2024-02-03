<?php
class Database
{
  public function select(int $limit): array
  {
    try{
      $users = json_decode(file_get_contents(DATABASE_FILES), true);
      $users = array_slice($users, 0, $limit);
      return $users;
    } catch(Exception $e){
        throw new Exception( $e->getMessage() );
    }
    return false;
  }
}