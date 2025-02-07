<?
$subject_val = "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 11 10:49:39 2013" -->
<!-- isoreceived="20130311144939" -->
<!-- sent="Mon, 11 Mar 2013 14:49:33 +0000" -->
<!-- isosent="20130311144933" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129" -->
<!-- id="3E05D0A1-538E-49BC-9393-B10FACCE2E52_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+jNUxZ=ns1Cxgf1=vZnZGZr4WUGF4M6vL0an2Fvm_8n_TihGw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-11 10:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21521.php">Russell Power: "[OMPI users] status of cuda across multiple IO hubs?"</a>
<li><strong>Previous message:</strong> <a href="21519.php">Svyatoslav Korneev: "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<li><strong>In reply to:</strong> <a href="21519.php">Svyatoslav Korneev: "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21524.php">Svyatoslav Korneev: "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<li><strong>Reply:</strong> <a href="21524.php">Svyatoslav Korneev: "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you have multiple active ports, you might as well utilize them. After all, you paid for them!
<br>
<p>You should disable udapl; it's really not useful unless you're going to run intel MPI. 
<br>
<p>You do need to fix the registration memory issue - see the FAQ for that. 
<br>
<p>So yes, none of these may be contributing to the segv.  But they should sill be cleared up before chasing the segv, if for no other reason than to decease the number of variables and side effects. that you're chasing. 
<br>
<p>Also, please upgrade to the latest certain of open MPI. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Mar 11, 2013, at 10:29 AM, &quot;Svyatoslav Korneev&quot; &lt;svyatoslav.korneev_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But below 129 code runs well even with these warnings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have following warnings:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. WARNING: There are more than one active ports on host
</span><br>
<span class="quotelev1">&gt; 'compute-0-0.local'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. WARNING: Failed to open &quot;OpenIB-cma-1&quot; [DAT_INVALID_ADDRESS:].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. open_hca: getaddr_netdev ERROR: Success. Is
</span><br>
<span class="quotelev1">&gt; ib1 configured?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. open_hca: device mthca0 not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. library load failure: libdaplscm.so.2: cannot open shared object
</span><br>
<span class="quotelev1">&gt; file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6. WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev1">&gt; allow registering part of your physical memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's looks messy, but these warnings are not critical, or I'm not right ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Warnings 1-3 denote  the unconfigured second port, should I configure
</span><br>
<span class="quotelev1">&gt; network interface for it ? I tried to solve warning 6 by manual, but
</span><br>
<span class="quotelev1">&gt; it does not work.  What about warning 5, what is this library
</span><br>
<span class="quotelev1">&gt; libdaplscm.so.2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do you think, may be it would be better to install MLNX_OFED on my
</span><br>
<span class="quotelev1">&gt; nodes as I have NIC from this brand ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Svyatoslav
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 11, 2013 at 4:04 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Did the check the FAQ entries listed on all the warning messages that you're getting?  You should probably fix those first.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 10, 2013, at 4:30 AM, &quot;Svyatoslav Korneev&quot; &lt;svyatoslav.korneev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Community,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have 4 computing nodes and front-end. Computing nodes connected via
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IB and Ethernet and fron-end has Ethernet only. Computing node has 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU on board, each CPU has 16 cores, total number of cores per node is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64. The IB network controller is Mellanox MT26428, IB switch is Qlogic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12000. I installed Rock Cluster Linux 6.1 on my cluster, and this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system has OpenMPI from the box. ompi_info gives the version of OpenMP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is 1.6.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good news that IB and OpendMPI with IB support working from the box,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I face a really strange bug. If I try to run HelloWord on more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then 129 processes with IB support it gives me Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error. I have this error even if I try to start it on one node. Below
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 129 processes everything is working fine, on 1 node or on 4 nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; except warning messages (listing bellow). Without IB support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everything working fine on arbitrary number of processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anybody have an idea regarding my issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning messages for HelloWord, running on two processes (each process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per node):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca btl_openib_verbose 1 --mca btl ^tcp -hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machinefile -n 2 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Querying INI files for vendor 0x0000, part ID 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found corresponding INI values: default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: There are more than one active ports on host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'compute-0-0.local', but the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default subnet GID prefix was detected on more than one of these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ports.  If these ports are connected to different physical IB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; networks, this configuration will fail in Open MPI.  This version of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI requires that every physically separate IB subnet that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used between connected MPI processes must have different subnet ID
</span><br>
<span class="quotelev3">&gt;&gt;&gt; values.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please see this FAQ entry for more details:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     btl_openib_warn_default_gid_prefix to 0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Querying INI files for vendor 0x0000, part ID 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found corresponding INI values: default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Failed to open &quot;OpenIB-cma-1&quot; [DAT_INVALID_ADDRESS:].
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be a real error or it may be an invalid entry in the uDAPL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Registry which is contained in the dat.conf file. Contact your local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; System Administrator to confirm the availability of the interfaces in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the dat.conf file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-0-0.local:20229:  open_hca: getaddr_netdev ERROR: Success. Is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib1 configured?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-0-0.local:20229:  open_hca: device mthca0 not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-0-0.local:20229:  open_hca: device mthca0 not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-0-1.local:58701:  open_hca: getaddr_netdev ERROR: Success. Is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib1 configured?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-0-1.local:58701:  open_hca: device mthca0 not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-0-1.local:58701:  open_hca: device mthca0 not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DAT: library load failure: libdaplscm.so.2: cannot open shared object
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DAT: library load failure: libdaplscm.so.2: cannot open shared object
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DAT: library load failure: libdaplscm.so.2: cannot open shared object
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DAT: library load failure: libdaplscm.so.2: cannot open shared object
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allow registering part of your physical memory.  This can cause MPI jobs to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be caused by your OpenFabrics vendor limiting the amount of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical memory that can be registered.  You should investigate the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relevant Linux kernel module parameters that control how much physical
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory can be registered, and increase them to allow registering all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical memory on your machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See this Open MPI FAQ item for more information on these Linux kernel module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameters:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local host:              compute-0-0.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Registerable memory:     32768 MiB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Total memory:            262125 MiB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 0 of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world from process 1 of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-0.local:20227] 1 more process has sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help-mpi-btl-openib.txt / default subnet prefix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-0.local:20227] Set MCA parameter &quot;orte_base_help_aggregate&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to 0 to see all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-0.local:20227] 9 more processes have sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help-mpi-btl-udapl.txt / dat_ia_open fail
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-0.local:20227] 3 more processes have sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help-mpi-btl-openib.txt / reg mem limit low
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="21521.php">Russell Power: "[OMPI users] status of cuda across multiple IO hubs?"</a>
<li><strong>Previous message:</strong> <a href="21519.php">Svyatoslav Korneev: "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<li><strong>In reply to:</strong> <a href="21519.php">Svyatoslav Korneev: "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21524.php">Svyatoslav Korneev: "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<li><strong>Reply:</strong> <a href="21524.php">Svyatoslav Korneev: "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
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
