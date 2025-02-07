<?
$subject_val = "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 12:59:21 2011" -->
<!-- isoreceived="20110524165921" -->
<!-- sent="Tue, 24 May 2011 10:58:53 -0600" -->
<!-- isosent="20110524165853" -->
<!-- name="Marcus R. Epperson" -->
<!-- email="mrepper_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)" -->
<!-- id="4DDBE3CD.401_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="45362608-B8B0-4ADE-9959-B35C5690A6F3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)<br>
<strong>From:</strong> Marcus R. Epperson (<em>mrepper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-24 12:58:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16617.php">sushil samant: "Re: [OMPI users] reading from file"</a>
<li><strong>Previous message:</strong> <a href="16615.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="16582.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16658.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/19/2011 07:37 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Other users have seen something similar but we have never been able
</span><br>
<span class="quotelev1">&gt; to reproduce it.  Is this only when using IB?
</span><br>
<p>Actually no, when I use --mca btl tcp,sm,self it hangs in the same place.
<br>
<p><span class="quotelev1">&gt; If you use &quot;mpirun --mca btl_openib_cpc_if_include rdmacm&quot;, does the
</span><br>
<span class="quotelev1">&gt; problem go away?
</span><br>
<p>No, that doesn't help with the hang I'm seeing. Though it sounds like 
<br>
I'm hitting a different issue than Salvatore, fwiw.
<br>
<p>-Marcus
<br>
<p><p><span class="quotelev1">&gt; On May 11, 2011, at 6:00 PM, Marcus R. Epperson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've seen the same thing when I build openmpi 1.4.3 with Intel 12, but only when I have -O2 or -O3 in CFLAGS. If I drop it down to -O1 then the collectives hangs go away. I don't know what, if anything, the higher optimization buys you when compiling openmpi, so I'm not sure if that's an acceptable workaround or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My system is similar to yours - Intel X5570 with QDR Mellanox IB running RHEL 5, Slurm, and these openmpi btls: openib,sm,self. I'm using IMB 3.2.2 with a single iteration of Barrier to reproduce the hang, and it happens 100% of the time for me when I invoke it like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # salloc -N 9 orterun -n 65 ./IMB-MPI1 -npmin 64 -iter 1 barrier
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The hang happens on the first Barrier (64 ranks) and each of the participating ranks have this backtrace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; __poll (...)
</span><br>
<span class="quotelev2">&gt;&gt; poll_dispatch () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; opal_event_loop () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_request_default_wait_all () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_sendrecv_actual () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_barrier_intra_recursivedoubling () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_barrier_intra_dec_fixed () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; PMPI_Barrier () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; IMB_barrier ()
</span><br>
<span class="quotelev2">&gt;&gt; IMB_init_buffers_iter ()
</span><br>
<span class="quotelev2">&gt;&gt; main ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The one non-participating rank has this backtrace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; __poll (...)
</span><br>
<span class="quotelev2">&gt;&gt; poll_dispatch () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; opal_event_loop () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_request_default_wait_all () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_sendrecv_actual () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_barrier_intra_bruck () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_barrier_intra_dec_fixed () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; PMPI_Barrier () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; main ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I use more nodes I can get it to hang with 1ppn, so that seems to rule out the sm btl (or interactions with it) as a culprit at least.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't reproduce this with openmpi 1.5.3, interestingly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Marcus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 05/10/2011 03:37 AM, Salvatore Podda wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we succeed in building several version of openmpi from 1.2.8 to 1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Intel composer XE 2011 (aka 12.0).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However we found a threshold in the number of cores (depending from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application: IMB, xhpl or user applications
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and form the number of required cores) above which the application hangs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (sort of deadlocks).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The building of openmpi with 'gcc' and 'pgi' does not show the same limits.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are any known incompatibilities of openmpi with this version of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel compiilers?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The characteristics of our computational infrastructure are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel processors E7330, E5345, E5530 e E5620
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CentOS 5.3, CentOS 5.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel composer XE 2011
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc 4.1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pgi 10.2-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Salvatore Podda
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ENEA UTICT-HPC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department for Computer Science Development and ICT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Facilities Laboratory for Science and High Performace Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C.R. Frascati
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Via E. Fermi, 45
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PoBox 65
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00044 Frascati (Rome)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Italy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +39 06 9400 5342
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: +39 06 9400 5551
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: +39 06 9400 5735
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E-mail: salvatore.podda_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Home Page: www.cresco.enea.it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16617.php">sushil samant: "Re: [OMPI users] reading from file"</a>
<li><strong>Previous message:</strong> <a href="16615.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="16582.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16658.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
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
