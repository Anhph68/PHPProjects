<?php
print 'I have to go the store';
print '\nI\'ve to go the store';
print "\nWould you pay $1.75 for 8 ounces of tap water?\n";

/*
 * Heredoc -specified strings recognize all the interpolations and escapes of double-quoted strings, but they don’t require double quotes to be escaped. Heredocs start with <<< and a token. That token (with no leading or trailing whitespace), followed by semicolon a to end the statement (if necessary), ends the heredoc.
 */
print <<< END
It's funny when signs say thins like:
Original "Root" Beer
"Free" Gift
Shoes cleaned while "you" wait
or have other misquoted words.
END;
