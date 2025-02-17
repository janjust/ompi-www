<?
$subject_val = "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 03:37:39 2013" -->
<!-- isoreceived="20130205083739" -->
<!-- sent="Tue, 5 Feb 2013 09:30:34 +0100 (CET)" -->
<!-- isosent="20130205083034" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
<!-- id="201302050830.r158UYII010110_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
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
<strong>Subject:</strong> Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 03:30:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21298.php">Iliev, Hristo: "Re: [OMPI users] All_to_allv algorithm patch"</a>
<li><strong>Previous message:</strong> <a href="21296.php">Roland Schulz: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21307.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>now I can use all our machines once more. I have a problem on
<br>
Solaris 10 x86_64, because the mapping of processes doesn't
<br>
correspond to the rankfile. I removed the output from &quot;hostfile&quot;
<br>
and wrapped around long lines.
<br>
<p>tyr rankfiles 114 cat rf_ex_sunpc
<br>
# mpiexec -report-bindings -rf rf_ex_sunpc hostname
<br>
<p>rank 0=sunpc0 slot=0:0-1,1:0-1
<br>
rank 1=sunpc1 slot=0:0-1
<br>
rank 2=sunpc1 slot=1:0
<br>
rank 3=sunpc1 slot=1:1
<br>
<p><p>tyr rankfiles 115 mpiexec -report-bindings -rf rf_ex_sunpc hostname
<br>
[sunpc0:17920] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
[sunpc1:11265] MCW rank 1 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
[sunpc1:11265] MCW rank 2 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 1:0)
<br>
[sunpc1:11265] MCW rank 3 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 1:1)
<br>
<p><p>Can I provide any information to solve this problem? My
<br>
rankfile works as expected, if I use only Linux machines.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev2">&gt; &gt; Hmmm....well, it certainly works for me:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [rhc_at_odin ~/v1.6]$ cat rf
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=odin093 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=odin094 slot=0:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 2=odin094 slot=1:0
</span><br>
<span class="quotelev2">&gt; &gt; rank 3=odin094 slot=1:1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [rhc_at_odin ~/v1.6]$ mpirun -n 4 -rf ./rf --report-bindings
</span><br>
<span class="quotelev2">&gt; &gt;  -mca opal_paffinity_alone 0 hostname
</span><br>
<span class="quotelev2">&gt; &gt; [odin093.cs.indiana.edu:04617] MCW rank 0 bound to
</span><br>
<span class="quotelev2">&gt; &gt;   socket 0[core 0-1] socket 1[core 0-1]: [B B][B B] (slot list 
</span><br>
0:0-1,1:0-1)
<br>
<span class="quotelev2">&gt; &gt; odin093.cs.indiana.edu
</span><br>
<span class="quotelev2">&gt; &gt; odin094.cs.indiana.edu
</span><br>
<span class="quotelev2">&gt; &gt; [odin094.cs.indiana.edu:04426] MCW rank 1 bound to
</span><br>
<span class="quotelev2">&gt; &gt;   socket 0[core 0-1]: [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev2">&gt; &gt; odin094.cs.indiana.edu
</span><br>
<span class="quotelev2">&gt; &gt; [odin094.cs.indiana.edu:04426] MCW rank 2 bound to
</span><br>
<span class="quotelev2">&gt; &gt;   socket 1[core 0]: [. .][B .] (slot list 1:0)
</span><br>
<span class="quotelev2">&gt; &gt; [odin094.cs.indiana.edu:04426] MCW rank 3 bound to
</span><br>
<span class="quotelev2">&gt; &gt;   socket 1[core 1]: [. .][. B] (slot list 1:1)
</span><br>
<span class="quotelev2">&gt; &gt; odin094.cs.indiana.edu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interesting that it works on your machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I see one thing of concern to me in your output - your second node
</span><br>
<span class="quotelev2">&gt; &gt; appears to be a Sun computer. Is it the same physical architecture?
</span><br>
<span class="quotelev2">&gt; &gt; Is it also running Linux? Are you sure it is using the same version
</span><br>
<span class="quotelev2">&gt; &gt; of OMPI, built for that environment and hardware?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both machines (in fact all four machines: sunpc0, sunpc1, linpc0, and
</span><br>
<span class="quotelev1">&gt; linpc1) use the same hardware. &quot;linpc&quot; uses openSUSE 12.1 and &quot;sunpc&quot;
</span><br>
<span class="quotelev1">&gt; Solaris 10 x86_64. All machines use the same version of Open MPI,
</span><br>
<span class="quotelev1">&gt; built for that environment. At the moment I can only use sunpc1 and
</span><br>
<span class="quotelev1">&gt; linpc1 (&quot;my&quot; developer machines). Next week I will have access to all
</span><br>
<span class="quotelev1">&gt; machines so that I can test, if I get a different behaviour when I
</span><br>
<span class="quotelev1">&gt; use two machines with the same operating system (although mixed
</span><br>
<span class="quotelev1">&gt; operating systems weren't a problem in the past (only machines with
</span><br>
<span class="quotelev1">&gt; differnt endians)). I let you know my results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 30, 2013, at 2:08 AM, Siegmar Gross 
</span><br>
<span class="quotelev1">&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I applied your patch &quot;rmaps.diff&quot; to openmpi-1.6.4rc3r27923 and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; it works for my previous rankfile.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #3493: Handle the case where rankfile provides the allocation
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -----------------------------------+----------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Reporter:  rhc                     |      Owner:  jsquyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    Type:  changeset move request  |     Status:  new
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Priority:  critical                |  Milestone:  Open MPI 1.6.4
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Version:  trunk                   |   Keywords:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -----------------------------------+----------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Please apply the attached patch that corrects the rmaps function for
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; obtaining the available nodes when rankfile is providing the 
</span><br>
allocation.
<br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr rankfiles 129 more rf_linpc1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr rankfiles 130 mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [linpc1:31603] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unfortunately I don't get the expected result for the following
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rankfile.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr rankfiles 114 more rf_bsp 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # mpiexec -report-bindings -rf rf_bsp hostname
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rank 1=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rank 3=sunpc1 slot=1:1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would expect that rank 0 gets all four cores from linpc1, rank 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; both cores of socket 0 from sunpc1, rank 2 core 0 of socket 1, and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rank 3 core 1 of socket 1 from sunpc1. Everything is fine for my
</span><br>
<span class="quotelev3">&gt; &gt; &gt; processes with rank 0 and 1, but it's wrong for ranks 2 and 3,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; because they both get all four cores of sunpc1. Is something wrong
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with my rankfile or with your mapping of processes to cores? I have
</span><br>
<span class="quotelev3">&gt; &gt; &gt; removed the output from &quot;hostname&quot; and wrapped long lines.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr rankfiles 115 mpiexec -report-bindings -rf rf_bsp hostname
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [linpc1:31092] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 
</span><br>
0-1]:
<br>
<span class="quotelev3">&gt; &gt; &gt;  [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [sunpc1:12916] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [sunpc1:12916] MCW rank 2 bound to socket 0[core 0-1] socket 1[core 
</span><br>
0-1]:
<br>
<span class="quotelev3">&gt; &gt; &gt;  [B B][B B] (slot list 1:0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [sunpc1:12916] MCW rank 3 bound to socket 0[core 0-1] socket 1[core 
</span><br>
0-1]:
<br>
<span class="quotelev3">&gt; &gt; &gt;  [B B][B B] (slot list 1:1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I get the following output, if I add the options which you mentioned
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in a previous email.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr rankfiles 124 mpiexec -report-bindings -rf rf_bsp \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  -display-allocation -mca ras_base_verbose 5 hostname
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Querying component [cm]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Skipping component [cm]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  No component selected!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  nothing found in module - proceeding to hostfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  parsing default hostfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   /usr/local/openmpi-1.6.4_64_cc/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  nothing found in hostfiles or dash-host - checking for rankfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ras:base:node_insert inserting 2 nodes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ras:base:node_insert node linpc1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ras:base:node_insert node sunpc1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Data for node: tyr.informatik.hs-fulda.de  Num slots: 0  Max slots: 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Data for node: linpc1  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Data for node: sunpc1  Num slots: 3    Max slots: 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; =================================================================
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [linpc1:31532] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 
</span><br>
0-1]:
<br>
<span class="quotelev3">&gt; &gt; &gt;  [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [sunpc1:13136] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [sunpc1:13136] MCW rank 2 bound to socket 0[core 0-1] socket 1[core 
</span><br>
0-1]:
<br>
<span class="quotelev3">&gt; &gt; &gt;  [B B][B B] (slot list 1:0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [sunpc1:13136] MCW rank 3 bound to socket 0[core 0-1] socket 1[core 
</span><br>
0-1]:
<br>
<span class="quotelev3">&gt; &gt; &gt;  [B B][B B] (slot list 1:1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you very much for any suggestions and any help in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Siegmar
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21298.php">Iliev, Hristo: "Re: [OMPI users] All_to_allv algorithm patch"</a>
<li><strong>Previous message:</strong> <a href="21296.php">Roland Schulz: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21307.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
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
