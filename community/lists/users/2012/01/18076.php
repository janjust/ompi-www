<?
$subject_val = "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  3 16:36:57 2012" -->
<!-- isoreceived="20120103213657" -->
<!-- sent="Tue, 3 Jan 2012 21:36:52 +0000" -->
<!-- isosent="20120103213652" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..." -->
<!-- id="762096C11C5A044A9D92961C2E1A7CE8192A4BE9_at_MBOX1.FLAS.CSI.CUNY.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6AC1B82D-F553-426D-908E-64F78E42008B_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-03 16:36:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18077.php">Tim Carlson: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18075.php">Gustavo Correa: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18075.php">Gustavo Correa: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18077.php">Tim Carlson: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18077.php">Tim Carlson: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus/All,
<br>
<p>Perhaps there is some confusion as to which 'new' Intel compiler release/version I
<br>
am using. I am not using '12.0'  ... I am using '12.1' ...
<br>
<p>OLD one that builds a working opal_wrapper:
<br>
<p>[richard.walsh_at_athena ~]$ icc -V
<br>
Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.0.0.084 Build 20101006
<br>
Copyright (C) 1985-2010 Intel Corporation.  All rights reserved.                             ^^^^^^^^^
<br>
<p>NEW one that FAILS to build a working opal_wrapper:
<br>
<p>[root_at_zeus .libs]# icc -V
<br>
Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.1.0.233 Build 20110811
<br>
Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.                             ^^^^^^^^^
<br>
<p>This was in my original email.  NOTE: that the non-working version is 12.1  &gt;&gt;NOT&lt;&lt; 12.0  This '12.1'
<br>
version was released by Intel JUST BEFORE SC11 in October of 2011.
<br>
<p>Thanks,
<br>
<p>rbw
<br>
<p><p>Richard Walsh
<br>
Parallel Applications and Systems Manager
<br>
CUNY HPC Center, Staten Island, NY
<br>
W: 718-982-3319
<br>
M: 612-382-4620
<br>
<p>Right, as the world goes, is only in question between equals in power, while the strong do what they can and the weak suffer what they must.  -- Thucydides, 400 BC
<br>
<p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Gustavo Correa [gus_at_[hidden]]
<br>
Sent: Tuesday, January 03, 2012 4:28 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Latest Intel Compilers (ICS,  version 12.1.0.233 Build 20110811) issues ...
<br>
<p>Hi Richard
<br>
<p>I have 1.4.4 built with Intel 12.0.  It works.
<br>
<p>Any chance that  your Intel-based OpenMPI was built from a source
<br>
directory that had been previously used to build the PGI-based OpenMPI,
<br>
and no 'make distclean' was issued in between the two builds,
<br>
nor a fresh build done from a brand new tarball?
<br>
Just a wild guess.
<br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<p>On Jan 3, 2012, at 11:23 AM, Richard Walsh wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jonathan/All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the information, but I continue to have problems.  I dropped the
</span><br>
<span class="quotelev1">&gt; 'openib' option to simplify things and focused my attention only on OpenMPI
</span><br>
<span class="quotelev1">&gt; version 1.4.4 because you suggested it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the strength of the fact that the PGI 11.10 compiler works fine (all systems
</span><br>
<span class="quotelev1">&gt; and all versions of OpenMPI), I ran a PGI build of 1.4.4 with the '-showme'
</span><br>
<span class="quotelev1">&gt; option (Intel fails immediately, even with '-showme' ... ).  I then substituted all
</span><br>
<span class="quotelev1">&gt; the PGI-related strings with Intel-related strings to compile directly and explicitly
</span><br>
<span class="quotelev1">&gt; outside the 'opal' wrapper using code and libraries in the Intel build tree of 1.4.4,
</span><br>
<span class="quotelev1">&gt; as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pgcc -o ./hw2.exe hw2.c -I/share/apps/openmpi-pgi/1.4.4/include -L/share/apps/openmpi-pgi/1.4.4/lib -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; becomes ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; icc -o ./hw2.exe hw2.c -I/share/apps/openmpi-intel/1.4.4/include -L/share/apps/openmpi-intel/1.4.4/lib -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interestingly, this direct-explicit Intel compile &gt;&gt;WORKS FINE&lt;&lt; (no segment fault like with the wrapped version)
</span><br>
<span class="quotelev1">&gt; and the executable produced also &gt;&gt;RUNS FINE&lt;&lt;.  So ... it looks to me like there is something wrong with using
</span><br>
<span class="quotelev1">&gt; the 'opal' wrappper generated-used in the Intel build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone make a suggestion ... ?? I would like to use the wrappers of course.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rbw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Walsh
</span><br>
<span class="quotelev1">&gt; Parallel Applications and Systems Manager
</span><br>
<span class="quotelev1">&gt; CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev1">&gt; W: 718-982-3319
</span><br>
<span class="quotelev1">&gt; M: 612-382-4620
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right, as the world goes, is only in question between equals in power, while the strong do what they can and the weak suffer what they must.  -- Thucydides, 400 BC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Jonathan Dursi [ljdursi_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, December 20, 2011 4:48 PM
</span><br>
<span class="quotelev1">&gt; To: Open Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Latest Intel Compilers (ICS,  version 12.1.0.233 Build 20110811) issues ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For what it's worth, 1.4.4 built with the intel 12.1.0.233 compilers has been  the default mpi at our centre for over a month and we haven't had any problems...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - jonathan
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jonathan Dursi; SciNet, Compute/Calcul Canada
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Richard Walsh &lt;Richard.Walsh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sender: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Dec 2011 21:14:44
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Latest Intel Compilers (ICS,
</span><br>
<span class="quotelev1">&gt; version 12.1.0.233 Build 20110811) issues ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not heard anything back on the inquiry below, so I take it
</span><br>
<span class="quotelev1">&gt; that no one has had any issues with Intel's latest compiler release,
</span><br>
<span class="quotelev1">&gt; or perhaps has not tried it yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rbw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Walsh
</span><br>
<span class="quotelev1">&gt; Parallel Applications and Systems Manager
</span><br>
<span class="quotelev1">&gt; CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev1">&gt; W: 718-982-3319
</span><br>
<span class="quotelev1">&gt; M: 612-382-4620
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right, as the world goes, is only in question between equals in power, while the strong do what they can and the weak suffer what they must.  -- Thucydides, 400 BC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Richard Walsh [Richard.Walsh_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, December 16, 2011 3:12 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Working through a stock rebuild of OpenMPI 1.5.4 and 1.4.4 with
</span><br>
<span class="quotelev1">&gt; the most current compiler suites from both PGI and Intel:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1.  PGI,  Version 11.10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   2.  Intel,  Version 12.1.0.233 Build 20110811
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My 1.5.4 'config.log' header looks like this for Intel:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort --with-openib --prefix=/share/apps/openmpi-intel/1.5.4 --with-tm=/share/apps/pbs/11.1.0.111761
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and this for PGI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 --with-openib --prefix=/share/apps/openmpi-pgi/1.5.4 --with-tm=/share/apps/pbs/11.1.0.111761
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This configure line has been used successfully before.  Configuration, build, and install
</span><br>
<span class="quotelev1">&gt; for BOTH compilers seems to work OK; however, my 'mpicc' build of my basic test
</span><br>
<span class="quotelev1">&gt; program ONLY works with the PGI built version of 'mpicc' for either the 1.4.4 or the 1.5.4
</span><br>
<span class="quotelev1">&gt; will compile the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Intel 1.4.4 and 1.5.4 'mpicc' wrapper-compilers produce an immediate segmentation
</span><br>
<span class="quotelev1">&gt; fault:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .[richard.walsh_at_bob pbs]$ ./compile_it
</span><br>
<span class="quotelev1">&gt; ./compile_it: line 10: 19163 Segmentation fault      /share/apps/openmpi-intel/1.5.4/bin/mpicc -o ./hello_mpi.exe hello_mpi.c
</span><br>
<span class="quotelev1">&gt; [richard.walsh_at_bob pbs]$
</span><br>
<span class="quotelev1">&gt; [richard.walsh_at_bob pbs]$ ./compile_it
</span><br>
<span class="quotelev1">&gt; ./compile_it: line 10: 19515 Segmentation fault      /share/apps/openmpi-intel/1.4.4/bin/mpicc -o ./hello_mpi.exe hello_mpi.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This Intel stack is from the most recent release of their ICS released
</span><br>
<span class="quotelev1">&gt; in late October before SC11:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [richard.walsh_at_bob pbs]$ icc -V
</span><br>
<span class="quotelev1">&gt; Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.1.0.233 Build 20110811
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [richard.walsh_at_bob pbs]$ ifort -V
</span><br>
<span class="quotelev1">&gt; Intel(R) Fortran Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.1.0.233 Build 20110811
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone else encountered this problem ... ??  Suggestions ... ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rbw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Walsh
</span><br>
<span class="quotelev1">&gt; Parallel Applications and Systems Manager
</span><br>
<span class="quotelev1">&gt; CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev1">&gt; W: 718-982-3319
</span><br>
<span class="quotelev1">&gt; M: 612-382-4620
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right, as the world goes, is only in question between equals in power, while the strong do what they can and the weak suffer what they must.  -- Thucydides, 400 BC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
</span><br>
<span class="quotelev1">&gt; Tobacco-Free Campus as of July 1, 2012.
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
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
</span><br>
<span class="quotelev1">&gt; Tobacco-Free Campus as of July 1, 2012.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
</span><br>
<span class="quotelev1">&gt; Tobacco-Free Campus as of July 1, 2012.
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
<p>________________________________
<br>
<p>Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
<br>
Tobacco-Free Campus as of July 1, 2012.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18077.php">Tim Carlson: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18075.php">Gustavo Correa: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18075.php">Gustavo Correa: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18077.php">Tim Carlson: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18077.php">Tim Carlson: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
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
