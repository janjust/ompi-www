<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 20:40:52 2007" -->
<!-- isoreceived="20070130014052" -->
<!-- sent="Mon, 29 Jan 2007 20:40:43 -0500" -->
<!-- isosent="20070130014043" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't start more than one process in a node as normal user" -->
<!-- id="4039FE1F-85B5-4EE5-A504-5855C0B37558_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="b62da3030701211817w3b83b1a3r68588ea83a70df06_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-29 20:40:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2558.php">Ralph Castain: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>Previous message:</strong> <a href="2556.php">Jeff Squyres: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>In reply to:</strong> <a href="2521.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2480.php">Brian W. Barrett: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying to this -- if normal users can't  
<br>
create mmaped shared memory files, then our shared memory (&quot;sm&quot;)  
<br>
device will fail.  I'm afraid I don't know much about OpenSSI --  
<br>
perhaps they have some specific restrictions about mmaped files...?
<br>
<p><p>On Jan 21, 2007, at 9:17 PM, eddie168 wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph and Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for the advice. Our cluster setup is pretty &quot;limited&quot;,  
</span><br>
<span class="quotelev1">&gt; it is an OpenSSI cluster with several P3 and P4 machines connected  
</span><br>
<span class="quotelev1">&gt; through Ethernet. So I guess we won't be able to take full speed  
</span><br>
<span class="quotelev1">&gt; advantage of the current OMPI implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far I narrowed down the problem (oh well, kind of solved) to  
</span><br>
<span class="quotelev1">&gt; share memory permission for normal user. Pretty sure the machine  
</span><br>
<span class="quotelev1">&gt; got enough memory since starting two processes works fine for root.  
</span><br>
<span class="quotelev1">&gt; I list the test cases below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** As root
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --mca btl sm --np 1 tut01
</span><br>
<span class="quotelev1">&gt; oceanus:Hello world from 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --mca btl sm --np 2 tut01
</span><br>
<span class="quotelev1">&gt; oceanus:Hello world from 1
</span><br>
<span class="quotelev1">&gt; oceanus:Hello world from 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** As normal user
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --mca btl sm --np 1 tut01
</span><br>
<span class="quotelev1">&gt; oceanus:Hello world from 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --mca btl sm --np 2 tut01
</span><br>
<span class="quotelev1">&gt; [oceanus:126207] mca_common_sm_mmap_init: ftruncate failed with  
</span><br>
<span class="quotelev1">&gt; errno=13
</span><br>
<span class="quotelev1">&gt; [oceanus:126207] mca_mpool_sm_init: unable to create shared memory  
</span><br>
<span class="quotelev1">&gt; mapping (/tmp/openmpi-sessions-eddie_at_localhost_0/default- 
</span><br>
<span class="quotelev1">&gt; universe-126204/1/shared_mem_pool.localhost ).....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ free -m
</span><br>
<span class="quotelev1">&gt;              total       used       free     shared    buffers      
</span><br>
<span class="quotelev1">&gt; cached
</span><br>
<span class="quotelev1">&gt; Mem:           499        491          7          0         
</span><br>
<span class="quotelev1">&gt; 179         37
</span><br>
<span class="quotelev1">&gt; -/+ buffers/cache:        274        224
</span><br>
<span class="quotelev1">&gt; Swap:         1027          0       1027
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ echo &quot;Hello World&quot; &gt; /tmp/eddie.txt | ll /tmp/eddie.txt
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--  1 eddie eddie 12 Jan 22 11:58 /tmp/eddie.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not so sure why normal user can't create shared memory for two  
</span><br>
<span class="quotelev1">&gt; processes, it is very strange.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eddie.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/19/07, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; What that parameter does is turn &quot;off&quot; all of the transports except  
</span><br>
<span class="quotelev1">&gt; tcp &#150; so the problem you're seeing goes away because we no longer  
</span><br>
<span class="quotelev1">&gt; try to create the shared memory file. This will somewhat hurt your  
</span><br>
<span class="quotelev1">&gt; performance, but it will work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, you could use &quot;--mca btl ^sm&quot;, which would allow you  
</span><br>
<span class="quotelev1">&gt; to use whatever high speed interconnects are on your system while  
</span><br>
<span class="quotelev1">&gt; still turning &quot;off&quot; the shared memory file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure why your tmp directory is getting its permissions  
</span><br>
<span class="quotelev1">&gt; wrong. It sounds like there is something in your environment that  
</span><br>
<span class="quotelev1">&gt; is doing something unexpected. You might just write a script and  
</span><br>
<span class="quotelev1">&gt; execute it that creates a file and lists its permissions &#150; would be  
</span><br>
<span class="quotelev1">&gt; interesting to see if the user or access permissions are different  
</span><br>
<span class="quotelev1">&gt; than what you would normally expect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/18/07 8:30 PM, &quot;eddie168&quot; &lt; eddie168+ompi_user_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to answer my own question, after I explicitly specify the &quot;-- 
</span><br>
<span class="quotelev1">&gt; mca btl tcp&quot; parameter, the program works. So I will need to issue  
</span><br>
<span class="quotelev1">&gt; command like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --mca btl tcp -np 2 tut01
</span><br>
<span class="quotelev1">&gt; oceanus:Hello world from 0
</span><br>
<span class="quotelev1">&gt; oceanus:Hello world from 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eddie.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/18/07, eddie168 &lt; eddie168+ompi_user_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Ralph and Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the advice, I have checked the permission to /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; drwxrwxrwt   19 root  root  4096 Jan 18 11:38 tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which I think there shouldn't be any problem to create files there,  
</span><br>
<span class="quotelev1">&gt; so option (a) still not work for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried option (b) which set --tmpdir on command line and run as  
</span><br>
<span class="quotelev1">&gt; normal user, it works for -np 1, however it gives the same error  
</span><br>
<span class="quotelev1">&gt; for -np 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option (c) also tested by setting &quot;OMPI_MCA_tmpdir_base = /home2/ 
</span><br>
<span class="quotelev1">&gt; mpi_tut/tmp&quot; in &quot;~/.openmpi/mca- params.conf&quot;, however error still  
</span><br>
<span class="quotelev1">&gt; occurred.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I included the debug output of what I ran (with IP masked), I  
</span><br>
<span class="quotelev1">&gt; noticed that the optional tmp directory set in the beginning of the  
</span><br>
<span class="quotelev1">&gt; process, however it changed back to &quot;/tmp&quot; after executing orted.  
</span><br>
<span class="quotelev1">&gt; Could the error I got related to SSH setting?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eddie.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [eddie_at_oceanus:~/home2/mpi_tut]$ mpirun -d --tmpdir /home2/mpi_tut/ 
</span><br>
<span class="quotelev1">&gt; tmp -np 2 tut01
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [oceanus:129119]        tmpdir /home2/mpi_tut/tmp
</span><br>
<span class="quotelev1">&gt; [oceanus:129119]        universe default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129119]        user eddie
</span><br>
<span class="quotelev1">&gt; [oceanus:129119]        host oceanus
</span><br>
<span class="quotelev1">&gt; [oceanus:129119]        jobid 0
</span><br>
<span class="quotelev1">&gt; [oceanus:129119]        procid 0
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] procdir: /home2/mpi_tut/tmp/openmpi- sessions- 
</span><br>
<span class="quotelev1">&gt; eddie_at_oceanus_0/default-universe/0/0
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] jobdir: /home2/mpi_tut/tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; eddie_at_oceanus_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] unidir: /home2/mpi_tut/tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; eddie_at_oceanus _0/default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] top: openmpi-sessions-eddie_at_oceanus_0
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] tmp: /home2/mpi_tut/tmp
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] [0,0,0] contact_file /home2/mpi_tut/tmp/openmpi- 
</span><br>
<span class="quotelev1">&gt; sessions-eddie_at_oceanus_0/default-universe/universe- setup.txt
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug  
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 -- 
</span><br>
<span class="quotelev1">&gt; nodename &lt;template&gt; --universe eddie_at_oceanus:default-universe -- 
</span><br>
<span class="quotelev1">&gt; nsreplica &quot;0.0.0;tcp://xxx.xxx.xxx.xxx:52428&quot; --gprreplica &quot;  
</span><br>
<span class="quotelev1">&gt; 0.0.0;tcp://xxx.xxx.xxx.xxx:52428&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: oversubscribed -- setting  
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 1 (1 2)
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: changing to directory /home/eddie
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: executing: orted --debug --bootproxy 1 -- 
</span><br>
<span class="quotelev1">&gt; name 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost -- 
</span><br>
<span class="quotelev1">&gt; universe eddie_at_oceanus:default-universe    
</span><br>
<span class="quotelev1">&gt; &lt;mailto:eddie_at_oceanus:default-universe&gt; --nsreplica &quot;0.0.0;tcp:// 
</span><br>
<span class="quotelev1">&gt; xxx.xxx.xxx.xxx:52428&quot; --gprreplica &quot;0.0.0;tcp://xxx.xxx.xxx.xxx: 
</span><br>
<span class="quotelev1">&gt; 52428&quot; --mpi-call-yield 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [oceanus:129120]        universe default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129120]        user eddie
</span><br>
<span class="quotelev1">&gt; [oceanus:129120]        host localhost
</span><br>
<span class="quotelev1">&gt; [oceanus:129120]        jobid 0
</span><br>
<span class="quotelev1">&gt; [oceanus:129120]        procid 1
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] procdir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe/0/1
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] jobdir: /tmp/openmpi-sessions-eddie_at_localhost _0/ 
</span><br>
<span class="quotelev1">&gt; default-universe/0
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] unidir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] top: openmpi-sessions-eddie_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] [0,1,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [oceanus:129121]        universe default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129121]        user eddie
</span><br>
<span class="quotelev1">&gt; [oceanus:129121]        host localhost
</span><br>
<span class="quotelev1">&gt; [oceanus:129121]        jobid 1
</span><br>
<span class="quotelev1">&gt; [oceanus:129121]        procid 0
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] procdir: /tmp/openmpi- sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe/1/0
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] jobdir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe/1
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] unidir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] top: openmpi-sessions-eddie_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [oceanus:129122] [0,1,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [oceanus:129122]        universe default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129122]        user eddie
</span><br>
<span class="quotelev1">&gt; [oceanus:129122]        host localhost
</span><br>
<span class="quotelev1">&gt; [oceanus:129122]        jobid 1
</span><br>
<span class="quotelev1">&gt; [oceanus:129122]        procid 1
</span><br>
<span class="quotelev1">&gt; [oceanus:129122] procdir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe/1/1
</span><br>
<span class="quotelev1">&gt; [oceanus:129122] jobdir: /tmp/openmpi- sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe/1
</span><br>
<span class="quotelev1">&gt; [oceanus:129122] unidir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129122] top: openmpi-sessions-eddie_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [oceanus:129122] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] spawn: in job_state_callback(jobid = 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] Info: Setting up debugger process table for  
</span><br>
<span class="quotelev1">&gt; applications
</span><br>
<span class="quotelev1">&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_gate = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_acquired_pre_main = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable_size = 2
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, localhost, tut01, 129121)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (1, localhost, tut01, 129122)
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] mca_common_sm_mmap_init: ftruncate failed with  
</span><br>
<span class="quotelev1">&gt; errno=13
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] mca_mpool_sm_init: unable to create shared memory  
</span><br>
<span class="quotelev1">&gt; mapping (/tmp/openmpi-sessions-eddie_at_localhost_0/default-universe/1/ 
</span><br>
<span class="quotelev1">&gt; shared_mem_pool.localhost )
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found proc session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: job session dir not empty -  
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found proc session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found job session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: univ session dir not empty -  
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] orted: job_state_callback(jobid = 1, state =  
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_STATE_TERMINATED)
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: job session dir not empty -  
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found proc session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found job session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found univ session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found top session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [eddie_at_oceanus:~/home2/mpi_tut]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/18/07, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Eddie
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI needs to create a temporary file system &#150; what we call our  
</span><br>
<span class="quotelev1">&gt; &quot;session directory&quot; - where it stores things like the shared memory  
</span><br>
<span class="quotelev1">&gt; file. From this output, it appears that your /tmp directory is  
</span><br>
<span class="quotelev1">&gt; &quot;locked&quot; to root access only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have three options for resolving this problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) you could make /tmp accessible to general users;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) you could use the &#151;tmpdir xxx command line option to point Open  
</span><br>
<span class="quotelev1">&gt; MPI at another directory that is accessible to the user (for  
</span><br>
<span class="quotelev1">&gt; example, you could use a &quot;tmp&quot; directory under the user's home  
</span><br>
<span class="quotelev1">&gt; directory); or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (c) you could set an MCA parameter OMPI_MCA_tmpdir_base to identify  
</span><br>
<span class="quotelev1">&gt; a directory we can use instead of /tmp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If you select options (b) or (c), the only requirement is that  
</span><br>
<span class="quotelev1">&gt; this location must be accessible on every node being used. Let me  
</span><br>
<span class="quotelev1">&gt; be clear on this: the tmp directory must not be NSF mounted and  
</span><br>
<span class="quotelev1">&gt; therefore shared across all nodes. However, each node must be able  
</span><br>
<span class="quotelev1">&gt; to access a location of the given name &#150; that location should be  
</span><br>
<span class="quotelev1">&gt; strictly local to each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/17/07 12:25 AM, &quot;eddie168&quot; &lt; eddie168+ompi_user_at_[hidden]  
</span><br>
<span class="quotelev1">&gt; &lt;mailto:eddie168+ompi_user_at_[hidden]&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have recently installed OpenMPI 1.1.2 on a OpenSSI cluster  
</span><br>
<span class="quotelev1">&gt; running Fedora core 3. I tested a simple hello world mpi program  
</span><br>
<span class="quotelev1">&gt; (attached) and it runs ok as root. However, if I run the same  
</span><br>
<span class="quotelev1">&gt; program under normal user, it gives the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [eddie_at_oceanus:~/home2/mpi_tut]$ mpirun -np 2 tut01
</span><br>
<span class="quotelev1">&gt; [oceanus:125089] mca_common_sm_mmap_init: ftruncate failed with  
</span><br>
<span class="quotelev1">&gt; errno=13
</span><br>
<span class="quotelev1">&gt; [oceanus:125089] mca_mpool_sm_init: unable to create shared memory  
</span><br>
<span class="quotelev1">&gt; mapping ( /tmp/openmpi- sessions-eddie_at_localhost_0/default-universe/ 
</span><br>
<span class="quotelev1">&gt; 1/shared_mem_pool.localhost)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [eddie_at_oceanus:~/home2/mpi_tut]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I need to give certain permission to the user in order to  
</span><br>
<span class="quotelev1">&gt; oversubscribe processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eddie.
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2558.php">Ralph Castain: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>Previous message:</strong> <a href="2556.php">Jeff Squyres: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>In reply to:</strong> <a href="2521.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2480.php">Brian W. Barrett: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
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
