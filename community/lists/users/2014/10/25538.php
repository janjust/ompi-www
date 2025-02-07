<?
$subject_val = "Re: [OMPI users] CuEventCreate Failed...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 13:59:17 2014" -->
<!-- isoreceived="20141020175917" -->
<!-- sent="Mon, 20 Oct 2014 17:59:13 +0000" -->
<!-- isosent="20141020175913" -->
<!-- name="Steven Eliuk" -->
<!-- email="s.eliuk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CuEventCreate Failed..." -->
<!-- id="D06A8FEB.1D64F%s.eliuk_at_samsung.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="5b6869b3099744149fe6458a219f63d9_at_HQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CuEventCreate Failed...<br>
<strong>From:</strong> Steven Eliuk (<em>s.eliuk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-20 13:59:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25539.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
<li><strong>Previous message:</strong> <a href="25537.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
<li><strong>In reply to:</strong> <a href="25537.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25539.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
<li><strong>Reply:</strong> <a href="25539.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your quick response,
<br>
<p>1)mpiexec --allow-run-as-root --mca btl_openib_want_cuda_gdr 1 --mca btl_openib_cuda_rdma_limit 60000 --mca mpi_common_cuda_event_max 1000 -n 5 test/RunTests
<br>
2)Yes, cuda aware support using Mellanox IB,
<br>
3)Yes, we have the ability to use several version of OpenMPI, Mvapich2, etc.
<br>
<p>Also, our defaults for openmpi-mca-params.conf are:
<br>
<p>mtl=^mxm
<br>
<p>btl=^usnic,tcp
<br>
<p>btl_openib_flags=1
<br>
<p><p>service nv_peer_mem status
<br>
<p>nv_peer_mem module is loaded.
<br>
<p>Kindest Regards,
<br>
&#151;
<br>
Steven Eliuk,
<br>
<p><p>From: Rolf vandeVaart &lt;rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;&gt;
<br>
Reply-To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Date: Sunday, October 19, 2014 at 7:33 PM
<br>
To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [OMPI users] CuEventCreate Failed...
<br>
<p>The error 304 corresponds to CUDA_ERRROR_OPERATNG_SYSTEM which means an OS call failed.  However, I am not sure how that relates to the call that is getting the error.
<br>
Also, the last error you report is from MVAPICH2-GDR, not from Open MPI.  I guess then I have a few questions.
<br>
<p><p>1.       Can you supply your configure line for Open MPI?
<br>
<p>2.       Are you making use of CUDA-aware support?
<br>
<p>3.       Are you set up so that users can use both Open MPI and MVAPICH2?
<br>
<p>Thanks,
<br>
Rolf
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Steven Eliuk
<br>
Sent: Friday, October 17, 2014 6:48 PM
<br>
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subject: [OMPI users] CuEventCreate Failed...
<br>
<p>Hi All,
<br>
<p>We have run into issues, that don&#146;t really seem to materialize into incorrect results, nonetheless, we hope to figure out why we are getting them.
<br>
<p>We have several environments with test from one machine, with say 1-16 processes per node, to several machines with 1-16 processes. All systems are certified from Nvidia and use Nvidia Tesla k40 GPUs.
<br>
<p>We notice frequent situations of the following,
<br>
<p>--------------------------------------------------------------------------
<br>
<p>The call to cuEventCreate failed. This is a unrecoverable error and will
<br>
<p>cause the program to abort.
<br>
<p>&nbsp;&nbsp;Hostname:                     aHost
<br>
<p>&nbsp;&nbsp;cuEventCreate return value:   304
<br>
<p>Check the cuda.h file for what the return value means.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>--------------------------------------------------------------------------
<br>
<p>The call to cuIpcGetEventHandle failed. This is a unrecoverable error and will
<br>
<p>cause the program to abort.
<br>
<p>&nbsp;&nbsp;cuIpcGetEventHandle return value:   304
<br>
<p>Check the cuda.h file for what the return value means.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>--------------------------------------------------------------------------
<br>
<p>The call to cuIpcGetMemHandle failed. This means the GPU RDMA protocol
<br>
<p>cannot be used.
<br>
<p>&nbsp;&nbsp;cuIpcGetMemHandle return value:   304
<br>
<p>&nbsp;&nbsp;address: 0x700fd0400
<br>
<p>Check the cuda.h file for what the return value means. Perhaps a reboot
<br>
<p>of the node will clear the problem.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>Now, our test suite still verifies results but this does cause the following when it happens,
<br>
<p>The call to cuEventDestory failed. This is a unrecoverable error and will
<br>
<p>cause the program to abort.
<br>
<p>&nbsp;&nbsp;cuEventDestory return value:   400
<br>
<p>Check the cuda.h file for what the return value means.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>-------------------------------------------------------
<br>
<p>Primary job  terminated normally, but 1 process returned
<br>
<p>a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
<p>-------------------------------------------------------
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpiexec detected that one or more processes exited with non-zero status, thus causing
<br>
<p>the job to be terminated. The first process to do so was:
<br>
<p><p><p>&nbsp;&nbsp;Process name: [[37290,1],2]
<br>
<p>&nbsp;&nbsp;Exit code:    1
<br>
<p><p>We have traced the code back to the following files:
<br>
-ompi/mca/common/cuda/common_cuda.c :: mca_common_cuda_construct_event_and_handle()
<br>
<p>We also know the the following:
<br>
-it happens on every machine on the very first entry to the function previously mentioned,
<br>
-does not happen if the buffer size is under 128 bytes&#133; likely a different mech. Used for the IPC,
<br>
<p>Last, here is an intermittent one and it produces a lot failed tests in our suite&#133; when in fact they are solid, besides this error. Cause notification, annoyances and it would be nice to clean it up.
<br>
<p>mpi_rank_3][cudaipc_allocate_ipc_region] [src/mpid/ch3/channels/mrail/src/gen2/ibv_cuda_ipc.c:487] cuda failed with mapping of buffer object failed
<br>
<p><p>We have not been able to duplicate these errors in other MPI libs,
<br>
<p>Thank you for your time &amp; looking forward to your response,
<br>
<p><p>Kindest Regards,
<br>
&#151;
<br>
Steven Eliuk, Ph.D. Comp Sci,
<br>
Advanced Software Platforms Lab,
<br>
SRA - SV,
<br>
Samsung Electronics,
<br>
1732 North First Street,
<br>
San Jose, CA 95112,
<br>
Work: +1 408-652-1976,
<br>
Work: +1 408-544-5781 Wednesdays,
<br>
Cell: +1 408-819-4407.
<br>
<p>________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25538/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25539.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
<li><strong>Previous message:</strong> <a href="25537.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
<li><strong>In reply to:</strong> <a href="25537.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25539.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
<li><strong>Reply:</strong> <a href="25539.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
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
