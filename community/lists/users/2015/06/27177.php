<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 17:54:53 2015" -->
<!-- isoreceived="20150623215453" -->
<!-- sent="Tue, 23 Jun 2015 14:54:46 -0700" -->
<!-- isosent="20150623215446" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash" -->
<!-- id="CAMD57ofxruDKQ1gSx8h3idxSEVDXg_bu2T3EaX1uqxU=jrKy1Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EDEDFC_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-23 17:54:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27178.php">Gilles Gouaillardet: "Re: [OMPI users] Problem getting job to start"</a>
<li><strong>Previous message:</strong> <a href="27176.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27176.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27179.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Reply:</strong> <a href="27179.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You shouldn't need any special flags for mpicc or mpirun to replicate the
<br>
problem. This will just let us see the line numbers associated with the
<br>
crash so we can narrow down the problem. Once we get that, we may need to
<br>
rerun with specific params to narrow it down further.
<br>
<p>BTW: when you get the backtrace, could you check the other threads as well?
<br>
There are several threads running underneath now, and it would help to get
<br>
the backtrace for each of them just to ensure there isn't something funny
<br>
going on.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Tue, Jun 23, 2015 at 12:19 PM, Lane, William &lt;William.Lane_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've had OpenMPI 1.8.6 installed on our cluster w/the --enable-debug
</span><br>
<span class="quotelev1">&gt; option. Here's what I think are the relevant flags returned from ompi_info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   openMPI 1.8.6 build info
</span><br>
<span class="quotelev1">&gt;   Fort MPI_SIZEOF: no
</span><br>
<span class="quotelev1">&gt;   C profiling: yes
</span><br>
<span class="quotelev1">&gt;   C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;   Fort mpif.h profiling: yes
</span><br>
<span class="quotelev1">&gt;   Fort use mpi profiling: yes
</span><br>
<span class="quotelev1">&gt;   Fort use mpi_f08 prof: no
</span><br>
<span class="quotelev1">&gt;   C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;  Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes, OMPI
</span><br>
<span class="quotelev1">&gt; progress: no, ORTE progress: yes, Event lib: yes)
</span><br>
<span class="quotelev1">&gt;   Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: yes
</span><br>
<span class="quotelev1">&gt;   MPI interface warnings: yes
</span><br>
<span class="quotelev1">&gt;   MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt;   Memory profiling support: no
</span><br>
<span class="quotelev1">&gt;   Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;   dl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;   mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I need to compile my OpenMPI C test code w/any special
</span><br>
<span class="quotelev1">&gt; switches passed to mpicc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any special switches should I use with mpirun to run my job?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help w/these issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Bill L.
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain [
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Friday, June 19, 2015 6:40 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots =
</span><br>
<span class="quotelev1">&gt; crash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Good point
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  William: can you rebuild OMPI with &#226;&#128;&#148;enable-debug and run this again so
</span><br>
<span class="quotelev1">&gt; we can see where the code is breaking?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Jun 19, 2015, at 6:11 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I got that, but I cannot read the stack trace (optimized build)
</span><br>
<span class="quotelev1">&gt; my best bet is to reproduce the issue, and then find how and why
</span><br>
<span class="quotelev1">&gt; ompi_free_list_t is segfault'ing.
</span><br>
<span class="quotelev1">&gt; that's why I requested info about the environment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  iirc, ompi_free_list_t are different between master and v1.8, so an
</span><br>
<span class="quotelev1">&gt; incorrect back port could be the root cause.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, June 19, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I was fooled too, but that isn&#226;&#128;&#153;t the issue. The problem is that
</span><br>
<span class="quotelev2">&gt;&gt; ompi_free_list is segfaulting:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    [csclprd3-0-13:30901] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] Failing at address: 0x7ff404351d80
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libpthread.so.0(+0xf500)[0x7ff41453c500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xd4fea)[0x7ff41481efea]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x219)[0x7ff41479f009]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7ff41479f110]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7ff41480f68e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7ff4148e3715]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7ff4147b9ad6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7ff4147d8c60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7ff4141b9cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Jun 19, 2015, at 5:52 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden] &lt;<a href="http://UrlBlockedError.aspx">http://UrlBlockedError.aspx</a>&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lane,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  could you please describe your configuration ?
</span><br>
<span class="quotelev2">&gt;&gt;  how many sockets per node ?
</span><br>
<span class="quotelev2">&gt;&gt;  how many cores per socket ?
</span><br>
<span class="quotelev2">&gt;&gt;  how many threads per core ?
</span><br>
<span class="quotelev2">&gt;&gt;  what is the minimum number of nodes needed to reproduce the issue ?
</span><br>
<span class="quotelev2">&gt;&gt;  do all the nodes have the same configuration ?
</span><br>
<span class="quotelev2">&gt;&gt;  if yes, what happens without --hetero-nodes ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Friday, June 19, 2015, Lane, William &lt;William.Lane_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://UrlBlockedError.aspx">http://UrlBlockedError.aspx</a>&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I created a hostfile that just has the names of the hosts while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifying no slot information whatsoever (e.g. csclprd3-0-0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and received the following errors:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 132 -report-bindings --prefix /hpc/apps/mpi/openmpi/1.8.6/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --hostfile hostfile-noslots --mca btl_tcp_if_include eth0 --hetero-nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-5:14770] MCW rank 4 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-5:14770] MCW rank 5 bound to socket 1[core 2[hwt 0]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-5:14770] MCW rank 6 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-5:14770] MCW rank 7 bound to socket 1[core 2[hwt 0]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-1:16437] MCW rank 24 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-5:18925] MCW rank 48 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-1:16437] MCW rank 25 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-5:18925] MCW rank 49 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-1:16437] MCW rank 20 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-1:16437] MCW rank 21 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-5:18925] MCW rank 44 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-5:18925] MCW rank 45 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-1:16437] MCW rank 22 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-1:16437] MCW rank 23 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-5:18925] MCW rank 46 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-5:18925] MCW rank 47 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-3:15946] MCW rank 36 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-3:15946] MCW rank 37 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-3:15946] MCW rank 32 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-3:15946] MCW rank 33 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-3:15946] MCW rank 34 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-3:15946] MCW rank 35 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-12:09165] MCW rank 124 is not bound (or bound to all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-12:09165] MCW rank 125 is not bound (or bound to all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-12:09165] MCW rank 120 is not bound (or bound to all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-12:09165] MCW rank 121 is not bound (or bound to all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-12:09165] MCW rank 122 is not bound (or bound to all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-12:09165] MCW rank 123 is not bound (or bound to all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-1:27030] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-1:27030] MCW rank 1 bound to socket 1[core 2[hwt 0]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-1:27030] MCW rank 2 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-1:27030] MCW rank 3 bound to socket 1[core 2[hwt 0]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-2:07944] MCW rank 30 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-6:32510] MCW rank 54 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-2:07944] MCW rank 31 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-6:32510] MCW rank 55 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-2:07944] MCW rank 26 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-6:32510] MCW rank 50 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-6:32510] MCW rank 51 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-2:07944] MCW rank 27 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-2:07944] MCW rank 28 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-6:32510] MCW rank 52 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-6:32510] MCW rank 53 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-2:07944] MCW rank 29 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 11 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 12 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 13 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 14 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 15 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 16 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 64 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 65 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 17 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 18 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 116 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 117 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]],socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 100 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 101 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 19 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 66 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 118 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 8 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 102 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 9 bound to socket 1[core 6[hwt 0]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 10 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-4:32449] MCW rank 42 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-4:32449] MCW rank 43 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-4:32449] MCW rank 38 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-4:32449] MCW rank 39 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-4:32449] MCW rank 40 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-4:32449] MCW rank 41 is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30897] MCW rank 126 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 80 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30897] MCW rank 127 bound to socket 1[core 6[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 81 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 81 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30897] MCW rank 128 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 82 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30897] MCW rank 129 bound to socket 1[core 6[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 83 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30897] MCW rank 130 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30897] MCW rank 131 bound to socket 1[core 6[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 84 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 85 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 119 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 103 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 86 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 67 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket 1[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 104 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..][csclprd3-0-10:20752] MCW
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 88 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core 6[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7[hwt 0-1]]: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 87 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 105 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 89 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 72 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 68 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 106 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 90 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 73 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 107 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 69 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 74 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 108 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 57 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 114 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 98 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 115 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 58 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 99 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 59 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 60 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 61 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 62 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 63 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] Failing at address: 0x7ff404351d80
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libpthread.so.0(+0xf500)[0x7ff41453c500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xd4fea)[0x7ff41481efea]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x219)[0x7ff41479f009]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7ff41479f110]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7ff41480f68e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7ff4148e3715]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7ff4147b9ad6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7ff4147d8c60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7ff4141b9cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:30901] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain [
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rhc_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Sent:* Thursday, June 18, 2015 5:26 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Subject:* Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; crash
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FWIW: I don&#226;&#128;&#153;t think this actually has anything to do with the #procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you are trying to run. Instead, I expect it has to do with confusion over
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how many cores it can bind across. When you tell it to use-hwthread-cpus,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you are asking us to map processes to hwthreads, and not cores. I don&#226;&#128;&#153;t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know which nodes are which, but it could be that we are getting incorrect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; info somewhere.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Given that you are limiting the number of procs to the number of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores, is there some reason why you are asking us to use-hwthread-cpus? Why
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not just leave it at the default core level?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I also suspect that you would have no problems if you &#226;&#128;&#148;bind-to none -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does that in fact work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On Jun 18, 2015, at 4:54 PM, Lane, William &lt;William.Lane_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I'm having a strange problem w/OpenMPI 1.8.6. If I run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my OpenMPI test code (compiled against OpenMPI 1.8.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries) on &lt; 131 slots I get no issues. Anything over 131
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors out:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 132 -report-bindings --prefix /hpc/apps/mpi/openmpi/1.8.6/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --hostfile hostfile-single --mca btl_tcp_if_include eth0 --hetero-nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --use-hwthread-cpus /hpc/home/lanew/mpi/openmpi/ProcessColors3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The hostfile has the number of slots restricted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the number of cores, while the max-slots includes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the hyperthreading cores (e.g. csclprd3-0-0 slots=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max-slots=12).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The nodes are a mix of IBM x3550 nodes some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are Sandybridges and others are older Xeons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to add that the submit node from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which I am launching mpirun has the open files
</span><br>
<span class="quotelev3">&gt;&gt;&gt; soft limit (ulimit -a) set to 1024, while the hard limit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ulimit -Ha) is set to 4096. I know open file limits
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were an issue w/an older version of OpenMPI. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute nodes all have their hard open files limit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and soft open files limits set to 4096.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the output (csclprd3-0-13 is the last node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listed in the hostfile hostfile-single):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28765] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28765] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28765] Failing at address: 0x7f30002a8980
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] Failing at address: 0x7fe137662880
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] Failing at address: 0x7f9b40228a80
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] Failing at address: 0x7f0de7f2bb00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] Failing at address: 0x7f9b6c2e8980
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28765] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28765] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28765] Failing at address: 0x7f30002a8980
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] Failing at address: 0x7fe137662880
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] Failing at address: 0x7f9b40228a80
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] Failing at address: 0x7f0de7f2bb00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] Failing at address: 0x7f9b6c2e8980
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f9b513ad110]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x219)[0x7f0df77b6009]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f0df77b6110]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f9b5141d68e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f9b514f1715]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f30115ea68e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28765] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f30116be715]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28765] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f9b7bb3b68e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f9b7bc0f715]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] [ 6] [csclprd3-0-13:28764] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7fa946bb768e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7fe146d4068e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f0df782668e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f0df78fa715]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f0df77d0ad6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7fe146e14715]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fe146ceaad6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f9b513c7ad6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f9b513e6c60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f9b50dc7cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28768] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f3011594ad6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28765] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f30115b3c60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28765] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28765] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f3010f94cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28765] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28765] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f9b7bae5ad6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f9b7bb04c60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f9b7b4e5cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7fa946c8b715]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fa946b61ad6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f0df77efc60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f0df71d0cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7fe146d09c60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fe1466eacdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28767] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7fa946c8b715]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fa946b61ad6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f0df77efc60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f0df71d0cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28770] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7fe146d09c60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fe1466eacdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28766] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7fa946b80c60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fa946561cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:28764] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 126 with PID 0 on node csclprd3-0-13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited on signal 7 (Bus error).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could a lack of the necessary NUMA libraries or the wrong version of NUMA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries be contributing to this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  IMPORTANT WARNING: This message is intended for the use of the person
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27159.php">http://www.open-mpi.org/community/lists/users/2015/06/27159.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   IMPORTANT WARNING: This message is intended for the use of the person
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you for your cooperation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;<a href="http://UrlBlockedError.aspx">http://UrlBlockedError.aspx</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27164.php">http://www.open-mpi.org/community/lists/users/2015/06/27164.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27166.php">http://www.open-mpi.org/community/lists/users/2015/06/27166.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   IMPORTANT WARNING: This message is intended for the use of the person
</span><br>
<span class="quotelev1">&gt; or entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev1">&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev1">&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev1">&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev1">&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev1">&gt; you for your cooperation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27176.php">http://www.open-mpi.org/community/lists/users/2015/06/27176.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27177/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27178.php">Gilles Gouaillardet: "Re: [OMPI users] Problem getting job to start"</a>
<li><strong>Previous message:</strong> <a href="27176.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27176.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27179.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Reply:</strong> <a href="27179.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
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
