<?
$subject_val = "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 12:36:29 2012" -->
<!-- isoreceived="20120912163629" -->
<!-- sent="Wed, 12 Sep 2012 18:36:17 +0200" -->
<!-- isosent="20120912163617" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1" -->
<!-- id="27016C23-A1EC-4264-89A6-95A80FCB0426_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5050ACAE.7010302_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 12:36:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20202.php">Brice Goglin: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20200.php">Jeff Squyres: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="20199.php">Brice Goglin: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't recall any major modification in the MX BTL for the 1.6 with the exception of the rework of the initialization part. There patches dealt with avoiding the double initialization (BTL and MTL), so we might want to start looking at those.
<br>
<p>mx_finalize is called only from ompi_common_mx_finalize, which in turn is called from both the MTL and the BTL modules. As we do manage the reference counts in the init/finalize of the MX, I can only picture two possible scenarios:
<br>
<p>1. Somehow there are pending communications and they are activated after MPI_Finalize (very unlikely)
<br>
<p>2. One of the MTL or BTL initialization call ompi_common_mx_finalize without a successful corresponding call to ompi_common_mx_init. As the BTL is the one segfaulting, I guess the culprit is the MTL.
<br>
<p>I'll take a look at this more in details.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Sep 12, 2012, at 17:39 , Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; (I am bringing back OMPI users to CC)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I reproduce the problem with OMPI 1.6.1 and found the problem.
</span><br>
<span class="quotelev1">&gt; mx_finalize() is called before this error occurs. So the error is
</span><br>
<span class="quotelev1">&gt; expected because calling mx_connect() after mx_finalize() is invalid.
</span><br>
<span class="quotelev1">&gt; It looks the MX component changed significantly between OMPI 1.5 and
</span><br>
<span class="quotelev1">&gt; 1.6.1, and I am pretty sure it worked fine with early 1.5.x versions.
</span><br>
<span class="quotelev1">&gt; Can somebody comment on what was changed in the MX BTL component in late
</span><br>
<span class="quotelev1">&gt; 1.5 versions ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 12/09/2012 15:48, Douglas Eadline a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Resending this mail again, with another SMTP. Please re-add
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open-mx-devel to CC when you reply.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 07/09/2012 00:10, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello Doug,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did you use the same Open-MX version when it worked fine? Same kernel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; too?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any chance you built OMPI over an old OMX that would not be compatible
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with 1.5.2?
</span><br>
<span class="quotelev2">&gt;&gt; I double checked, and even rebuilt both Open MPI and MPICH2
</span><br>
<span class="quotelev2">&gt;&gt; with 1.5.2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Running on a 4 node cluster with Warewulf provisioning. See below:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The error below tells that the OMX driver and lib don't speak the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; langage. EBADF is almost never returned from the OMX driver. The only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case is when talking to /dev/open-mx-raw, but normal application don't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do this. That's why I am thinking about OMPI using an old library that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cannot talk to a new driver. We have checks to prevent this but we never
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; know.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you see anything in dmesg?
</span><br>
<span class="quotelev2">&gt;&gt; no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is omx_info OK?
</span><br>
<span class="quotelev2">&gt;&gt; yes shows:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open-MX version 1.5.2
</span><br>
<span class="quotelev2">&gt;&gt; build: deadline_at_limulus:/raid1/home/deadline/rpms-sl6/BUILD/open-mx-1.5.2
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 10 08:44:16 EDT 2012
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Found 1 boards (32 max) supporting 32 endpoints each:
</span><br>
<span class="quotelev2">&gt;&gt; n0:0 (board #0 name eth0 addr 00:1a:4d:4a:bf:85)
</span><br>
<span class="quotelev2">&gt;&gt;   managed by driver 'r8169'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Peer table is ready, mapper is 00:00:00:00:00:00
</span><br>
<span class="quotelev2">&gt;&gt; ================================================
</span><br>
<span class="quotelev2">&gt;&gt;  0) 00:1a:4d:4a:bf:85 n0:0
</span><br>
<span class="quotelev2">&gt;&gt;  1) 00:1c:c0:9b:66:d0 n1:0
</span><br>
<span class="quotelev2">&gt;&gt;  2) 00:1a:4d:4a:bf:83 n2:0
</span><br>
<span class="quotelev2">&gt;&gt;  3) e0:69:95:35:d7:71 limulus:0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does a basic omx_perf work? (see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://open-mx.gforge.inria.fr/FAQ/index-1.5.html#perf-omxperf">http://open-mx.gforge.inria.fr/FAQ/index-1.5.html#perf-omxperf</a>)
</span><br>
<span class="quotelev2">&gt;&gt; yes, checked host -&gt; each node it works. And mpich2 compiled
</span><br>
<span class="quotelev2">&gt;&gt; with same libraries works. What else
</span><br>
<span class="quotelev2">&gt;&gt; can I check?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Doug
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 06/09/2012 23:04, Douglas Eadline a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I built open-mpi 1.6.1 using the open-mx libraries.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This worked previously and now I get the following
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error. Here is my system:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; kernel:  2.6.32-279.5.1.el6.x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; open-mx: 1.5.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BTW, open-mx worked previously with open-mpi and the current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; version works with mpich2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $  mpiexec -np 8 -machinefile machines cpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 0 on limulus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FatalError: Failed to lookup peer by addr, driver replied Bad file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; descriptor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpi: ../omx_misc.c:89: omx__ioctl_errno_to_return_checked: Assertion
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; `0'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; failed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [ 0] /lib64/libpthread.so.0() [0x3324e0f500]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x33246328a5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [ 2] /lib64/libc.so.6(abort+0x175) [0x3324634085]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [ 3] /lib64/libc.so.6() [0x332462ba1e]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [ 4] /lib64/libc.so.6(__assert_perror_fail+0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x332462bae0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [ 5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/open-mx/lib/libopen-mx.so.0(omx__ioctl_errno_to_return_checked+0x197)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb587418b37]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [ 6]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/open-mx/lib/libopen-mx.so.0(omx__peer_addr_to_index+0x55)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb58741a5d5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [ 7] /usr/open-mx/lib/libopen-mx.so.0(+0xdc7a)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb587419c7a]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [ 8] /usr/open-mx/lib/libopen-mx.so.0(omx_connect+0x8c)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb58741a27c]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [ 9] /usr/open-mx/lib/libopen-mx.so.0(mx_connect+0x15)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb587425865]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [10]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_btl_mx_proc_connect+0x5e)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb5876fe40e]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [11]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_btl_mx_send+0x2d4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb5876fbd94]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [12]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_pml_ob1_send_request_start_prepare+0xcb)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb58777d6fb]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [13]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_pml_ob1_isend+0x4cb)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb58777509b]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [14]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(ompi_coll_tuned_bcast_intra_generic+0x37b)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb58770b55b]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [15]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(ompi_coll_tuned_bcast_intra_binomial+0xd8)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb58770b8b8]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [16]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(ompi_coll_tuned_bcast_intra_dec_fixed+0xcc)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb587702d8c]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [17]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_coll_sync_bcast+0x78)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb587712e88]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [18]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(MPI_Bcast+0x130)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fb5876ce1b0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [19] cpi(main+0x10b) [0x400cc4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [20] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x332461ecdd]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] [21] cpi() [0x400ac9]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [limulus:04448] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 2 on limulus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 4 on limulus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 6 on limulus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 1 on n0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 7 on n0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 3 on n0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 5 on n0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec noticed that process rank 0 with PID 4448 on node limulus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exited
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mailscanner: Clean
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20202.php">Brice Goglin: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20200.php">Jeff Squyres: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="20199.php">Brice Goglin: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
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
