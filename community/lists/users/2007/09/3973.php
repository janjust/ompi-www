<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep  3 18:37:21 2007" -->
<!-- isoreceived="20070903223721" -->
<!-- sent="Mon, 3 Sep 2007 23:36:48 +0100" -->
<!-- isosent="20070903223648" -->
<!-- name="Glenn Carver" -->
<!-- email="Glenn.Carver_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory leaks on solaris" -->
<!-- id="p05111b0dc30239d345c3_at_[10.0.1.2]" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46BCF280.4060604_at_Sun.COM" -->
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
<strong>From:</strong> Glenn Carver (<em>Glenn.Carver_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-03 18:36:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3974.php">Corey Putkunz: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>Previous message:</strong> <a href="3972.php">Edgar Gabriel: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3841.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Don,
<br>
<p>Somehow I thought it might not be so easy.. otherwise it might have 
<br>
been spotted before!
<br>
<p>Although we first spotted the problem with our own application, I did 
<br>
the most recent tests using the Intel MPI Benchmarks 
<br>
(intel_clustertools3.tar.gz) and saw the same behaviour.  It might be 
<br>
interesting if I send you my compiled binary to test and vice versa 
<br>
(I can send the source too, but it should be easy to find on the 
<br>
Intel website). I'm not sure what the memory requirement is for the 
<br>
benchmark; I'd need to run it again to check. I don't think it's very 
<br>
big though.
<br>
<p>As for our environment, we have 4 nodes, 3 of X4100 and one X4200 as 
<br>
the head node. Each machine has two dual core CPUs so runs 4 MPI 
<br>
processes. We use Sun GE for batch submission and the queue is 
<br>
configured to only allow one job at a time. If I run a 4 MPI 
<br>
processes all on the same node I see the sustained memory loss.
<br>
<p>I would be interested to know the environment you are running on: 
<br>
what hardware, compiler versions, SGE version, OS &amp; patch level.
<br>
<p>Hope that helps.  Sorry for the delay in getting back to you, I've 
<br>
been away for one reason or another. I'm going to be away as of 
<br>
tomorrow for another week. After the holiday season, it's conference 
<br>
season!
<br>
<p>Best wishes,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Glenn
<br>
<p><p><span class="quotelev1">&gt;Glenn,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This will require some more investigation. I have verified that the
</span><br>
<span class="quotelev1">&gt;udapl btl is making the proper calls to free registered memory and
</span><br>
<span class="quotelev1">&gt;though I have seen the free memory as listed by vmstat drop and I see it
</span><br>
<span class="quotelev1">&gt;come back as well.  Additionally if I run a basic bandwidth test
</span><br>
<span class="quotelev1">&gt;serially(one job at a time) I see the vmstat number go down and come
</span><br>
<span class="quotelev1">&gt;back. If I run the program many times simultaneously the vmstat free
</span><br>
<span class="quotelev1">&gt;number goes down and then comes backup. Does it come back all the way is
</span><br>
<span class="quotelev1">&gt;not entirely clear because there does seem to be a lazy component to the
</span><br>
<span class="quotelev1">&gt;releasing of locked pages, which is the part I need to investigate
</span><br>
<span class="quotelev1">&gt;furhter. I am not seeing a sustained continuous drop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I wonder if you could tell me more about the environment. Number of MPI
</span><br>
<span class="quotelev1">&gt;jobs running simultaneously? Size of the job(s)? Is your code something
</span><br>
<span class="quotelev1">&gt;you can share?  Reproducing what you are seeing is my intent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-DON
</span><br>
<span class="quotelev1">&gt;p.s. I will not be checking email or working on this again until the
</span><br>
<span class="quotelev1">&gt;week of August 27 as I am taking a little vacation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Glenn Carver wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Don,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Following up on this, here are the results of the tests. All is well
</span><br>
<span class="quotelev2">&gt;&gt;until udapl is included.  In addition there are no mca parameters set
</span><br>
<span class="quotelev2">&gt;&gt;in these jobs. As I reported to you before, if I add --mca
</span><br>
<span class="quotelev2">&gt;&gt;btl_udapl_flags=1, the memory problem goes away.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The batch jobs run vmstat before and after the mpirun command. Here's
</span><br>
<span class="quotelev2">&gt;&gt;the appropriate part of the batch output from the 3 tests. The
</span><br>
<span class="quotelev2">&gt;&gt;problem is highlighted by the difference in the 'free' column
</span><br>
<span class="quotelev2">&gt;&gt;reported by vmstat before and after mpirun. You'll notice a drop of
</span><br>
<span class="quotelev2">&gt;&gt;145Mb in the case with 'btl self,sm,tcp,udapl'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Regards,   Glenn.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;======== btl self,tcp
</span><br>
<span class="quotelev2">&gt;&gt;+ vmstat 3 3
</span><br>
<span class="quotelev2">&gt;&gt;   kthr      memory            page            disk          faults      cpu
</span><br>
<span class="quotelev2">&gt;&gt;   r b w   swap  free  re  mf pi po fr de sr s0 s1 s2 s5   in   sy 
</span><br>
<span class="quotelev2">&gt;&gt;cs us sy id
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 6923680 2189060 6 97  5  0  0  0 15  0  0  0  1 3809 369393
</span><br>
<span class="quotelev2">&gt;&gt;2324 27 10 62
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 6803144 1964320 1 22  0  0  0  0  0  0  0  0  0  587  388 
</span><br>
<span class="quotelev2">&gt;&gt;184  0  0 100
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 6803112 1964292 0  0  0  0  0  0  0  0  0  0  0  442  329 
</span><br>
<span class="quotelev2">&gt;&gt;144  0  0 100
</span><br>
<span class="quotelev2">&gt;&gt;+ mpirun --mca btl self,tcp -np 16 ./IMB-MPI1.ct7.studio12 -npmin 16
</span><br>
<span class="quotelev2">&gt;&gt;-map 4x4 -multi 1
</span><br>
<span class="quotelev2">&gt;&gt;+ vmstat 3 3
</span><br>
<span class="quotelev2">&gt;&gt;   kthr      memory            page            disk          faults      cpu
</span><br>
<span class="quotelev2">&gt;&gt;   r b w   swap  free  re  mf pi po fr de sr s0 s1 s2 s5   in   sy 
</span><br>
<span class="quotelev2">&gt;&gt;cs us sy id
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 6780740 2144660 6 98  5  0  0  0 14  0  0  0  1 5145 455335
</span><br>
<span class="quotelev2">&gt;&gt;3147 27 14 59
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 6799020 1959984 3 31  0  0  0  0  0  0  0  0  0  640  358 
</span><br>
<span class="quotelev2">&gt;&gt;268  0  0 100
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 6799012 1959980 0  0  0  0  0  0  0  0  0  0  0  432  305 
</span><br>
<span class="quotelev2">&gt;&gt;128  0  0 100
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;========== btl self,sm,tcp
</span><br>
<span class="quotelev2">&gt;  &gt;+ vmstat 3 3
</span><br>
<span class="quotelev2">&gt;&gt;   kthr      memory            page            disk          faults      cpu
</span><br>
<span class="quotelev2">&gt;&gt;   r b w   swap  free  re  mf pi po fr de sr s0 s1 s2 s5   in   sy 
</span><br>
<span class="quotelev2">&gt;&gt;cs us sy id
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 9038736 2291420 7 107 6  0  0  0 20  0  0  0  1 2445 164773 
</span><br>
<span class="quotelev2">&gt;&gt;1373 28 7 65
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 9084592 2149496 1 22  0  0  0  0  0  0  0  0  0  537  343 
</span><br>
<span class="quotelev2">&gt;&gt;170  0  0 100
</span><br>
<span class="quotelev2">&gt;  &gt;  0 0 0 9084580 2149488 0  0  0  0  0  0  0  0  0  0  0  527  357 
</span><br>
<span class="quotelev1">&gt;168  0  0 100
</span><br>
<span class="quotelev2">&gt;&gt;+ mpirun --mca btl self,sm,tcp -np 16 ./IMB-MPI1.ct7.studio12 -npmin
</span><br>
<span class="quotelev2">&gt;&gt;16 -map 4x4 -multi 1
</span><br>
<span class="quotelev2">&gt;&gt;+ vmstat 3 3
</span><br>
<span class="quotelev2">&gt;&gt;   kthr      memory            page            disk          faults      cpu
</span><br>
<span class="quotelev2">&gt;&gt;   r b w   swap  free  re  mf pi po fr de sr s0 s1 s2 s5   in   sy 
</span><br>
<span class="quotelev2">&gt;&gt;cs us sy id
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 8879504 2239168 7 106 6  0  0  0 18  0  0  0  1 4205 416635
</span><br>
<span class="quotelev2">&gt;&gt;2470 29 12 60
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 9079008 2143824 3 32  0  0  0  0  0  0  0  0  0  648  358 
</span><br>
<span class="quotelev2">&gt;&gt;279  0  0 100
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 9079000 2143820 0  0  0  0  0  0  0  0  0  0  0  433  327 
</span><br>
<span class="quotelev2">&gt;&gt;133  0  0 100
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;========= btl self,sm,tcp,udapl
</span><br>
<span class="quotelev2">&gt;&gt;+ vmstat 3 3
</span><br>
<span class="quotelev2">&gt;&gt;   kthr      memory            page            disk          faults      cpu
</span><br>
<span class="quotelev2">&gt;&gt;   r b w   swap  free  re  mf pi po fr de sr s0 s1 s2 s5   in   sy 
</span><br>
<span class="quotelev2">&gt;&gt;cs us sy id
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 6771044 2134784 6 101 5  0  0  0 14  0  0  0  1 5060 447191
</span><br>
<span class="quotelev2">&gt;&gt;3094 28 14 58
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 6799340 1960104 1 22  0  0  0  0  0  0  0  0  0  538  320 
</span><br>
<span class="quotelev2">&gt;&gt;164  0  0 100
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 6799328 1960096 0  0  0  0  0  0  0  0  0  0  0  439  321 
</span><br>
<span class="quotelev2">&gt;&gt;139  0  0 100
</span><br>
<span class="quotelev2">&gt;&gt;+ mpirun --mca btl self,sm,tcp,udapl -np 16 ./IMB-MPI1.ct7.studio12
</span><br>
<span class="quotelev2">&gt;&gt;-npmin 16 -map 4x4 -multi 1
</span><br>
<span class="quotelev2">&gt;&gt;+ vmstat 3 3
</span><br>
<span class="quotelev2">&gt;&gt;   kthr      memory            page            disk          faults      cpu
</span><br>
<span class="quotelev2">&gt;&gt;   r b w   swap  free  re  mf pi po fr de sr s0 s1 s2 s5   in   sy 
</span><br>
<span class="quotelev2">&gt;&gt;cs us sy id
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 6726824 2120420 6 105 4  0  0  0 13  0  0  0  1 4967 438387
</span><br>
<span class="quotelev2">&gt;&gt;3035 29 14 57
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 6654032 1814788 3 31  0  0  0  0  0  0  0  0  0  656  457 
</span><br>
<span class="quotelev2">&gt;&gt;284  0  0 100
</span><br>
<span class="quotelev2">&gt;&gt;   0 0 0 6654024 1814784 0  0  0  0  0  0  0  0  0  0  0  453  336 
</span><br>
<span class="quotelev2">&gt;&gt;146  0  0 100
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Glenn,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;While I look into the possibility of registered memory not being freed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;could you run your same tests but without shared memory or udapl.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&quot;--mca btl self,tcp&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;If this is successful, i.e. frees memory as expected. The next step
</span><br>
<span class="quotelev3">&gt;&gt;&gt;would be to run including shared memory,  &quot;--mca btl self,sm,tcp&quot;.  If
</span><br>
<span class="quotelev3">&gt;&gt;&gt;this is successful the last step would be to add in udapl, &quot;--mca btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;self,sm,udapl&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-DON
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Glenn Carver wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Just to clarify, the MPI applications exit cleanly. We have our own
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;f90 code (in various configurations) and I'm also testing using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt;Intel's IMB.  If I watch the applications whilst they run, there is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;drop in free memory as our code begins, the free memory then steadily
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;drops as the code runs. When it exits normally, free memory increases
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;but falls short of where it was before the code started. The longer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;we run the code for the bigger the final drop in memory.  Taking the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;machine down to single user mode doesn't help so it's not an issue of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;processes still running. Neither can I find any files still open with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;lsof.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;We installed Sun's clustertools 6 (not based on openmpi) and we don't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;see the same problem.  I'm currently testing whether setting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;btl_udapl_flags=1 makes a difference.  I'm guessing that registered
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;memory is leaking?  We're also trying some mca parameters to turn off
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;features we don't need to see if that makes a difference.  I'll
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;report back on point 2. below and further tests later.  If there's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;specific mca parameters you'd like to see specified let me know?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Thanks, Glenn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Guess I don't see how stale shared memory files would cause swapping to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;occur. Besides, the user provided no indication that the applications were
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;abnormally terminating, which makes it likely we cleaned up the session
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;directories as we should.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;However, we definitely leak memory (i.e., we don't free all 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;memory we malloc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;while supporting execution of an application), so if the OS isn't cleaning
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;up after us, it is quite possible we could be causing the problem as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;described. It would appear exactly as described - a slow leak 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;that gradually
</span><br>
<span class="quotelev1">&gt;  &gt;&gt;&gt;&gt;builds up until the &quot;dead&quot; area was so big that it forces applications to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;swap to find enough room to work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;So I guess we should ask for clarification:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;1. are the Open MPI applications exiting cleanly? Do you see any stale
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&quot;orted&quot; executables still in the process table?
</span><br>
<span class="quotelev1">&gt;  &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;2. can you check the temp directory where we would be operating? This is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;usually your /tmp directory, unless you specified some other 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;location. Look
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;for our session directories - they have a name that includes &quot;openmpi&quot; in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;them. Are they being cleaned up (i.e., removed) when the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;applications exit?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;On 8/6/07 5:53 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Unless there's something weird going on in the Solaris kernel, the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  only memory that we should be leaking after MPI processes exit would
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;  &gt;&gt;&gt; be shared memory files that are [somehow] not getting removed properly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Right?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  On Aug 6, 2007, at 8:15 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Hmmm...just to clarify as I think there may be some confusion here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Orte-clean will kill any outstanding Open MPI daemons (which should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  kill
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  their local apps) and will cleanup their associated temporary file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  If you are having problems with zombied processes or stale daemons,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  this will hopefully help (it isn't perfect, but it helps).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  However, orte-clean will not do anything about releasing memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  that has
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  been &quot;leaked&quot; by Open MPI. We don't have any tools for doing that, I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  afraid.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  On 8/6/07 8:08 AM, &quot;Don Kerr&quot; &lt;Don.Kerr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Glenn,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  With CT7 there is a utility which can be used to clean up left over
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  cruft from stale  MPI processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  % man -M /opt/SUNWhpc/man -s 1 orte-clean
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Achtung: This will remove current running jobs as well. Use of &quot;-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v&quot; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  verbose recommended.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  I would be curious if this helps.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  -DON
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  p.s. orte-clean does not exist in the ompi v1.2 branch, it is in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  trunk but  I think there is an issue with it currently
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  On 8/5/07 6:35 PM, &quot;Glenn Carver&quot; &lt;Glenn.Carver_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  &gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  I'd appreciate some advice and help on this one.  We're having
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  serious problems running parallel applications on our cluster.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;  &gt;&gt;&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;  &gt;&gt;&gt;&gt;&gt; After
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  each batch job finishes, we lose a certain amount of available
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  memory. Additional jobs cause free memory to gradually go down
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  until
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  the machine starts swapping and becomes unusable or hangs.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Taking the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  machine to single user mode doesn't restore the memory, only a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  reboot
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  returns all available memory. This happens on all our nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  We've been doing some testing to try to pin the problems down,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  although we still don't fully know where the problem is coming
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  from.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  We have ruled out our applications (fortran codes); we see the same
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  behaviour with  Intel's IMB. We know it's not a network issue as a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  parallel job running solely on the 4 cores on each node produces
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  same effect. All nodes have been brought up to the very latest OS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  patches and we still see the same problem.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Details: we're running Solaris 10/06, Sun Studio 12, Clustertools 7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  (open-mpi 1.2.1) and Sun Gridengine 6.1. Hardware is Sun X4100/
</span><br>
<span class="quotelev2">&gt;  &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; X4200.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Kernel version: SunOS 5.10 Generic_125101-10 on all nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  I read in the release notes that a number of memory leaks were
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  fixed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  for the 1.2.1 release but none have been noticed since so I'm not
</span><br>
<span class="quotelev2">&gt;  &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sure where the problem might be.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  I'm not sure where that claim came from, but it is certainly not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  true that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  we haven't noticed any leaks since 1.2.1. We know we have quite a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  few memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  leaks in the code base, many of which are small in themselves but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  can add up
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  depending upon exactly what the application does (i.e., which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  code paths it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  travels). Running a simple hello_world app under valgrind will show
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  significant unreleased memory.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  I doubt you will see much, if any, improvement in 1.2.4. There
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  have probably
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  been a few patches applied, but a comprehensive effort to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  eradicate the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  problem has not been made. It is something we are trying to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  cleanup over
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  time, but hasn't been a crash priority as most OS's do a fairly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  good job of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  cleaning up when the app completes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  My next move is to try the very latest release (probably
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;  &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.2.4pre-release). As CT7 is built with sun studio 11 rather
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  than 12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  which we're using, I might also try downgrading. At the moment
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  we're
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  rebooting our cluster nodes every day to keep things going. So any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  suggestions are appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Thanks,        Glenn
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  $ ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  Open MPI: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Open MPI SVN revision: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  Open RTE: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Open RTE SVN revision: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                      OPAL: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         OPAL SVN revision: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                    Prefix: /opt/SUNWhpc/HPC7.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Configured architecture: i386-pc-solaris2.10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             Configured by: root
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             Configured on: Fri Mar 30 13:40:12 EDT 2007
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;            Configure host: burpen-csx10-0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  Built by: root
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  Built on: Fri Mar 30 13:57:25 EDT 2007
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                Built host: burpen-csx10-0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Fortran90 bindings size: trivial
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                C compiler: cc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              C++ compiler: CC
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        Fortran77 compiler: f77
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        Fortran90 compiler: f95
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;  &gt;&gt;&gt;&gt;&gt;&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;  &gt;&gt;&gt;&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;            C++ exceptions: yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;            Thread support: no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;  &gt;&gt;&gt;&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Heterogeneous support: yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   mpirun default --prefix: yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             MCA backtrace: printstack (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev2">&gt;  &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             MCA paffinity: solaris (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                MCA timer: solaris (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;  &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 MCA mpool: udapl (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA btl: udapl (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;  &gt;&gt;&gt;&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA gpr: null (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA ras: localhost (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA rds: resfile (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;  &gt;&gt;&gt;&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;  &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;  &gt;&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   MCA sds: singleton (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3974.php">Corey Putkunz: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>Previous message:</strong> <a href="3972.php">Edgar Gabriel: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3841.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
<!-- nextthread="start" -->
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
