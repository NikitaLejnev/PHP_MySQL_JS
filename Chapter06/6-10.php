<?php
$products = array(
  'paper' => array(
    'copier' => "Copier & Multipurpose",
    'inkjet' => "Inkjet Printer",
    'laser' => "Laser Printer",
    'photo' => "Copier & Multipurpose"
  ),
  'pens' => array(
    'ball' => "Ball Point",
    'hilite' => "Highlighters",
    'marker' => "Markers"
  ),
  'misc' => array(
    'tape' => "Sticky Tape",
    'glue' => "Adhesives",
    'clips' => "Paperclips"
  )
);

echo "<pre>";

foreach ($products as $section => $items) {
  foreach ($items as $key => $value) {
    echo "$section:\t$key\t($value)<br>";
  }
}

echo "<pre>";
