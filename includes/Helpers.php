<?php

/**
  * Appends a trailing slash.
  *
  * Will remove trailing forward and backslashes if it exists already before adding
  * a trailing forward slash. This prevents double slashing a string or path.
  *
  * The primary use of this is for paths and thus should be used for paths. It is
  * not restricted to paths and offers no specific path support.
  *
  * @param string $string What to add the trailing slash to.
  * @return string String with trailing slash added.
  */
function trailingslashit( $string ) {
        return untrailingslashit( $string ) . '/';
}

/**
  * Removes trailing forward slashes and backslashes if they exist.
  *
  * The primary use of this is for paths and thus should be used for paths. It is
  * not restricted to paths and offers no specific path support.
  *
  * @param string $string What to remove the trailing slashes from.
  * @return string String without the trailing slashes.
  */
function untrailingslashit( $string ) {
        return rtrim( $string, '/\\' );
}
