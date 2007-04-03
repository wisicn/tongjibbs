#!/bin/sh
( cd /home/bbskbs/tmp; wget -q http://top.cn-bbs.org/day )
if [ -f /home/bbskbs/tmp/day ]; then
mv -f /home/bbskbs/tmp/day /home/bbskbs/0Announce/bbslists/newsday
fi
