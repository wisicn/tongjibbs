/etc/init.d/apache2 stop
#/etc/init.d/apache-ssl stop
#killall -9 miscd
#killall -9 bbslogd
killall -9 bbsd
killall -9 newpop3d
#killall -9 webmsgd
killall -9 sshbbsd
/home/bbskbs/bin/miscd flush
killall -9 miscd
killall -9 bbslogd
ipcs -m | awk '$0~/bbs/ {system(sprintf("ipcrm shm %s",$2));}'

