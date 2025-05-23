<?
$subject_val = "Re: [OMPI users] loading processes per node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 25 13:17:23 2016" -->
<!-- isoreceived="20160325171723" -->
<!-- sent="Fri, 25 Mar 2016 13:17:22 -0400" -->
<!-- isosent="20160325171722" -->
<!-- name="Ronald Cohen" -->
<!-- email="recohen3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] loading processes per node" -->
<!-- id="CAEcVHtMmrZAGw+SdV4Sk1u8O_iQZ6kHDwZZussFzR59r5hTkCQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6DDD8481-F01E-4278-B905-8E489A968C4C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] loading processes per node<br>
<strong>From:</strong> Ronald Cohen (<em>recohen3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-25 13:17:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28835.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28833.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28833.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28835.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Reply:</strong> <a href="28835.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Reply:</strong> <a href="28836.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually there was the same number of procs per node in each case. I
<br>
verified this by logging into the nodes while they were running--in
<br>
both cases 4 per node .
<br>
<p>Ron
<br>
<p><pre>
---
Ron Cohen
recohen3_at_[hidden]
skypename: ronaldcohen
twitter: @recohen3
On Fri, Mar 25, 2016 at 1:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; On Mar 25, 2016, at 9:59 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt; It is very strange but my program runs slower with any of these
&gt;&gt; choices than if IO simply use:
&gt;&gt;
&gt;&gt; mpirun  -n 16
&gt;&gt; with
&gt;&gt; #PBS -l nodes=n013.cluster.com:ppn=4+n014.cluster.com:ppn=4+n015.cluster.com:ppn=4+n016.cluster.com:ppn=4
&gt;&gt; for example.
&gt;
&gt; This command will tightly pack as many procs as possible on a node - note that we may well not see the PBS directives regarding number of ppn. Add &#226;&#128;&#148;display-allocation and let&#226;&#128;&#153;s see how many slots we think were assigned on each node
&gt;
&gt;&gt;
&gt;&gt; The timing for the latter is 165 seconds, and for
&gt;&gt; #PBS -l nodes=4:ppn=16,pmem=1gb
&gt;&gt; mpirun  --map-by ppr:4:node -n 16
&gt;&gt; it is 368 seconds.
&gt;
&gt; It will typically be faster if you pack more procs/node as they can use shared memory for communication.
&gt;
&gt;&gt;
&gt;&gt; Ron
&gt;&gt;
&gt;&gt; ---
&gt;&gt; Ron Cohen
&gt;&gt; recohen3_at_[hidden]
&gt;&gt; skypename: ronaldcohen
&gt;&gt; twitter: @recohen3
&gt;&gt;
&gt;&gt;
&gt;&gt; On Fri, Mar 25, 2016 at 12:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Mar 25, 2016, at 9:40 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Thank you! I will try it!
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; What would
&gt;&gt;&gt;&gt; -cpus-per-proc  4 -n 16
&gt;&gt;&gt;&gt; do?
&gt;&gt;&gt;
&gt;&gt;&gt; This would bind each process to 4 cores, filling each node with procs until the cores on that node were exhausted, to a total of 16 processes within the allocation.
&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Ron
&gt;&gt;&gt;&gt; ---
&gt;&gt;&gt;&gt; Ron Cohen
&gt;&gt;&gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt;&gt; twitter: @recohen3
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Fri, Mar 25, 2016 at 12:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt; Add -rank-by node to your cmd line. You&#226;&#128;&#153;ll still get 4 procs/node, but they will be ranked by node instead of consecutively within a node.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; On Mar 25, 2016, at 9:30 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; I am using
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; mpirun  --map-by ppr:4:node -n 16
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; and this loads the processes in round robin fashion. This seems to be
&gt;&gt;&gt;&gt;&gt;&gt; twice as slow for my code as loading them node by node, 4 processes
&gt;&gt;&gt;&gt;&gt;&gt; per node.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; How can I not load them round robin, but node by node?
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Ron
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; ---
&gt;&gt;&gt;&gt;&gt;&gt; Ron Cohen
&gt;&gt;&gt;&gt;&gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt;&gt;&gt;&gt; twitter: @recohen3
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; ---
&gt;&gt;&gt;&gt;&gt;&gt; Ronald Cohen
&gt;&gt;&gt;&gt;&gt;&gt; Geophysical Laboratory
&gt;&gt;&gt;&gt;&gt;&gt; Carnegie Institution
&gt;&gt;&gt;&gt;&gt;&gt; 5251 Broad Branch Rd., N.W.
&gt;&gt;&gt;&gt;&gt;&gt; Washington, D.C. 20015
&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28828.php">http://www.open-mpi.org/community/lists/users/2016/03/28828.php</a>
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28829.php">http://www.open-mpi.org/community/lists/users/2016/03/28829.php</a>
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28830.php">http://www.open-mpi.org/community/lists/users/2016/03/28830.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28831.php">http://www.open-mpi.org/community/lists/users/2016/03/28831.php</a>
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28832.php">http://www.open-mpi.org/community/lists/users/2016/03/28832.php</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28833.php">http://www.open-mpi.org/community/lists/users/2016/03/28833.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28835.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28833.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28833.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28835.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Reply:</strong> <a href="28835.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Reply:</strong> <a href="28836.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
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
