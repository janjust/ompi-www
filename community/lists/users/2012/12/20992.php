<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while	launching jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 11:07:13 2012" -->
<!-- isoreceived="20121218160713" -->
<!-- sent="Tue, 18 Dec 2012 16:06:38 +0000" -->
<!-- isosent="20121218160638" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while	launching jobs" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F1A28B8_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6FD7C33F-A3CD-4555-A7DF-2891ED2713DE_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while	launching jobs<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-18 11:06:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20993.php">Kumar, Sudhir: "[OMPI users] Windows Open MPI question"</a>
<li><strong>Previous message:</strong> <a href="20991.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20984.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20962.php">Jeff Squyres: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
libimf.so is present on all nodes, by design. However, some times the simulation runs and other times not. I have a suspicion that the filesystem (GPFS) where the Intel library is located, may become temporarily unavailable in the failure cases.  I do not suspect any problem with OpenMPI, but I am hopeful that it can produce diagnostics that indicate the root cause of the problem.
<br>
<p>I have followed Ralph's advice to build with --enable-debug and am now waiting for the problem to happen again so I can see the ssh command used to launch the orted.
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
<br>
Sent: Tuesday, December 18, 2012 4:14 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs
<br>
<p>Am 17.12.2012 um 16:42 schrieb Blosch, Edwin L:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Unfortunately I didn't see the ssh output.  The output I got was pretty much as before.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You know, the fact that the error message is not prefixed with a host name makes me think it could be happening on the host where the job is placed by PBS. If there is something wrong in the user environment prior to mpirun, that is not an OpenMPI problem. And yet, in one of the jobs that failed, I have also printed outthe results of 'ldd' on the mpirun executable just prior to executing the command, and all the shared libraries were resolved:
</span><br>
<p>You checked the mpirun, but not the orted which misses a &quot;libimf.so&quot; from Intel. The Intel libimf.so from the redistributable archive is present on all nodes?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ldd /release/cfd/openmpi-intel/bin/mpirun
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fffbbb39000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; /release/cfd/openmpi-intel/lib/libopen-rte.so.0 (0x00002abdf75d2000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; /release/cfd/openmpi-intel/lib/libopen-pal.so.0 (0x00002abdf7887000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002abdf7b39000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002abdf7d3d000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002abdf7f56000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00002abdf8159000)
</span><br>
<span class="quotelev1">&gt;         libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002abdf83af000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002abdf85c7000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00002abdf87e4000)
</span><br>
<span class="quotelev1">&gt;         libimf.so =&gt; /appserv/intel/Compiler/11.1/072/lib/intel64/libimf.so (0x00002abdf8b42000)
</span><br>
<span class="quotelev1">&gt;         libsvml.so =&gt; /appserv/intel/Compiler/11.1/072/lib/intel64/libsvml.so (0x00002abdf8ed7000)
</span><br>
<span class="quotelev1">&gt;         libintlc.so.5 =&gt; /appserv/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002abdf90ed000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00002abdf73b1000)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hence my initial assumption that the shared-library problem was happening with one of the child processes on a remote node.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; So at this point I have more questions than answers.  I still don't know if this message comes from the main mpirun process or one of the child processes, although it seems that it should not be the main process because of the output of ldd above.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any more suggestions are welcomed of course.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; /release/cfd/openmpi-intel/bin/mpirun --machinefile 
</span><br>
<span class="quotelev1">&gt; /var/spool/PBS/aux/20804.maruhpc4-mgt -np 160 -x LD_LIBRARY_PATH -x 
</span><br>
<span class="quotelev1">&gt; MPI_ENVIRONMENT=1 --mca plm_base_verbose 5 --leave-session-attached 
</span><br>
<span class="quotelev1">&gt; /tmp/fv420804.maruhpc4-mgt/test_jsgl -v -cycles 10000 -ri restart.5000 
</span><br>
<span class="quotelev1">&gt; -ro /tmp/fv420804.maruhpc4-mgt/restart.5000
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [c6n38:16219] mca:base:select:(  plm) Querying component [rsh] 
</span><br>
<span class="quotelev1">&gt; [c6n38:16219] mca:base:select:(  plm) Query of component [rsh] set 
</span><br>
<span class="quotelev1">&gt; priority to 10 [c6n38:16219] mca:base:select:(  plm) Selected 
</span><br>
<span class="quotelev1">&gt; component [rsh]
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added 'c6n39' (RSA) to the list of known hosts.^M
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added 'c6n40' (RSA) to the list of known hosts.^M
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added 'c6n41' (RSA) to the list of known hosts.^M
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added 'c6n42' (RSA) to the list of known hosts.^M
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added 'c5n26' (RSA) to the list of known hosts.^M
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added 'c3n20' (RSA) to the list of known hosts.^M
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added 'c4n10' (RSA) to the list of known hosts.^M
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added 'c4n40' (RSA) to the list of known hosts.^M
</span><br>
<span class="quotelev1">&gt; /release/cfd/openmpi-intel/bin/orted: error while loading shared 
</span><br>
<span class="quotelev1">&gt; libraries: libimf.so: cannot open shared object file: No such file or 
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- A daemon (pid 16227) died unexpectedly with status 127 while 
</span><br>
<span class="quotelev1">&gt; attempting to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed 
</span><br>
<span class="quotelev1">&gt; shared libraries on the remote node. You may set your LD_LIBRARY_PATH 
</span><br>
<span class="quotelev1">&gt; to have the location of the shared libraries on the remote nodes and 
</span><br>
<span class="quotelev1">&gt; this will automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- mpirun noticed that the job aborted, but has no info as to the 
</span><br>
<span class="quotelev1">&gt; process that caused that situation.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added 'c3n27' (RSA) to the list of known hosts.^M
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- mpirun was unable to cleanly terminate the daemons on the nodes 
</span><br>
<span class="quotelev1">&gt; shown below. Additional manual cleanup may be required - please refer 
</span><br>
<span class="quotelev1">&gt; to the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         c6n39 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         c6n40 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         c6n41 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         c6n42 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Friday, December 14, 2012 2:25 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: EXTERNAL: Re: [OMPI users] Problems with shared libraries 
</span><br>
<span class="quotelev1">&gt; while launching jobs
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Add -mca plm_base_verbose 5 --leave-session-attached to the cmd line - that will show the ssh command being used to start each orted.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Dec 14, 2012, at 12:17 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having a weird problem launching cases with OpenMPI 1.4.3.  It is most likely a problem with a particular node of our cluster, as the jobs will run fine on some submissions, but not other submissions.  It seems to depend on the node list.  I just am having trouble diagnosing which node, and what is the nature of the problem it has.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; One or perhaps more of the orted are indicating they cannot find an Intel Math library.  The error is:
</span><br>
<span class="quotelev1">&gt; /release/cfd/openmpi-intel/bin/orted: error while loading shared 
</span><br>
<span class="quotelev1">&gt; libraries: libimf.so: cannot open shared object file: No such file or 
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I've checked the environment just before launching mpirun, and LD_LIBRARY_PATH includes the necessary component to point to where the Intel shared libraries are located.  Furthermore, my mpirun command line says to export the LD_LIBRARY_PATH variable:
</span><br>
<span class="quotelev1">&gt; Executing ['/release/cfd/openmpi-intel/bin/mpirun', '--machinefile 
</span><br>
<span class="quotelev1">&gt; /var/spool/PBS/aux/20761.maruhpc4-mgt', '-np 160', '-x 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH', '-x MPI_ENVIRONMENT=1', 
</span><br>
<span class="quotelev1">&gt; '/tmp/fv420761.maruhpc4-mgt/falconv4_openmpi_jsgl', '-v', '-cycles', 
</span><br>
<span class="quotelev1">&gt; '10000', '-ri', 'restart.1', '-ro', 
</span><br>
<span class="quotelev1">&gt; '/tmp/fv420761.maruhpc4-mgt/restart.1']
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My shell-initialization script (.bashrc) does not overwrite LD_LIBRARY_PATH.  OpenMPI is built explicitly --without-torque and should be using ssh to launch the orted.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What options can I add to get more debugging of problems launching orted?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20993.php">Kumar, Sudhir: "[OMPI users] Windows Open MPI question"</a>
<li><strong>Previous message:</strong> <a href="20991.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20984.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20962.php">Jeff Squyres: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
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
