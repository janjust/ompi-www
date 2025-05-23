<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 11:08:20 2007" -->
<!-- isoreceived="20070727150820" -->
<!-- sent="Fri, 27 Jul 2007 09:08:07 -0600" -->
<!-- isosent="20070727150807" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hostfiles - yet again" -->
<!-- id="C2CF6677.36FB%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8837B615-97C5-424D-A6BB-0E641039DE8A_at_cs.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 11:08:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2034.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2032.php">Aurelien Bouteiller: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>In reply to:</strong> <a href="2031.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2034.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2034.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guess I was unclear, George - I don't know enough about Aurelien's app to
<br>
know if it is capable of (or trying to) run as one job, or not.
<br>
<p>What has been described on this thread to-date is, in fact, a corner case.
<br>
Hence the proposal of another way to possibly address a corner case without
<br>
disrupting the normal code operation.
<br>
<p>May not be possible, per the other more general thread....
<br>
<p><p>On 7/27/07 8:31 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It's not about the app. It's about the MPI standard. With one mpirun
</span><br>
<span class="quotelev1">&gt; you start one MPI application (SPMD or MPMD but still only one). The
</span><br>
<span class="quotelev1">&gt; first impact of this, is all processes started with one mpirun
</span><br>
<span class="quotelev1">&gt; command will belong to the same MPI_COMM_WORLD.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our mpirun is in fact equivalent to the mpiexec as defined in the MPI
</span><br>
<span class="quotelev1">&gt; standard. Therefore, we cannot change it's behavior, outside the MPI
</span><br>
<span class="quotelev1">&gt; 2 standard boundaries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Moreover, both of the approaches you described will only add corner
</span><br>
<span class="quotelev1">&gt; cases, which I rather prefer to limit in number.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 27, 2007, at 8:42 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 7/26/07 4:22 PM, &quot;Aurelien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -hostfile big_pool -n 10 -host 1,2,3,4 application : -n 2 -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 99,100 ft_server
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will not work: this is a way to launch MIMD jobs, that share the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same COMM_WORLD. Not the way to launch two different applications
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interact trough Accept/Connect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Direct consequence on simple NAS benchmarks are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * if the second command does not use MPI-Init, then the first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application locks forever in MPI-Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * if both use MPI init, the MPI_Comm_size of the jobs are incorrect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ****
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bouteill_at_dancer:~$ ompi-build/debug/bin/mpirun -prefix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/bouteill/ompi-build/debug/ -np 4 -host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node01,node02,node03,node04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NPB3.2-MPI/bin/lu.A.4 : -np 1 -host node01 NPB3.2-MPI/bin/mg.A.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  NAS Parallel Benchmarks 3.2 -- LU Benchmark
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Warning: program is running on  5 processors
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      but was compiled for   4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Size:  64x 64x 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Iterations: 250
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Number of processes:     5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay - of course, I can't possibly have any idea how your application
</span><br>
<span class="quotelev2">&gt;&gt; works... ;-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, it would be trivial to simply add two options to the
</span><br>
<span class="quotelev2">&gt;&gt; app_context
</span><br>
<span class="quotelev2">&gt;&gt; command line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. designates that this app_context is to be launched as a separate
</span><br>
<span class="quotelev2">&gt;&gt; job
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. indicates that this app_context is to be &quot;connected&quot; ala connect/
</span><br>
<span class="quotelev2">&gt;&gt; accept
</span><br>
<span class="quotelev2">&gt;&gt; to the other app_contexts (if you want, we could even take an argument
</span><br>
<span class="quotelev2">&gt;&gt; indicating which app_contexts it is to be connected to). Or we
</span><br>
<span class="quotelev2">&gt;&gt; could reverse
</span><br>
<span class="quotelev2">&gt;&gt; this as indicate we want it to be disconnected - all depends upon what
</span><br>
<span class="quotelev2">&gt;&gt; default people want to define.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This would solve the problem you describe while still allowing us
</span><br>
<span class="quotelev2">&gt;&gt; to avoid
</span><br>
<span class="quotelev2">&gt;&gt; allocation confusion. I'll send it out separately as an RFC.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2034.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2032.php">Aurelien Bouteiller: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>In reply to:</strong> <a href="2031.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2034.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2034.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
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
