<?php

abstract class SkrupelAddon{
  protected $_name;

  public abstract function trip_event($name);

}