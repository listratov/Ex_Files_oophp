<?php

require 'class.Address.inc';

echo '<h2>Instantiating Address</h2>';
$address = new Address;

echo '<h2>Empty Address</h2>';
echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';

echo '<h2>Setting properties...</h2>';
$address->street_address_1 = '555 Fake Street';
$address->city_name = 'Townsville';
$address->subdivision_name = 'State';
$address->postal_code = '12345';
$address->country_name = 'United States of America';
echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';

echo '<h2>Displaying address...</h2>';
echo $address->display();

echo '<h2>Testing magic __get and __set</h2>';
unset($address->postal_code);
echo $address->display();

echo '<h2>Testing Address __construct with an array</h2>';
$address_2 = new Address(array(
  'street_address_1' => '123 Phony Ave',
  'city_name' => 'Villageland',
  'subdivision_name' => 'Region',
  'postal_code' => '67890',
  'country_name' => 'Canada',
));
echo $address_2->display();

echo '<h2>Address __toString</h2>';
echo $address_2;

echo '<h2>Displaying address types...</h2>';
echo '<tt><pre>' . var_export($address->valid_address_types, TRUE) . '</pre></tt>';