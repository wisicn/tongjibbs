#!/bin/sh
mount tmpfs /home/bbskbs/cache -t tmpfs -o size=256M
BBSHOME=/home/bbskbs
cd $BBSHOME
mv $BBSHOME/tmp $BBSHOME/.bbs.tmp
rm -rf $BBSHOME/.bbs.tmp&
mkdir $BBSHOME/tmp
mkdir $BBSHOME/tmp/forward
mkdir $BBSHOME/tmp/bbs-gsend
mkdir $BBSHOME/tmp/email
mkdir $BBSHOME/tmp/clip
mkdir $BBSHOME/tmp/bbs-internet-gw
mkdir $BBSHOME/tmp/Xpost
chown -R bbs.bbs $BBSHOME/tmp
#init...
$BBSHOME/bin/miscd daemon
#$BBSHOME/bin/webmsgd
$BBSHOME/bin/bbslogd

sleep 3
$BBSHOME/bin/bbsd -p 23
$BBSHOME/bin/bbsd -p 2323
$BBSHOME/bin/sshbbsd -p 22
$BBSHOME/bin/newpop3d
if [ -f $BBSHOME/innd/innbbsd ]; then
	su bbs -c $BBSHOME/innd/innbbsd &> /dev/null
fi
