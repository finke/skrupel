<?php

abstract class SkrupelAddon{
  protected $_jump_points = array();

  public get_jump_points(){
    return $this->_jump_points;
  }

}