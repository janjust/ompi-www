<?
$subject_val = "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 07:41:09 2013" -->
<!-- isoreceived="20130123124109" -->
<!-- sent="Wed, 23 Jan 2013 13:41:05 +0100" -->
<!-- isosent="20130123124105" -->
<!-- name="Ada Mancuso" -->
<!-- email="mancuso.ada_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR" -->
<!-- id="CAEQVjDNm_icQgxDXOTvFYVmqEmQ0cCByDFc2DY7fq2Tj+5+vww_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E2313ABF-AB31-4910-883B-4AAB9899BDED_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR<br>
<strong>From:</strong> Ada Mancuso (<em>mancuso.ada_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-23 07:41:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21206.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>Previous message:</strong> <a href="21204.php">Alina Sklarevich: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>In reply to:</strong> <a href="21194.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21206.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>Reply:</strong> <a href="21206.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I've installed the latest snapshot taken from svn developer's trunk but I
<br>
had the same problems. This is my configuration:
<br>
<p>&nbsp;&nbsp;&nbsp;- Ubuntu 2.6.38-8 kernel
<br>
&nbsp;&nbsp;&nbsp;- Openssh_5.8p1 openssl 0.9.8o
<br>
&nbsp;&nbsp;&nbsp;- Libtool version 2.4
<br>
&nbsp;&nbsp;&nbsp;- Open mpi 1.7 rc5 and latest snapshots.
<br>
<p>Do you think my problem could be related with the operating system used or
<br>
with any parameter or configuration? I've also checked the ssh log file but
<br>
I didn't find any problem.
<br>
Thanks in advance
<br>
Ada
<br>
<p><p><p>Il giorno marted&#236; 22 gennaio 2013, Ralph Castain ha scritto:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ouch - no, you'd have to take it from the developer's trunk, either via
</span><br>
svn checkout or the nightly developer's snapshot
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2013, at 12:35 PM, Ada Mancuso &lt;mancuso.ada_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My problem is that I have to use openmpi 1.7 rc5 because I'm using the
</span><br>
Java binding mpijava... Is it present in the latest snapshot you told me?
<br>
If so where can I find it?
<br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt; Ada
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Il giorno 22/gen/2013 21:03, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; ha
</span><br>
scritto:
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems to be working fine for me with the latest 1.7 tarball (not rc5
</span><br>
- I didn't test that one). Could be there was a problem that has since been
<br>
fixed. We are getting ready to release an updated rc, so you might want to
<br>
try it (or use the latest nightly 1.7 snapshot).
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2013, at 9:57 AM, Ada Mancuso &lt;mancuso.ada_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run my mpi program using open mpi 1.7 rc5 on 4 machines
</span><br>
using the command:
<br>
<span class="quotelev2">&gt;&gt; mpirun -np4 -hostfile file a.out
</span><br>
<span class="quotelev2">&gt;&gt; but i get the following message errors:
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process whose
</span><br>
contact information is unknown in file
<br>
../../../../../ompi/orte/mca/rml/oob/rml_oob_send.c
<br>
<span class="quotelev2">&gt;&gt; attempted to send to [[21341,0],2]: tag 15
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process whose
</span><br>
contact information is unknown in file
<br>
../../../../ompi/orte/mca/grpcomm/base/grpcomm_base_xcast.c
<br>
<span class="quotelev2">&gt;&gt; The file etc/hosts is composed by ipaddress hostname, I have exchange
</span><br>
ssh keys among the machines and ssh login works without requiring
<br>
authentication password. Surprisingly if I try to run my program with at
<br>
most 2 hosts, and so the file hosts contains only two hosts, it works but
<br>
if i try to run my program with more than two hosts i have this error; mpi
<br>
works well on each machine and I also tried to run my program with
<br>
different couple of machines in order to be sure that no machine could be
<br>
the problem.
<br>
<span class="quotelev2">&gt;&gt; Can you help me please?
</span><br>
<span class="quotelev2">&gt;&gt; Ada
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21205/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21206.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>Previous message:</strong> <a href="21204.php">Alina Sklarevich: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>In reply to:</strong> <a href="21194.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21206.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>Reply:</strong> <a href="21206.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
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
