<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 17:23:59 2008" -->
<!-- isoreceived="20080609212359" -->
<!-- sent="Mon, 09 Jun 2008 15:23:50 -0600" -->
<!-- isosent="20080609212350" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625" -->
<!-- id="C472FB86.DC46%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C472F84C.DC43%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-09 17:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4112.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<li><strong>Previous message:</strong> <a href="4110.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<li><strong>In reply to:</strong> <a href="4110.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4112.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<li><strong>Reply:</strong> <a href="4112.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Visibility issue - fix coming in a minute...
<br>
<p><p>On 6/9/08 3:10 PM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Interesting - it compiles for me under three different environments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me check - perhaps something isn't getting committed properly
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 6/9/08 3:07 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This commit looks like it does not compile.
</span><br>
<span class="quotelev2">&gt;&gt; orterun.o: In function `orterun':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../trunk/orte/tools/orterun/orterun.c:525: undefined
</span><br>
<span class="quotelev2">&gt;&gt; reference to `orte_totalview_init_before_spawn'
</span><br>
<span class="quotelev2">&gt;&gt; orterun.o: In function `job_completed':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../trunk/orte/tools/orterun/orterun.c:603: undefined
</span><br>
<span class="quotelev2">&gt;&gt; reference to `orte_totalview_finalize'
</span><br>
<span class="quotelev2">&gt;&gt; orterun.o: In function `parse_globals':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../trunk/orte/tools/orterun/orterun.c:1106: undefined
</span><br>
<span class="quotelev2">&gt;&gt; reference to `orte_run_debugger'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 9 juin 08 &#224; 16:34, rhc_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: rhc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2008-06-09 16:34:14 EDT (Mon, 09 Jun 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 18625
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18625">https://svn.open-mpi.org/trac/ompi/changeset/18625</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Refs #1255
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This commit repairs the debugger initialization procedure. I am not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; closing the ticket, however, pending Jeff's review of how it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interfaces to the ompi_debugger code he implemented. There were
</span><br>
<span class="quotelev3">&gt;&gt;&gt; duplicate symbols being created in that code, but not used anywhere.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I replaced them with the ORTE-created symbols instead. However,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since they aren't used anywhere, I have no way of checking to ensure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't break something.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the ticket can be checked by Jeff when he returns from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vacation... :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/util/totalview.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/util/totalview.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Removed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/tools/orterun/totalview.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/tools/orterun/totalview.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ompi/debuggers/ompi_debuggers.c             |    13 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +-----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/plm/base/plm_base_launch_support.c |    14 ++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +---------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/tools/orterun/Makefile.am              |     5 ++---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/tools/orterun/orterun.c                |     7 +++++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/util/Makefile.am                       |     6 ++++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/util/show_help.h                       |     4 ++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   6 files changed, 20 insertions(+), 29 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Diff not shown due to size (41811 bytes).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn diff -r 18624:18625 --no-diff-deleted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4112.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<li><strong>Previous message:</strong> <a href="4110.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<li><strong>In reply to:</strong> <a href="4110.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4112.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<li><strong>Reply:</strong> <a href="4112.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
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
