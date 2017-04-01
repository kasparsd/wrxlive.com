<?php

$throttle = ( time() - filemtime( __DIR__ . '/.throttle' ) < 60 );

if ( $throttle ) {
	return;
}

touch( __DIR__ . '/.throttle' );

shell_exec( sprintf(
	'cd %s && git reset --hard HEAD && git pull',
	escapeshellarg( dirname( __DIR__ ) )
) );
