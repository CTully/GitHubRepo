<?php
defined('IN_LIBRARY') or exit;
 class Processors{
 
 protected $_value ='';
 
 public funtion __construct()
 {
 
 }
 
 
 public function  validValueCheck()
 {
	if( === 'null')
	{
 return false
	}
	return true;
 
 }
 
 public function trim($_value)
 {
 return trim($_value);
 }
 
 public function rTrim($_value)
 {
 return rtrim($_value);
 }
 
 public function stripTags($_htmlTag)
 {
  strip_tags($_htmlTag);
 }
 
 
 
 }