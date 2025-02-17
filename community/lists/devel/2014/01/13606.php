<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 23:35:08 2014" -->
<!-- isoreceived="20140109043508" -->
<!-- sent="Wed, 8 Jan 2014 20:35:03 -0800" -->
<!-- isosent="20140109043503" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86" -->
<!-- id="9818A73C-C910-442D-8DF9-F524BAE24568_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17Sw5BFbL-6AZ9BnW_8RVQYCfHNTYUM00KJkF6k4W3-MQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 23:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13607.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output"</a>
<li><strong>Previous message:</strong> <a href="13605.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>In reply to:</strong> <a href="13605.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13608.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Reply:</strong> <a href="13608.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you have the time, it might be worth nailing it down. However, I'm mindful of all the things you need to do, so please only if you have the time.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Jan 8, 2014, at 8:23 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Building with gcc-4.1.2 fixed the problem for me.  I also removed an old install of ompi-1.4 that was in LD_LIBRARY_PATH at build time and might have been a contributing factor.  If I'd known earlier that it was there, I wouldn't have reported the problem without first removing it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can build again with gcc-4.0.0 and --enable-debug if you are still interested in trying to get a line number.  This would also determine if LD_LIBRARY_PATH was the true culprit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul [Sent from my phone]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2014 8:02 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Most likely problem is a bad backing store site - any chance you could give me a line number from this? There are a lot of calls to register params in that code and I'd need some help in figuring out which one wasn't right.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2014, at 6:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am still testing the current 1.7.4rc tarball on my various systems.  The latest failure (shown below) is a SEGV somewhere below MPI_Init on a old, but otherwise fairly normal, Linux/x86 (32-bit) system. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/bin/mpirun -np 1 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] Failing at address: 0x6c6c6f63
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] [ 0] [0xbe4440]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] [ 1] /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_var_enum_create+0x15d) [0x2b11ed]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] [ 2] /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_register_params+0x639) [0x440909]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] [ 3] /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_components_register+0x14e) [0x2b2cce]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] [ 4] /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_register+0x1b5) [0x2b32a5]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] [ 5] /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_open+0x4e) [0x2b333e]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] [ 6] /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libmpi.so.1(ompi_mpi_init+0x53d) [0xaf359d]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] [ 7] /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libmpi.so.1(MPI_Init+0x13d) [0xb10d6d]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] [ 8] examples/ring_c [0x80486e9]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] [ 9] /lib/libc.so.6(__libc_start_main+0xdc) [0x125ebc]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] [10] examples/ring_c [0x8048631]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29031] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 29031 on node pcp-j-6 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The failure shown is for a singleton run, but np=2 fails as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; System info:
</span><br>
<span class="quotelev2">&gt;&gt; $ uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux pcp-j-6 2.6.18-238.1.1.el5PAE #1 SMP Tue Jan 18 19:28:42 EST 2011 i686 athlon i386 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt; $ gcc --version
</span><br>
<span class="quotelev2">&gt;&gt; gcc (GCC) 4.0.0
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2005 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev2">&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The only configure argument used was --prefix.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was going to attach output from &quot;ompi_info --all&quot;, but it SEGV's too!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ ompi_info --all 
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] Failing at address: 0x6c6c6f63
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] [ 0] [0xd8a440]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] [ 1] /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_var_enum_create+0x15d) [0x2db1ed]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] [ 2] /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_register_params+0x639) [0x48d909]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] [ 3] /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_components_register+0x14e) [0x2dccce]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] [ 4] /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_register+0x1b5) [0x2dd2a5]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] [ 5] /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(opal_info_register_project_frameworks+0x57) [0x2b83d7]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] [ 6] /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libmpi.so.1(ompi_info_register_framework_params+0x81) [0xa69251]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] [ 7] ompi_info(main+0x2ba) [0x8049a2a]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] [ 8] /lib/libc.so.6(__libc_start_main+0xdc) [0x125ebc]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] [ 9] ompi_info [0x80496e1]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-6:29092] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will try again with a newer gcc and report back.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13606/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13607.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output"</a>
<li><strong>Previous message:</strong> <a href="13605.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>In reply to:</strong> <a href="13605.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13608.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Reply:</strong> <a href="13608.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
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
