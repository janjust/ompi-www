<?
$subject_val = "Re: [OMPI users] intermittent segfaults with openib on ring_c.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 11:13:17 2014" -->
<!-- isoreceived="20140604151317" -->
<!-- sent="Wed, 4 Jun 2014 08:13:12 -0700" -->
<!-- isosent="20140604151312" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intermittent segfaults with openib on ring_c.c" -->
<!-- id="2F7E8C0E-DF0B-4E67-BA56-F266D4547965_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE159ED30FF9_at_SWEC9985.w-intra.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] intermittent segfaults with openib on ring_c.c<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-04 11:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24535.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24533.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>In reply to:</strong> <a href="24533.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24536.php">Gus Correa: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Reply:</strong> <a href="24536.php">Gus Correa: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!! Really appreciate your help - I'll try to figure out what went wrong and get back to you
<br>
<p>On Jun 4, 2014, at 8:07 AM, Fischer, Greg A. &lt;fischega_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I re-ran with 1 processor and got more information. How about this?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Core was generated by `ring_c'.
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; #0  opal_memory_ptmalloc2_int_malloc (av=0x2b48f6300020, bytes=47592367980728) at ../../../../../openmpi-1.8.1/opal/mca/memory/linux/malloc.c:4098
</span><br>
<span class="quotelev1">&gt; 4098          bck-&gt;fd = unsorted_chunks(av);
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  opal_memory_ptmalloc2_int_malloc (av=0x2b48f6300020, bytes=47592367980728) at ../../../../../openmpi-1.8.1/opal/mca/memory/linux/malloc.c:4098
</span><br>
<span class="quotelev1">&gt; #1  0x00002b48f2a15e38 in opal_memory_ptmalloc2_malloc (bytes=47592367980576) at ../../../../../openmpi-1.8.1/opal/mca/memory/linux/malloc.c:3433
</span><br>
<span class="quotelev1">&gt; #2  0x00002b48f2a15b36 in opal_memory_linux_malloc_hook (sz=47592367980576, caller=0x2b48f63000b8) at ../../../../../openmpi-1.8.1/opal/mca/memory/linux/hooks.c:691
</span><br>
<span class="quotelev1">&gt; #3  0x00002b48f2374b90 in vasprintf () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00002b48f2354148 in asprintf () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x00002b48f26dc7d1 in orte_oob_base_get_addr (uri=0x2b48f6300020) at ../../../../openmpi-1.8.1/orte/mca/oob/base/oob_base_stubs.c:234
</span><br>
<span class="quotelev1">&gt; #6  0x00002b48f53e7d4a in orte_rml_oob_get_uri () at ../../../../../openmpi-1.8.1/orte/mca/rml/oob/rml_oob_contact.c:36
</span><br>
<span class="quotelev1">&gt; #7  0x00002b48f26fa181 in orte_routed_base_register_sync (setup=32 ' ') at ../../../../openmpi-1.8.1/orte/mca/routed/base/routed_base_fns.c:301
</span><br>
<span class="quotelev1">&gt; #8  0x00002b48f4bbcccf in init_routes (job=4130340896, ndat=0x2b48f63000b8) at ../../../../../openmpi-1.8.1/orte/mca/routed/binomial/routed_binomial.c:705
</span><br>
<span class="quotelev1">&gt; #9  0x00002b48f26c615d in orte_ess_base_app_setup (db_restrict_local=32 ' ') at ../../../../openmpi-1.8.1/orte/mca/ess/base/ess_base_std_app.c:245
</span><br>
<span class="quotelev1">&gt; #10 0x00002b48f45b069f in rte_init () at ../../../../../openmpi-1.8.1/orte/mca/ess/env/ess_env_module.c:146
</span><br>
<span class="quotelev1">&gt; #11 0x00002b48f26935ab in orte_init (pargc=0x2b48f6300020, pargv=0x2b48f63000b8, flags=8) at ../../openmpi-1.8.1/orte/runtime/orte_init.c:148
</span><br>
<span class="quotelev1">&gt; #12 0x00002b48f1739d38 in ompi_mpi_init (argc=1, argv=0x7fffebf0d1f8, requested=8, provided=0x0) at ../../openmpi-1.8.1/ompi/runtime/ompi_mpi_init.c:464
</span><br>
<span class="quotelev1">&gt; #13 0x00002b48f1760a37 in PMPI_Init (argc=0x2b48f6300020, argv=0x2b48f63000b8) at pinit.c:84
</span><br>
<span class="quotelev1">&gt; #14 0x00000000004024ef in main (argc=1, argv=0x7fffebf0d1f8) at ring_c.c:19
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 04, 2014 11:00 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] intermittent segfaults with openib on ring_c.c
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Does the trace go any further back? Your prior trace seemed to indicate an error in our OOB framework, but in a very basic place. Looks like it could be an uninitialized variable, and having the line number down as deep as possible might help identify the source
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 4, 2014, at 7:55 AM, Fischer, Greg A. &lt;fischega_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oops, ulimit was set improperly. I generated a core file, loaded it in GDB, and ran a backtrace:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Core was generated by `ring_c'.
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; #0  opal_memory_ptmalloc2_int_malloc (av=0x2b8e4fd00020, bytes=47890224382136) at ../../../../../openmpi-1.8.1/opal/mca/memory/linux/malloc.c:4098
</span><br>
<span class="quotelev1">&gt; 4098          bck-&gt;fd = unsorted_chunks(av);
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  opal_memory_ptmalloc2_int_malloc (av=0x2b8e4fd00020, bytes=47890224382136) at ../../../../../openmpi-1.8.1/opal/mca/memory/linux/malloc.c:4098
</span><br>
<span class="quotelev1">&gt; #1  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is that helpful?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: Fischer, Greg A. 
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 04, 2014 10:17 AM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Cc: Fischer, Greg A.
</span><br>
<span class="quotelev1">&gt; Subject: RE: [OMPI users] intermittent segfaults with openib on ring_c.c
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I recompiled with &#147;&#151;enable-debug&#148; but it doesn&#146;t seem to be providing any more information or a core dump. I&#146;m compiling ring.c with:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpicc ring_c.c -g -traceback -o ring_c
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; and running with:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 --mca btl openib,self ring_c
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; and I&#146;m getting:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [binf112:05845] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [binf112:05845] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [binf112:05845] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [binf112:05845] Failing at address: 0x10
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [ 0] /lib64/libpthread.so.0(+0xf7c0)[0x2b2fa44d57c0]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [ 1] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-pal.so.6(opal_memory_ptmalloc2_int_malloc+0x4b3)[0x2b2fa4ff2b03]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [ 2] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-pal.so.6(opal_memory_ptmalloc2_malloc+0x58)[0x2b2fa4ff5288]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [ 3] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-pal.so.6(+0xd1f86)[0x2b2fa4ff4f86]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [ 4] /lib64/libc.so.6(vasprintf+0x3e)[0x2b2fa4957a7e]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [ 5] /lib64/libc.so.6(asprintf+0x88)[0x2b2fa4937148]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [ 6] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-rte.so.7(orte_util_convert_process_name_to_string+0xe2)[0x2b2fa4c873e2]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [ 7] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-rte.so.7(orte_oob_base_get_addr+0x25)[0x2b2fa4cbdb15]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [ 8] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/openmpi/mca_rml_oob.so(orte_rml_oob_get_uri+0xa)[0x2b2fa79c5d2a]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [ 9] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-rte.so.7(orte_routed_base_register_sync+0x1fd)[0x2b2fa4cdae7d]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [10] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/openmpi/mca_routed_binomial.so(+0x3c7b)[0x2b2fa719bc7b]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [11] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-rte.so.7(orte_ess_base_app_setup+0x3ad)[0x2b2fa4ca7c8d]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [12] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/openmpi/mca_ess_env.so(+0x169f)[0x2b2fa6b8f69f]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [13] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-rte.so.7(orte_init+0x17b)[0x2b2fa4c764bb]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [14] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libmpi.so.1(ompi_mpi_init+0x438)[0x2b2fa3d1e198]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [15] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libmpi.so.1(MPI_Init+0xf7)[0x2b2fa3d44947]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [16] ring_c[0x4024ef]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [17] /lib64/libc.so.6(__libc_start_main+0xe6)[0x2b2fa4906c36]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] [18] ring_c[0x4023f9]
</span><br>
<span class="quotelev1">&gt; [binf112:05845] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 3 with PID 5845 on node xxxx112 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Does any of that help?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 03, 2014 11:54 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] intermittent segfaults with openib on ring_c.c
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sounds odd - can you configure OMPI --enable-debug and run it again? If it fails and you can get a core dump, could you tell us the line number where it is failing?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 3, 2014, at 9:58 AM, Fischer, Greg A. &lt;fischega_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Apologies &#150; I forgot to add some of the information requested by the FAQ:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1.       OpenFabrics is provided by the Linux distribution:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [binf102:fischega] $ rpm -qa | grep ofed
</span><br>
<span class="quotelev1">&gt; ofed-kmp-default-1.5.4.1_3.0.76_0.11-0.11.5
</span><br>
<span class="quotelev1">&gt; ofed-1.5.4.1-0.11.5
</span><br>
<span class="quotelev1">&gt; ofed-doc-1.5.4.1-0.11.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2.       Linux Distro / Kernel:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [binf102:fischega] $ cat /etc/SuSE-release
</span><br>
<span class="quotelev1">&gt; SUSE Linux Enterprise Server 11 (x86_64)
</span><br>
<span class="quotelev1">&gt; VERSION = 11
</span><br>
<span class="quotelev1">&gt; PATCHLEVEL = 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [binf102:fischega] $ uname &#150;a
</span><br>
<span class="quotelev1">&gt; Linux xxxx102 3.0.76-0.11-default #1 SMP Fri Jun 14 08:21:43 UTC 2013 (ccab990) x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3.       Not sure which subnet manger is being used &#150; I think OpenSM, but I&#146;ll need to check with my administrators.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4.       Output of ibv_devinfo is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5.       Ifconfig output is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6.       Ulimit &#150;l output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [binf102:fischega] $ ulimit &#150;l
</span><br>
<span class="quotelev1">&gt; unlimited
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Fischer, Greg A. 
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 03, 2014 12:38 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Fischer, Greg A.
</span><br>
<span class="quotelev1">&gt; Subject: intermittent segfaults with openib on ring_c.c
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hello openmpi-users,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;m running into a perplexing problem on a new system, whereby I&#146;m experiencing intermittent segmentation faults when I run the ring_c.c example and use the openib BTL. See an example below. Approximately 50% of the time it provides the expected output, but the other 50% of the time, it segfaults. LD_LIBRARY_PATH is set correctly, and the version of &#147;mpirun&#148; being invoked is correct. The output of ompi_info &#150;all is attached.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; One potential problem may be that the system that OpenMPI was compiled on is mostly the same as the system where it is being executed, but there are some differences in the installed packages. I&#146;ve checked the critical ones (libibverbs, librdmacm, libmlx4-rdmav2, etc.), and they appear to be the same.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can anyone suggest how I might start tracking this problem down?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [binf102:fischega] $ mpirun -np 2 --mca btl openib,self ring_c
</span><br>
<span class="quotelev1">&gt; [binf102:31268] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [binf102:31268] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [binf102:31268] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [binf102:31268] Failing at address: 0x10
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 0] /lib64/libpthread.so.0(+0xf7c0) [0x2b42213f57c0]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 1] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x4b3) [0x2b42203fd7e3]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 2] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_int_memalign+0x8b) [0x2b4220400d3b]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 3] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_memalign+0x6f) [0x2b42204008ef]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 4] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(+0x117876) [0x2b4220400876]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 5] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/openmpi/mca_btl_openib.so(+0xc34c) [0x2b422572334c]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 6] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_class_initialize+0xaa) [0x2b422041d64a]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 7] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/openmpi/mca_btl_openib.so(+0x1f12f) [0x2b422573612f]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 8] /lib64/libpthread.so.0(+0x77b6) [0x2b42213ed7b6]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 9] /lib64/libc.so.6(clone+0x6d) [0x2b42216dcd6d]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 31268 on node xxxx102 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &lt;ibv_devinfo.txt&gt;&lt;ifconfig.txt&gt;_______________________________________________
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24534/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24535.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24533.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>In reply to:</strong> <a href="24533.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24536.php">Gus Correa: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Reply:</strong> <a href="24536.php">Gus Correa: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
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
