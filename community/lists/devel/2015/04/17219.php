<?
$subject_val = "Re: [OMPI devel] segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 11:04:53 2015" -->
<!-- isoreceived="20150414150453" -->
<!-- sent="Tue, 14 Apr 2015 16:04:52 +0100" -->
<!-- isosent="20150414150452" -->
<!-- name="Cyrille DIBAMOU MBEUYO" -->
<!-- email="cdibamou_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segmentation fault" -->
<!-- id="CAD1qWRR8TvdMC_jK_1jM5bQmnAAYYS9yspdmfuLVwe56JN4qdg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FC3A80BC-D6D5-45C5-95B3-374F0AA7606D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] segmentation fault<br>
<strong>From:</strong> Cyrille DIBAMOU MBEUYO (<em>cdibamou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-14 11:04:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17220.php">Ralph Castain: "[OMPI devel] Common symbols warning"</a>
<li><strong>Previous message:</strong> <a href="17218.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="17218.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17221.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="17221.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your reply.
<br>
<p>This error appear on the master node, where i launch the &quot;ompi-restart&quot;
<br>
command.
<br>
<p>&nbsp;It is on the 1.6.5 serie
<br>
<p>2015-04-14 15:21 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Is this on the master? Or on the 1.8 series?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2015, at 2:12 AM, Cyrille DIBAMOU MBEUYO &lt;cdibamou_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Good morning,*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my experiences, i have shared a folder in my cluster of 4 computers.
</span><br>
<span class="quotelev1">&gt; I then run a mpi programm (which calculate the nomber pi) on 2 computers,
</span><br>
<span class="quotelev1">&gt; and i checkpoint it with the ompi-checkpoint command.
</span><br>
<span class="quotelev1">&gt; For the restart, i modify the nodes file for change one computer name so
</span><br>
<span class="quotelev1">&gt; that the two new computer node are different than the two older for the
</span><br>
<span class="quotelev1">&gt; computing.
</span><br>
<span class="quotelev1">&gt; With the ompi-restart command (and the nodes file), when i restart the
</span><br>
<span class="quotelev1">&gt; checkpointed application, i got this error message : *mpirun noticed that
</span><br>
<span class="quotelev1">&gt; process rank 1 with PID 1619 on node oartwo exited on signal 11
</span><br>
<span class="quotelev1">&gt; (segmentation fault).*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then want to kno the problem and how to solve it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Thank you*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Hope to read you.*
</span><br>
<span class="quotelev1">&gt; *Best regards.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; DIBAMOU MBEUYO Cyrille
</span><br>
<span class="quotelev1">&gt; Computer Engineer, M.Sc.
</span><br>
<span class="quotelev1">&gt; Ph.D. Student in Computer Science
</span><br>
<span class="quotelev1">&gt; *Mobile* : (+237) 696 608 826 / 674 979 502
</span><br>
<span class="quotelev1">&gt; The University Of Ngaoundere,  CAMEROUN
</span><br>
<span class="quotelev1">&gt; *Other Email *: cdibamou_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17217.php">http://www.open-mpi.org/community/lists/devel/2015/04/17217.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17218.php">http://www.open-mpi.org/community/lists/devel/2015/04/17218.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
DIBAMOU MBEUYO Cyrille
Computer Engineer, M.Sc.
Ph.D. Student in Computer Science
*Mobile* : (+237) 696 608 826 / 674 979 502
The University Of Ngaoundere,  CAMEROUN
*Other Email *: cdibamou_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17220.php">Ralph Castain: "[OMPI devel] Common symbols warning"</a>
<li><strong>Previous message:</strong> <a href="17218.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="17218.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17221.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="17221.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
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
