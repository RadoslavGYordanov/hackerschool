#!/bin/bash

while true;
do
	if [ -f /home/rado/TestMV/rado ]
	then
		mv /home/rado/TestMV/rado /home/rado/TestMV/rado1
		echo "Renamed successfully"
	else
		echo "File doesn't exist"
	fi
	sleep 5
done
