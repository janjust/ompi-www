<?
$subject_val = "Re: [OMPI devel] orte-dvm startup fails on HEAD";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 22 06:45:30 2015" -->
<!-- isoreceived="20150822104530" -->
<!-- sent="Sat, 22 Aug 2015 12:45:12 +0200" -->
<!-- isosent="20150822104512" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm startup fails on HEAD" -->
<!-- id="8E4E1A73-ED1F-40F3-9515-CC0C4A350C8F_at_rutgers.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2E874F0C-8AAA-4F00-81AC-3CFFF02066C3_at_rutgers.edu" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] orte-dvm startup fails on HEAD<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-22 06:45:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17790.php">Ralph Castain: "[OMPI devel] v1.10.0rc4"</a>
<li><strong>Previous message:</strong> <a href="17788.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (v1.10-dev-278-g45b16e4) ==="</a>
<li><strong>In reply to:</strong> <a href="17787.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm startup fails on HEAD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep, it works again, thanks!
<br>
<p><span class="quotelev1">&gt; On 22 Aug 2015, at 0:00 , Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Ralph.
</span><br>
<span class="quotelev1">&gt; The machine in question is in maintenance currently, so can't check, will get back to you as soon as I can.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 21 Aug 2015, at 16:51 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay Mark, I just pushed a fix. Sorry for the problem
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 21, 2015, at 7:39 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found the problem, Howard - has nothing to do with the Cray, but is a selection issue on the state framework.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 21, 2015, at 7:37 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I will check if i can reproduce on nersc systems.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sent from my smart phonr so no good type.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Howard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 21, 2015 7:51 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#226;&#128;&#153;ll take a look at it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 20, 2015, at 11:34 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I see the errors below on startup of orte-dvm on a Cray XE/XK hybrid.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Didn't track the commit that caused it yet, but maybe somebody has a clue from the error already.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Last known to work was on July 14. The 2.x branch works fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please let me know if this should be a ticket.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mark
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; marksant_at_nid25254:~&gt; orte-dvm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; VMURI: 2210136064.0;usock;tcp://10.128.99.109:52334
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32107] OPAL dss:unpack: got type 110 when expecting type 9
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32107] [[33724,0],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../orte/mca/odls/base/odls_base_default_fns.c at line 261
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; marksant_at_nid25254:~&gt; orte-dvm -d
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] procdir: /tmp/openmpi-sessions-45504_at_nid25254_0/33659/0/0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] jobdir: /tmp/openmpi-sessions-45504_at_nid25254_0/33659/0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] top: openmpi-sessions-45504_at_nid25254_0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] sess_dir_cleanup: job session dir does not exist
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] procdir: /tmp/openmpi-sessions-45504_at_nid25254_0/33659/0/0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] jobdir: /tmp/openmpi-sessions-45504_at_nid25254_0/33659/0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] top: openmpi-sessions-45504_at_nid25254_0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; VMURI: 2205876224.0;usock;tcp://10.128.99.109:39208
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] plm:alps: final top-level argv:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] plm:alps:     aprun -n 1 -N 1 -cc none -e PMI_NO_PREINITIALIZE=1 -e PMI_NO_FORK=1 -L 21959 orted -mca orte_debug 1 --hnp-topo-sig 4N:2S:4L3:16L2:32L1:32C:32H:x86_64 -mca ess_base_jobid 2205876224 -mca ess_base_vpid 1 -mca ess_base_num_procs 2 -mca orte_hnp_uri 2205876224.0;usock;tcp://10.128.99.109:39208
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] plm:alps: Set prefix:/u/sciteam/marksant/openmpi/installed/HEAD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] plm:alps: reset PATH: /u/sciteam/marksant/openmpi/installed/HEAD/bin:/u/sciteam/marksant/openmpi/installed/HEAD/bin:/u/sciteam/marksant/openmpi/tools/bin:/opt/cray/pmi/5.0.6-1.0000.10439.140.3.gem/bin:/opt/gcc/4.8.2/bin:/sw/xe/darshan/2.3.0/darshan-2.3.0_cle52/bin:/sw/admin/scripts:/sw/user/scripts:/sw/xe/altd/bin:/opt/moab/8.1/bin:/opt/moab/8.1/sbin:/opt/torque/5.0.2/sbin:/opt/torque/5.0.2/bin:/opt/cray/mpt/7.2.0/gni/bin:/opt/cray/craype/2.3.0/bin:/opt/cray/llm/default/bin:/opt/cray/llm/default/etc:/opt/cray/xpmem/0.1-2.0502.55507.3.2.gem/bin:/opt/cray/dmapp/7.0.1-1.0502.9501.5.211.gem/bin:/opt/cray/ugni/5.0-1.0502.9685.4.24.gem/bin:/opt/cray/udreg/2.3.2-1.0502.9275.1.25.gem/bin:/opt/cray/lustre-cray_gem_s/2.5_3.0.101_0.31.1_1.0502.8394.15.1-1.0502.19859.16.1/sbin:/opt/cray/lustre-cray_gem_s/2.5_3.0.101_0.31.1_1.0502.8394.15.1-1.0502.19859.16.1/bin:/opt/cray/alps/5.2.1-2.0502.9649.23.1.gem/sbin:/opt/cray/alps/5.2.1-2.0502.9649.23.1.gem/bin:/opt/cray/sdb/1.0-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.0502.55976.5.27.gem/bin:/opt/cray/nodestat/2.2-1.0502.53712.3.109.gem/bin:/opt/modules/3.2.10.3/bin:/u/sciteam/marksant/bin:/usr/local/bin:/usr/bin:/bin:/usr/bin/X11:/usr/X11R6/bin:/usr/games:/usr/lib/mit/bin:/usr/lib/mit/sbin:.:/usr/lib/qt3/bin:/opt/cray/bin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] plm:alps: reset LD_LIBRARY_PATH: /u/sciteam/marksant/openmpi/installed/HEAD/lib:/u/sciteam/marksant/openmpi/installed/HEAD/lib:/opt/gcc/mpc/0.8.1/lib:/opt/gcc/mpfr/2.4.2/lib:/opt/gcc/gmp/4.3.2/lib:/opt/gcc/4.8.2/snos/lib64:/sw/xe/darshan/2.3.0/darshan-2.3.0_cle52/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid21959:01177] procdir: /tmp/openmpi-sessions-45504_at_nid21959_0/33659/0/1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid21959:01177] jobdir: /tmp/openmpi-sessions-45504_at_nid21959_0/33659/0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid21959:01177] top: openmpi-sessions-45504_at_nid21959_0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid21959:01177] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid21959:01177] sess_dir_cleanup: job session dir does not exist
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid21959:01177] procdir: /tmp/openmpi-sessions-45504_at_nid21959_0/33659/0/1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid21959:01177] jobdir: /tmp/openmpi-sessions-45504_at_nid21959_0/33659/0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid21959:01177] top: openmpi-sessions-45504_at_nid21959_0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid21959:01177] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] [[33659,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_ADD_LOCAL_PROCS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] OPAL dss:unpack: got type 110 when expecting type 9
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] [[33659,0],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../orte/mca/odls/base/odls_base_default_fns.c at line 261
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] [[33659,0],0] orted:comm:add_procs failed to launch on error Pack data mismatch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] [[33659,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_EXIT_CMD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid21959:01177] [[33659,0],1]:../../../../../orte/mca/errmgr/default_orted/errmgr_default_orted.c(251) updating exit status to 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] sess_dir_finalize: proc session dir does not exist
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid25254:32172] sess_dir_cleanup: job session dir does not exist
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; marksant_at_nid25254:~&gt; [nid21959:01177] sess_dir_finalize: proc session dir does not exist
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [nid21959:01177] sess_dir_cleanup: job session dir does not exist
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exiting with status 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Application 25938733 exit codes: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Application 25938733 resources: utime ~0s, stime ~1s, Rss ~21456, inblocks ~4629, outblocks ~104
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17781.php">http://www.open-mpi.org/community/lists/devel/2015/08/17781.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17782.php">http://www.open-mpi.org/community/lists/devel/2015/08/17782.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17783.php">http://www.open-mpi.org/community/lists/devel/2015/08/17783.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17785.php">http://www.open-mpi.org/community/lists/devel/2015/08/17785.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17790.php">Ralph Castain: "[OMPI devel] v1.10.0rc4"</a>
<li><strong>Previous message:</strong> <a href="17788.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (v1.10-dev-278-g45b16e4) ==="</a>
<li><strong>In reply to:</strong> <a href="17787.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm startup fails on HEAD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
