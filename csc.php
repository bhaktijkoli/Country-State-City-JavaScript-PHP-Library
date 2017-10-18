<?php
class Csc {

  private $countries;
  private $states;
  private $cities;

  public function __construct()
  {
    $this->countries = json_decode(file_get_contents("data/countries.json"), true);
    $this->countries = $this->countries['countries'];
    $this->states = json_decode(file_get_contents("data/states.json"), true);
    $this->states = $this->states['states'];
    $this->cities = json_decode(file_get_contents("data/cities.json"), true);
    $this->cities = $this->cities['cities'];
  }

  public function get_country_name($id)
  {
    foreach ($this->countries as $key => $value)
    {
      if($value['id'] == $id)
      {
        return $value['name'];
      }
    }
  }

  public function get_country_id($name)
  {
    foreach ($this->countries as $key => $value)
    {
      if($value['name'] == $name)
      {
        return $value['id'];
      }
    }
  }

  public function get_state_name($id)
  {
    foreach ($this->states as $key => $value)
    {
      if($value['id'] == $id)
      {
        return $value['name'];
      }
    }
  }

  public function get_state_id($name)
  {
    foreach ($this->states as $key => $value)
    {
      if($value['name'] == $name)
      {
        return $value['id'];
      }
    }
  }

  public function get_city_name($id)
  {
    foreach ($this->cities as $key => $value)
    {
      if($value['id'] == $id)
      {
        return $value['name'];
      }
    }
  }

  public function get_city_id($name)
  {
    foreach ($this->cities as $key => $value)
    {
      if($value['name'] == $name)
      {
        return $value['id'];
      }
    }
  }



}

?>
