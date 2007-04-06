# Makefile for kbs_bbs module
# Author:wisi@tongjibbs.org
# Copyright: GNU Public License v2.0
# $Id$

#### Start of system configuration section. ####

# Directioary for KBS kbs_bbs, note: Don't use a "/" in the end
KBS_BBS_SRCDIR = /some/path/to/kbs_bbs/path/like/kbs_bbs

# pathfile's name
PATCH_FILENAME = patch_tongji

PATCH_FILEFULLNAME = $(KBS_BBS_SRCDIR)/$(PATCH_FILENAME)
# Programs used by "make":
CD =cd 
RM = rm -f
DIFF_PROGRAM = diff
PATCH_PROGRAM = patch

# Options used by Programs

# this option ignore the files in .svn and Makefile itself
DIFF_OPTION = -aur --unidirectional-new-file -x '.svn' -x 'Makefile*' -x '$(PATCH_FILENAME)'
#patch it in KBS_BBS_SRCDIR
PATCH_OPTION = -p0

#### End of system configuration section. ####

.PHONY: all showdiff patchfile genpatch install applypatch clean

all: $(PATCH_FILEFULLNAME)

$(PATCH_FILEFULLNAME):genpatch

showdiff: 
	-$(DIFF_PROGRAM) $(DIFF_OPTION) $(KBS_BBS_SRCDIR)/ ./
	
patchfile: genpatch

genpatch:
	-$(DIFF_PROGRAM) $(DIFF_OPTION) $(KBS_BBS_SRCDIR)/ ./ > $(PATCH_FILEFULLNAME)
	
install: applypatch

applypatch: $(PATCH_FILEFULLNAME)
	$(CD) $(KBS_BBS_SRCDIR);$(PATCH_PROGRAM) $(PATCH_OPTION) < $(PATCH_FILEFULLNAME)

clean:
	-$(RM) $(PATCH_FILEFULLNAME)
