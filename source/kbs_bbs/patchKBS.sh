#!/bin/sh
# patch  kbs_bbs scripts
# Author:wisi@tongjibbs.org
# Copyright: GNU Public License v2.0
# $Id$

#### Start of system configuration section. ####

# Directioary for KBS kbs_bbs, note: Don't use a "/" in the end
KBS_BBS_SRCDIR="/some/patch/to/kbs_bbs/patch/like/kbs_bbs"

# pathfile's name
PATCH_FILENAME="patch_tongji"

PATCH_FILEFULLNAME="$KBS_BBS_SRCDIR/$PATCH_FILENAME"
# Programs used by this script:
CD="cd"
RM="rm -f"
DIFF_PROGRAM="diff"
PATCH_PROGRAM="patch"

# Options used by Programs

# this option ignore the files in .svn and Makefile itself
DIFF_OPTION="-aur --unidirectional-new-file -x .svn -x Makefile -x $PATCH_FILENAME -x $0"
#patch it in KBS_BBS_SRCDIR
PATCH_OPTION="-p0"

#### End of system configuration section. ####
case "$1" in
  showpatch)
	$DIFF_PROGRAM $DIFF_OPTION $KBS_BBS_SRCDIR/ ./
	;;

  genpatch)
	$DIFF_PROGRAM $DIFF_OPTION $KBS_BBS_SRCDIR/ ./ > $PATCH_FILEFULLNAME
	echo "patch has been generated in $PATCH_FILEFULLNAME"
	;;

  applypatch)
	$CD $KBS_BBS_SRCDIR;$PATCH_PROGRAM $PATCH_OPTION < $PATCH_FILEFULLNAME
	echo "!!!Please DO check the patched file before compile!!!"
	;;

  clearpatch)
	$RM $PATCH_FILEFULLNAME
	;;
  *)
	echo "Usage: $0 {showpatch|genpatch|applypatch|clearpatch}"
	exit 1
esac

exit 0
