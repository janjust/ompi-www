<?
$subject_val = "Re: [OMPI users] Strange OpenMPI messages";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 05:46:36 2012" -->
<!-- isoreceived="20120215104636" -->
<!-- sent="Wed, 15 Feb 2012 05:46:21 -0500" -->
<!-- isosent="20120215104621" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange OpenMPI messages" -->
<!-- id="4F3B8CFD.6010804_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALd0-50-WuSGe9NpqVNkqfNHvyDwHXLnXkoHeBwQB=wEBkd2vw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange OpenMPI messages<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 05:46:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18473.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Previous message:</strong> <a href="18471.php">Faisal Shahzad: "[OMPI users] MPI_Barrier in Self-checkpointing call"</a>
<li><strong>In reply to:</strong> <a href="18469.php">Tohiko Looka: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18475.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you get any interfaces shown when you run &quot;ibstat&quot; on any of the 
<br>
nodes your job is spawned on?
<br>
<p>--td
<br>
<p>On 2/15/2012 1:27 AM, Tohiko Looka wrote:
<br>
<span class="quotelev1">&gt; Mm... This is really strange
</span><br>
<span class="quotelev1">&gt; I don't have that service and there is no ib* output in 'ifconfig -a' 
</span><br>
<span class="quotelev1">&gt; or 'Infinband' in 'lspci'
</span><br>
<span class="quotelev1">&gt; Which makes me believe that I don't have such a network. I also 
</span><br>
<span class="quotelev1">&gt; checked on an identical computer on the same network with the same 
</span><br>
<span class="quotelev1">&gt; results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's strange is that these messages didn't use to show up and they 
</span><br>
<span class="quotelev1">&gt; don't show up on that identical computer; only on mine. Even though 
</span><br>
<span class="quotelev1">&gt; both computers have the same hardware, openMPI version and on the same 
</span><br>
<span class="quotelev1">&gt; network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess I can safely ignore these warnings and run on Ethernet, but it 
</span><br>
<span class="quotelev1">&gt; would be nice to know what happened there, in case anybody has an idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 15, 2012 at 12:52 AM, Gustavo Correa 
</span><br>
<span class="quotelev1">&gt; &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Tohiko
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     OpenFabrics network a.k.a. Infiniband a.k.a. IB.
</span><br>
<span class="quotelev1">&gt;     To check if the compute nodes have IB interfaces, try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     lspci [and search the output for Infinband]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     To see if the IB interface is configured try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ifconfig -a  [and search the output for ib0, ib1, or similar]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     To check if the OFED module is up try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     'service openibd status'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     As an alternative, you could also try to run your program over
</span><br>
<span class="quotelev1">&gt;     Ethernet, avoiding Infinband,
</span><br>
<span class="quotelev1">&gt;     in case you don't have IB or if somehow it is broken.
</span><br>
<span class="quotelev1">&gt;     It is slower than Infiniband, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Try something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpiexec -mca btl tcp,sm,self -np 4 ./my_mpi_program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I hope this helps,
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Feb 14, 2012, at 4:02 PM, Tohiko Looka wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Sorry for the noob question, but how do I check my network type
</span><br>
<span class="quotelev1">&gt;     and if OFED service is running correctly or not? And how do I run it
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thank you,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Tue, Feb 14, 2012 at 2:14 PM, Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Do you have an OpenFabrics-based network?  (e.g., InfiniBand or
</span><br>
<span class="quotelev1">&gt;     iWarp)
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; If so, this error message usually means that OFED is either
</span><br>
<span class="quotelev1">&gt;     installed incorrectly, or is not running properly (e.g., its
</span><br>
<span class="quotelev1">&gt;     services didn't get started properly upon boot).
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; If you don't have an OpenFabrics-based network, then it usually
</span><br>
<span class="quotelev1">&gt;     means that you have OpenFabrics services running when you really
</span><br>
<span class="quotelev1">&gt;     shouldn't (because you don't have any OpenFabrics-based devices).
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Feb 14, 2012, at 4:48 AM, Tohiko Looka wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Greetings,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Until today I was running my openmpi applications with no
</span><br>
<span class="quotelev1">&gt;     errors/warnings
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Today I restarted my computer (possibly after an automatic
</span><br>
<span class="quotelev1">&gt;     openmpi update) and got these warnings when
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; running my program
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; [tohiko_at_kw12614 1d]$ mpirun -x LD_LIBRARY_PATH -hostfile hosts
</span><br>
<span class="quotelev1">&gt;     -np 10 hello
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; [[21652,1],0]: A high-performance Open MPI point-to-point
</span><br>
<span class="quotelev1">&gt;     messaging module
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;   Host: kw12614
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Another transport will be used instead, although this may
</span><br>
<span class="quotelev1">&gt;     result in
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; lower performance.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; [kw12614:03195] 10 more processes have sent help message
</span><br>
<span class="quotelev1">&gt;     help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; [kw12614:03195] Set MCA parameter &quot;orte_base_help_aggregate&quot;
</span><br>
<span class="quotelev1">&gt;     to 0 to see all help / error messages
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Is this normal? And how come it happened now?
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; -- Tohiko
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --
</span><br>
<span class="quotelev2">&gt;     &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;     &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18472/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18473.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Previous message:</strong> <a href="18471.php">Faisal Shahzad: "[OMPI users] MPI_Barrier in Self-checkpointing call"</a>
<li><strong>In reply to:</strong> <a href="18469.php">Tohiko Looka: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18475.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
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
