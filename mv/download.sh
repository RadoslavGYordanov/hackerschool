#!/bin/bash

if wget http://localhost/rado -O /home/rado/TestMV/rado.tmp
then
	mv rado.tmp rado
else
	echo "Failed Downloading!"
fi
