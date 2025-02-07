<?
$subject_val = "Re: [OMPI users] mpi job is blocked";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 04:30:13 2012" -->
<!-- isoreceived="20120925083013" -->
<!-- sent="Tue, 25 Sep 2012 16:30:01 +0800 (CST)" -->
<!-- isosent="20120925083001" -->
<!-- name="Richard" -->
<!-- email="codemonkee_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi job is blocked" -->
<!-- id="79442e36.3ae1.139fc8c11bf.Coremail.codemonkee_at_163.com" -->
<!-- charset="GBK" -->
<!-- inreplyto="[OMPI users] mpi job is blocked" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi job is blocked<br>
<strong>From:</strong> Richard (<em>codemonkee_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 04:30:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20295.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Previous message:</strong> <a href="20293.php">Jeff Squyres: "Re: [OMPI users] openmpi failed the hello world test"</a>
<li><strong>Maybe in reply to:</strong> <a href="20289.php">Richard: "[OMPI users] mpi job is blocked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20295.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Reply:</strong> <a href="20295.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody,thanks for your suggestion and you are right. if I use the ring example, the same happened.I have put a printf statement, it seems that all the three processed have reached the line calling &quot;PMPI_Allreduce&quot;, any further suggestion?
<br>
<p>Thanks.
<br>
Richard
<br>
<p><p><p><p><p><p>Message: 12
<br>
Date: Tue, 25 Sep 2012 09:43:09 +0200
<br>
From: jody &lt;jody.xha_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] mpi job is blocked
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;CAKbzMGfL0tXDYU82HksoHrwh34CbpwbKmrKwC5DcDBT7A7wTxw_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=ISO-8859-1
<br>
<p>Hi Richard
<br>
<p>When a collective call hangs, this usually means that one (or more)
<br>
processes did not reach this command.
<br>
Are you sure that all processes reach the allreduce statement?
<br>
<p>If something like this happens to me, i insert print statements just
<br>
before the MPI-call so i can see which processes made
<br>
it to this point and which ones did not.
<br>
<p>Hope this helps a bit
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Tue, Sep 25, 2012 at 8:20 AM, Richard &lt;codemonkee_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have 3 computers with the same Linux system. I have setup the mpi cluster
</span><br>
<span class="quotelev1">&gt; based on ssh connection.
</span><br>
<span class="quotelev1">&gt; I have tested a very simple mpi program, it works on the cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To make my story clear, I name the three computer as A, B and C.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) If I run the job with 2 processes on A and B, it works.
</span><br>
<span class="quotelev1">&gt; 2) if I run the job with 3 processes on A, B and C, it is blocked.
</span><br>
<span class="quotelev1">&gt; 3) if I run the job with 2 processes on A and C, it works.
</span><br>
<span class="quotelev1">&gt; 4) If I run the job with all the 3 processes on A, it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using gdb I found the line at which it is blocked, it is here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #7  0x00002ad8a283043e in PMPI_Allreduce (sendbuf=0x7fff09c7c578,
</span><br>
<span class="quotelev1">&gt; recvbuf=0x7fff09c7c570, count=1, datatype=0x627180, op=0x627780,
</span><br>
<span class="quotelev1">&gt; comm=0x627380)
</span><br>
<span class="quotelev1">&gt;     at pallreduce.c:105
</span><br>
<span class="quotelev1">&gt; 105         err = comm-&gt;c_coll.coll_allreduce(sendbuf, recvbuf, count,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that there is a communication problem between some computers. But
</span><br>
<span class="quotelev1">&gt; the above series of test cannot tell me what
</span><br>
<span class="quotelev1">&gt; exactly it is. Can anyone help me? thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20295.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Previous message:</strong> <a href="20293.php">Jeff Squyres: "Re: [OMPI users] openmpi failed the hello world test"</a>
<li><strong>Maybe in reply to:</strong> <a href="20289.php">Richard: "[OMPI users] mpi job is blocked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20295.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Reply:</strong> <a href="20295.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
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
