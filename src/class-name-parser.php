<?php

function class_name_parser( $classes, $additional_classes = "" ) {
	if ( ! is_array( $classes ) || empty( $classes ) ) {
		return "";
	}

	$filtered_classes = array();

	// array is in this form: array('prvni trida', 'druha trida', ...).
	if ( isset( $classes[0] ) ) {
		$filtered_classes = $classes;
	} else { // array is in this form: array('first class' => false, 'second class' => true) -> only "second class" string will return
		foreach ( $classes as $class_key => $class_condition ) {
			if ( $class_condition ) {
				$filtered_classes[] = $class_key;
			}
		}
	}

	$merged_classes = implode( ' ', $filtered_classes );

	if ( $additional_classes === "" ) {
		return $merged_classes;
	} else {
		return $merged_classes . " " . $additional_classes;
	}
}