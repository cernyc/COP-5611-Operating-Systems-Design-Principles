#!/bin/sh

while true; do
  date;
  sleep 60;
  ping -c1 -W1 10.42.44.33 && : || {
    python3 /Users/chakibcerny/Desktop/notify.py down
    sleep 120;
    ping -c1 -W1 10.42.44.33 && python3 /Users/chakibcerny/Desktop/notify.py up || :
  }
done
