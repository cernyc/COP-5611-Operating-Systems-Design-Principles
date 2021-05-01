#!/bin/sh

find /Users/chakibcerny/Desktop/cloud/Backup -type f -mtime +30 -delete
find /Users/chakibcerny/Desktop/cloud/toUpload -type f -mtime +15 -delete
