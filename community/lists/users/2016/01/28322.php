<?
$subject_val = "Re: [OMPI users] MPI hangs on poll_device() with rdma";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 06:10:16 2016" -->
<!-- isoreceived="20160121111016" -->
<!-- sent="Thu, 21 Jan 2016 11:10:13 +0000" -->
<!-- isosent="20160121111013" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI hangs on poll_device() with rdma" -->
<!-- id="5941EE03-9A44-4B46-8B53-7185EC7BF446_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHgSaRSzRUzcO4ei4KVLn36ZcMmotsnfDBBRKkBJoOVvmqg1wQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI hangs on poll_device() with rdma<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-21 06:10:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28323.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Previous message:</strong> <a href="28321.php">Gilles Gouaillardet: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>In reply to:</strong> <a href="28313.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you create a small example to reproduce the problem?
<br>
<p>The TCP and verbs-based transports use different thresholds and protocols, and can sometimes bring to light errors in the application (e.g., the application is making assumptions that just happen to be true for TCP, but not necessarily for other transports).
<br>
<p>Is your program multi-threaded?  If so, MPI_THREAD_MULTIPLE support in the v1.8 and v1.10 series is not fully baked.
<br>
<p>Additionally, if you have buffering / matching / progression assumptions in your application, you might accidentally block.  An experiment to try to is to convert all MPI_SEND and MPI_ISEND to MPI_SSEND and MPI_ISSEND, respectively, and see if your program still functions properly on TCP.
<br>
<p><p><p><span class="quotelev1">&gt; On Jan 21, 2016, at 12:10 AM, Eva &lt;wuzhh01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run with two machines, 2 process per node: process0, process1, process2, process3.
</span><br>
<span class="quotelev1">&gt; After some random rounds of communications, the communication hangs. When I debug into the program, I found:
</span><br>
<span class="quotelev1">&gt; process1 sent a message to process2; 
</span><br>
<span class="quotelev1">&gt; process2 received the message from process1 and then start to receive messages from other processes. 
</span><br>
<span class="quotelev1">&gt; But process1 doesn't get notice: process2 has received its message and then hang on MPI_Send-&gt;...-&gt;poll_device() of rdmav2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x00007f6ba95f03e5 in ?? () from /usr/lib64/libmlx4-rdmav2.so
</span><br>
<span class="quotelev1">&gt; #1  0x00007f6bacf1ed93 in poll_device () from /home/openmpi-1.8.5-gcc4.8/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; #2  0x00007f6bacf1f7ed in btl_openib_component_progress () from /home/openmpi-1.8.5-gcc4.8/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; #3  0x00007f6bb06539da in opal_progress () from /home/openmpi-1.8.5-gcc4.8/lib/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00007f6bab831f55 in mca_pml_ob1_send () from /home/openmpi-1.8.5-gcc4.8/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #5  0x00007f6bb0df33c2 in PMPI_Send () from /home/openmpi-1.8.5-gcc4.8/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some experiments I have tried:
</span><br>
<span class="quotelev1">&gt; 1. compile openmpi without multi-thread enable
</span><br>
<span class="quotelev1">&gt; 2. --mca pml_ob1_use_early_completion 0
</span><br>
<span class="quotelev1">&gt; 3. disable eager mode
</span><br>
<span class="quotelev1">&gt; 4. ssend, Bsend
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but it still hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same program works fine on TCP for more than one year. After I move it onto rdma, it starts to hang. And I can't debug into any rdma details
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016-01-21 11:24 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Run MPI_Send on MPI1.8.5 without multithread enabled:
</span><br>
<span class="quotelev1">&gt; it hangs on mca_pml_ob1_send() -&gt; opal_progreses() -&gt; btl_openib_component_progress() -&gt; poll_device() -&gt; libmlx4-rdmav2.so -&gt; cq -&gt; phread_spin_unlock
</span><br>
<span class="quotelev1">&gt; The program can run on TCP with no error.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28313.php">http://www.open-mpi.org/community/lists/users/2016/01/28313.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28323.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Previous message:</strong> <a href="28321.php">Gilles Gouaillardet: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>In reply to:</strong> <a href="28313.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
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
