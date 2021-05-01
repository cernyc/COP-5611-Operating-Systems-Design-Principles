#!/bin/sh
df -Ph | grep -vE '^Filesystem|tmpfs|cdrom' | awk '{ print $5,$1 }' | while read output;
do
  utilisation=90%
  echo $output
  mem=$(echo $output | awk '{print $1}')
  if [ ${mem%?} -ge ${utilisation%?} ]; then
  python3 sendNotification.py
  fi
done
