#!/bin/bash

for test_file in `find . -name "*.test.php"`; do
    phpunit $test_file
    [ $? -ne 0 ] && exit
done
exit 0
