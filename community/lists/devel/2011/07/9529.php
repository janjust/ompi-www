<?
$subject_val = "Re: [OMPI devel] Libevent visibility problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 10:51:50 2011" -->
<!-- isoreceived="20110714145150" -->
<!-- sent="Thu, 14 Jul 2011 14:51:22 +0000" -->
<!-- isosent="20110714145122" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Libevent visibility problem" -->
<!-- id="CA445E80.5F54%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="767E119E-7309-4697-A99D-DB61F1073894_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Libevent visibility problem<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 10:51:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9530.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903"</a>
<li><strong>Previous message:</strong> <a href="9528.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>In reply to:</strong> <a href="9518.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks good, thanks!
<br>
<p>Brian
<br>
<p>On 7/14/11 1:12 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Should be fixed in r24902 - let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jul 12, 2011, at 4:30 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/12/11 4:21 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 12, 2011, at 12:29 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 7/11/11 4:31 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 11, 2011, at 2:51 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When libevent was made its own component last fall, it appears that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; function renames and visibility  settings were lost.  This is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;proving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rather problematic for a project I'm trying to get running with the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; which uses libev (which provides a libevent compatibility layer).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;It
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; works fine with Open MPI 1.4 and 1.5, which rename the libevent
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; functions
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in rename.h, but causes symbol clashes for the trunk.  This seems
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; like a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rather glaring oversight, especially since there was a bunch of work
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; done
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to remove the visibility flags from the libevent component.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; At one point, someone was running a symbol checker to make sure
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;things
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; like this didn't happen; has that been killed off?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can whomever is responsible for the new libevent please fix this?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I guess that would mostly be me - my penalty for doing the update.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you tell me which symbols are clashing? We honestly thought we had
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all worked out, but I don't know of any tool for checking it other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;than
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the basic ones.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It actually looks like all the event symbols are public in the trunk
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (1.4/1.5 are fine).  Most of the symbols will have to be public, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; were
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; renamed (from event_add to opal_event_add, for example) in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;previous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; releases.  That seems to be the missing piece.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see the problem - I'll try to fix it shortly. Might take me a few
</span><br>
<span class="quotelev3">&gt;&gt;&gt;days
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as I'm in the middle of some other stuff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry about that - we thought we had it, but missed. :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No problem, I figured out a temporary work-around on my end, so I'm not
</span><br>
<span class="quotelev2">&gt;&gt;in
</span><br>
<span class="quotelev2">&gt;&gt; a huge rush.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;  Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9530.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903"</a>
<li><strong>Previous message:</strong> <a href="9528.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>In reply to:</strong> <a href="9518.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
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
