<?
$subject_val = "Re: [OMPI users] help me please, about Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 11:55:15 2008" -->
<!-- isoreceived="20080617155515" -->
<!-- sent="Tue, 17 Jun 2008 11:55:05 -0400" -->
<!-- isosent="20080617155505" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help me please, about Open MPI" -->
<!-- id="78C863CF-59F0-4012-A8D7-C662EBBE2B5B_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="BAY104-W551A3A12DB9F00A048943BFDA80_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] help me please, about Open MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 11:55:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5913.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5911.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5911.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5918.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Reply:</strong> <a href="5918.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure, that configure line should be fine.  But that's a different  
<br>
issue than the permissions on your temp directories.  The environment  
<br>
variables I was asking about are what are set at run time -- not when  
<br>
you configure/build OMPI.
<br>
<p>If you're using Torque, I *believe* that it sets TMPDIR in its jobs --  
<br>
you might want to check (I don't use Torque on a day-to-day basis, so  
<br>
I don't remember offhand).
<br>
<p><p>On Jun 17, 2008, at 11:52 AM, Tony Smith wrote:
<br>
<p><span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My configure :
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/ptmp/myname/openmpi --enable-static --disable- 
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; CC=icc CXX=icpc F77=ifort FC=ifort --with-gm=/opt/gm
</span><br>
<span class="quotelev1">&gt; -with-tm=/usr/spool/PBS/
</span><br>
<span class="quotelev1">&gt; is that correct ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tue, 17 Jun 2008 10:35:06 -0400
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] help me please, about Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What are the exact permissions on /tmp? They should likely be 1777.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you have the TMPDIR or TMP environment variables set? If so, is
</span><br>
<span class="quotelev2">&gt; &gt; that directory also world-writable? (if set, these will override the
</span><br>
<span class="quotelev2">&gt; &gt; default location of /tmp)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The error you are seeing (session directory failed) usually has to  
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev2">&gt; &gt; with ORTE not being able to create a session directory for the user.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 17, 2008, at 10:27 AM, Tony Smith wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I changed /tmp and /ptmp and its sub directories to writable .
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But , the same errors.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Date: Tue, 17 Jun 2008 09:10:18 -0400
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subject: Re: [OMPI users] help me please, about Open MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Is /tmp writable on your compute nodes?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Jun 16, 2008, at 1:49 PM, Tony Smith wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Dear Sir:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; thanks.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I have changed it to its absolute path:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /ptmp/myname/openmpi123/ompi123_install/bin/mpirun -np 8 / 
</span><br>
<span class="quotelev1">&gt; ptmp/
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; myname/openmpi123/openmpi-1.2.3/examples/hello_c
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; But I still got the error :
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ====================================================
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [hpc-cluster-38 :32635] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; runtime/orte_init_stage1.c at line 626
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; process is
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; likely to abort. There are many reasons that a parallel  
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev3">&gt; &gt; &gt; can
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; fail during orte_init; some of which are due to  
</span><br>
<span class="quotelev1">&gt; configuration or
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; environment problems. This failure appears to be an internal
</span><br>
<span class="quotelev3">&gt; &gt; &gt; failure;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; here's some additional information (which may only be relevant
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to an
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_session_dir failed
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [hpc-cluster-38 :32635] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [hpc-cluster-38 :32635] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; runtime/orte_init.c at line 52
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Open RTE was unable to initialize properly. The error occured
</span><br>
<span class="quotelev3">&gt; &gt; &gt; while
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; attempting to orte_init(). Returned value -1 instead of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ====================================
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I can not find the file &quot;runtime/orte_init_stage1.c&quot;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; It seems that ORTE is not initialized .
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I have built OPEN MPI and installed it correctly .
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Why ?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; thanks a lot ,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; June 16 2008
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Date: Mon, 16 Jun 2008 19:05:06 +0200
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; From: gentryx_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Subject: Re: [OMPI users] help me please, about Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Dear Mister Smith,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Thank you for installing Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; On 12:51 Mon 16 Jun , Tony Smith wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; I have changed PATH and LD_LIBRARY_PATH:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Please be aware that you have to make those changes within
</span><br>
<span class="quotelev3">&gt; &gt; &gt; your job
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; script. Otherwise they will only affect your local shell.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; But, how can I make sure that the application is run by  
</span><br>
<span class="quotelev1">&gt; Open
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; not by mpich-
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; You could enforce a certain mpirun by using its absolute  
</span><br>
<span class="quotelev1">&gt; path,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; e.g
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &quot;/ptmp/myname/openmpi123/ompi123_install/bin/mpirun foo&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; instead of
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; just &quot;mpirun foo&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; I deleted /opt/mpich-gm/bin from PATH and added
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; You should not need to delete, just add in front of MPICH.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; Would you please help me with that ?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; I utterly hope I just did.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Most sincerely yours ;-)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -Andreas
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ============================================
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ============================================
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (\___/)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (+'.'+)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; signature to help him gain world domination!
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Now you can invite friends from Facebook and other groups to  
</span><br>
<span class="quotelev1">&gt; join
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; you on Windows Live&#153; Messenger. Add them now!
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Earn cashback on your purchases with Live Search - the search that
</span><br>
<span class="quotelev3">&gt; &gt; &gt; pays you back! Learn More
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Earn cashback on your purchases with Live Search - the search that  
</span><br>
<span class="quotelev1">&gt; pays you back! Learn More  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5913.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5911.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5911.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5918.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Reply:</strong> <a href="5918.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
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
