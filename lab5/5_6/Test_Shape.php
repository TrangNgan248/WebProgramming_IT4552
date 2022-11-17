<?php

include "Rectangle.php";
include "Triangle.php";
include "Circle.php";
include "Color.php";
include_once "Shape.php";
    // function my_autoloader($class) {
    //     include 'classes/' . $class . '.class.php';
    // }
    // spl_autoload_register('my_autoloader');

    $myCollection = array();

    $r = new Rectangle;
    $r->width = 5;
    $r->height = 7;
    $myCollection[] = $r;
    unset($r);

    $t = new Triangle;
    $t->base = 4;
    $t->height = 5;
    $myCollection[] = $t;
    unset($t);

    $c = new Circle;
    $c->radius = 3;
    $myCollection[] = $c;
    unset($c);

    $c = new Color;
    $c->name = "blue";
    $myCollection[] = $c;
    unset($c);

    foreach($myCollection as $s) {
        if($s instanceof Shape)
        {
            print("Area: " . $s->getArea() . "<br>\n");
        }
        if ($s instanceof Polygon)
        {
            print("Sides: " . $s->getNumberOfSides() . "<br>\n");
        }
        if($s instanceof Color)
        {
            print("Color: $s->name<br>\n");
        }
        print ("<br>\n");
    }
?>