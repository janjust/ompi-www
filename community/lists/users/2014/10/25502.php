<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 23:04:37 2014" -->
<!-- isoreceived="20141016030437" -->
<!-- sent="Wed, 15 Oct 2014 20:04:33 -0700" -->
<!-- isosent="20141016030433" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?" -->
<!-- id="80F4760B-5A47-44AF-A508-DE8AFBD8031C_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="2a2610942928494998ac6b7993034a79_at_BY2PR09MB0231.namprd09.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-15 23:04:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25503.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25501.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>In reply to:</strong> <a href="25500.php">McGrattan, Kevin B. Dr.: "[OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25506.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Reply:</strong> <a href="25506.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you only have one thread doing MPI calls, then single and funneled are indeed the same. If this is only happening after long run times, I'd suspect resource exhaustion. You might check your memory footprint to see if you are running into leak issues (could be in our library as well as your app). When you eventually deadlock, do you get any error output? If you are using IB and run out of QP, you should at least get something saying that.
<br>
<p><p>On Oct 15, 2014, at 8:22 AM, McGrattan, Kevin B. Dr. &lt;kevin.mcgrattan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am using OpenMPI 1.8.3 on a linux cluster to run fairly long CFD (computational fluid dynamics) simulations using 16 MPI processes. The calculations last several days and typically involve millions of MPI exchanges. I use the Intel Fortran compiler, and when I compile with the &#150;openmp option and run with only one OpenMP thread per MPI process, I tend to get deadlocks after several days of computing. These deadlocks only occur in about 1 out of 10 calculations, and they only occur after running for several days. I have eliminated things like network glitches, power spikes, etc, as possibilities. The only thing left is the inclusion of the OpenMP option &#150; even though I am running with just one OpenMP thread per MPI process. I have read about the issues with MPI_THREAD_INIT, and I have reduced the REQUIRED level of support to MPI_THREAD_FUNNELED, down from MPI_THREAD_SERIALIZED. The latter was not necessary for my application, and I think the reduction in level of support has helped, but not completely removed, the deadlocking. Of course, there is always the possibility that I have coded my MPI calls improperly, even though the code runs for days on end. Maybe there&#146;s that one in a million possibility that rank x gets to a point in the code that is so far ahead of all the other ranks that a deadlock occurs. Placing MPI_BARRIERs has not helped me find any such situation.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; So I have two questions. First, has anyone experienced something similar to this where inclusion of OpenMP in an MPI code has caused deadlocks? Second, is it possible that reducing the REQUIRED level of support to MPI_THREAD_SINGLE will cause the code to behave differently than FUNNELED? I have read in another post that SINGLE and FUNNELED are essentially the same thing. I have even noted that I can spawn OpenMP threads even when I use SINGLE.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Kevin McGrattan
</span><br>
<span class="quotelev1">&gt; National Institute of Standards and Technology
</span><br>
<span class="quotelev1">&gt; 100 Bureau Drive, Mail Stop 8664
</span><br>
<span class="quotelev1">&gt; Gaithersburg, Maryland 20899
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 301 975 2712
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25500.php">http://www.open-mpi.org/community/lists/users/2014/10/25500.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25502/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25503.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25501.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>In reply to:</strong> <a href="25500.php">McGrattan, Kevin B. Dr.: "[OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25506.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Reply:</strong> <a href="25506.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
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
