<?
$subject_val = "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 15 13:43:39 2013" -->
<!-- isoreceived="20130915174339" -->
<!-- sent="Sun, 15 Sep 2013 19:43:38 +0200" -->
<!-- isosent="20130915174338" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2" -->
<!-- id="CAHCaCkJDctQXE1hG0v+RoL-4K0eD50bUTBUvwRqaaLJvPpPtzg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="16A7ECFE-884C-48BC-8123-002F24A3B3B9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2<br>
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-15 13:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22662.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22660.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22660.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22662.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22662.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, ompi_info does not crash.
<br>
Le 15 sept. 2013 18:05, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; a &#233;crit :
<br>
<p><span class="quotelev1">&gt; No - out of curiosity, does ompi_info work? I'm wondering if this is
</span><br>
<span class="quotelev1">&gt; strictly an orte-info problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 15, 2013, at 10:03 AM, Matthieu Brucher &lt;matthieu.brucher_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just --with-lsf. Perhaps because then it must be launched through lsf?
</span><br>
<span class="quotelev1">&gt; Le 15 sept. 2013 18:02, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not entirely sure - I don't see anything that would cause that
</span><br>
<span class="quotelev2">&gt;&gt; problem in that location. How did you configure this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 12, 2013, at 3:17 AM, Matthieu Brucher &lt;matthieu.brucher_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I compiled OpenMPI on a RHEL6 box with LSF support, but when I run
</span><br>
<span class="quotelev3">&gt;&gt; &gt; sonthing, it crashes. Also orte-info crashes:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 Package: Open MPI mbrucher_at_[hidden] Distribution
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                Open RTE: 1.7.2
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  Open RTE repo revision: r28673
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Open RTE release date: Jun 26, 2013
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                    OPAL: 1.7.2
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      OPAL repo revision: r28673
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       OPAL release date: Jun 26, 2013
</span><br>
<span class="quotelev3">&gt;&gt; &gt;            Ident string: 1.7.2
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                  Prefix: /xxx/mbrucher/openmpi
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt; &gt;          Configure host: xxx.xxx.com
</span><br>
<span class="quotelev3">&gt;&gt; &gt;           Configured by: mbrucher
</span><br>
<span class="quotelev3">&gt;&gt; &gt;           Configured on: Thu Sep 12 10:22:06 BST 2013
</span><br>
<span class="quotelev3">&gt;&gt; &gt;          Configure host: xxx.xxx.com
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                Built by: mbrucher
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                Built on: Thu Sep 12 10:24:59 BST 2013
</span><br>
<span class="quotelev3">&gt;&gt; &gt;              Built host: xxx.xxx.com
</span><br>
<span class="quotelev3">&gt;&gt; &gt;              C compiler: gcc
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  C compiler family name: GNU
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      C compiler version: 4.4.6
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         libltdl support: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Heterogeneous support: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; orterun default --prefix: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     Symbol vis. support: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [abgengcluster:45509] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [abgengcluster:45509] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [abgengcluster:45509] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [abgengcluster:45509] Failing at address: 0xf8
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [abgengcluster:45509] [ 0] /lib64/libpthread.so.0() [0x3ffc00f4a0]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [abgengcluster:45509] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /xxx/mbrucher/openmpi/lib/libopen-pal.so.5(opal_libevent2019_event_priority_set+0x6f)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [0x2aae84a736ef]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [abgengcluster:45509] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /xxx/mbrucher/openmpi/lib/libopen-rte.so.5(orte_iof_base_open+0x31c)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [0x2aae847edfbc]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [abgengcluster:45509] [ 3] orte-info(orte_info_open_components+0x71f)
</span><br>
<span class="quotelev2">&gt;&gt; [0x406b8f]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [abgengcluster:45509] [ 4] orte-info(main+0x93d) [0x40450d]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [abgengcluster:45509] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [0x3ffb81ecdd]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [abgengcluster:45509] [ 6] orte-info() [0x403b09]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [abgengcluster:45509] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is there something that I missed?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Matthieu
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22661/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22662.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22660.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22660.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22662.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22662.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
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
