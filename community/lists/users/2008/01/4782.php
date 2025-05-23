<?
$subject_val = "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 10:57:54 2008" -->
<!-- isoreceived="20080104155754" -->
<!-- sent="Fri, 04 Jan 2008 08:57:40 -0700" -->
<!-- isosent="20080104155740" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration" -->
<!-- id="C3A3A584.419C%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AA57C47ACCD04E46B79317EA2CEEBE880C5756_at_fjldmail.fugro-jason.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-04 10:57:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4783.php">Prakash Velayutham: "[OMPI users] getenv issue"</a>
<li><strong>Previous message:</strong> <a href="4781.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4647.php">Elena Zhebel: "[OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/19981.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/19981.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Elena
<br>
<p>I'm copying this to the user list just to correct a mis-statement on my part
<br>
in an earlier message that went there. I had stated that a singleton could
<br>
comm_spawn onto other nodes listed in a hostfile by setting an environmental
<br>
variable that pointed us to the hostfile.
<br>
<p>This is incorrect in the 1.2 code series. That series does not allow
<br>
singletons to read a hostfile at all. Hence, any comm_spawn done by a
<br>
singleton can only launch child processes on the singleton's local host.
<br>
<p>This situation has been corrected for the upcoming 1.3 code series. For the
<br>
1.2 series, though, you will have to do it via an mpirun command line.
<br>
<p>Sorry for the confusion - I sometimes have too many code families to keep
<br>
straight in this old mind!
<br>
<p>Ralph
<br>
<p><p>On 1/4/08 5:10 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for the explanations.
</span><br>
<span class="quotelev1">&gt; But I still do not get it running...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the case 
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 -hostfile my_hostfile -host my_master_host my_master.exe
</span><br>
<span class="quotelev1">&gt; everything works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the case 
</span><br>
<span class="quotelev1">&gt; ./my_master.exe
</span><br>
<span class="quotelev1">&gt; it does not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did:
</span><br>
<span class="quotelev1">&gt; - create my_hostfile and put it in the $HOME/.openmpi/components/
</span><br>
<span class="quotelev1">&gt;   my_hostfile :
</span><br>
<span class="quotelev1">&gt; bollenstreek slots=2 max_slots=3
</span><br>
<span class="quotelev1">&gt; octocore01 slots=8  max_slots=8
</span><br>
<span class="quotelev1">&gt; octocore02 slots=8  max_slots=8
</span><br>
<span class="quotelev1">&gt; clstr000 slots=2 max_slots=3
</span><br>
<span class="quotelev1">&gt; clstr001 slots=2 max_slots=3
</span><br>
<span class="quotelev1">&gt; clstr002 slots=2 max_slots=3
</span><br>
<span class="quotelev1">&gt; clstr003 slots=2 max_slots=3
</span><br>
<span class="quotelev1">&gt; clstr004 slots=2 max_slots=3
</span><br>
<span class="quotelev1">&gt; clstr005 slots=2 max_slots=3
</span><br>
<span class="quotelev1">&gt; clstr006 slots=2 max_slots=3
</span><br>
<span class="quotelev1">&gt; clstr007 slots=2 max_slots=3
</span><br>
<span class="quotelev1">&gt; - setenv OMPI_MCA_rds_hostfile_path my_hostfile (I  put it in .tcshrc and
</span><br>
<span class="quotelev1">&gt; then source .tcshrc)
</span><br>
<span class="quotelev1">&gt; - in my_master.cpp I did
</span><br>
<span class="quotelev1">&gt;   MPI_Info info1;
</span><br>
<span class="quotelev1">&gt;   MPI_Info_create(&amp;info1);
</span><br>
<span class="quotelev1">&gt;   char* hostname =
</span><br>
<span class="quotelev1">&gt; &quot;clstr002,clstr003,clstr005,clstr006,clstr007,octocore01,octocore02&quot;;
</span><br>
<span class="quotelev1">&gt;   MPI_Info_set(info1, &quot;host&quot;, hostname);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   _intercomm = intracomm.Spawn(&quot;./childexe&quot;, argv1, _nProc, info1, 0,
</span><br>
<span class="quotelev1">&gt; MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - After I call the executable, I've got this error message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bollenstreek: &gt; ./my_master
</span><br>
<span class="quotelev1">&gt; number of processes to run: 1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Some of the requested hosts are not included in the current allocation for
</span><br>
<span class="quotelev1">&gt; the application:
</span><br>
<span class="quotelev1">&gt;   ./childexe
</span><br>
<span class="quotelev1">&gt; The requested hosts were:
</span><br>
<span class="quotelev1">&gt;   clstr002,clstr003,clstr005,clstr006,clstr007,octocore01,octocore02
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt; --host specification.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [bollenstreek:21443] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_support_fns.c at line 225
</span><br>
<span class="quotelev1">&gt; [bollenstreek:21443] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev1">&gt; rmaps_rr.c at line 478
</span><br>
<span class="quotelev1">&gt; [bollenstreek:21443] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 210
</span><br>
<span class="quotelev1">&gt; [bollenstreek:21443] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 372
</span><br>
<span class="quotelev1">&gt; [bollenstreek:21443] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev1">&gt; communicator/comm_dyn.c at line 608
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did I miss something?
</span><br>
<span class="quotelev1">&gt; Thanks for help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Elena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Ralph H Castain [mailto:rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, December 18, 2007 3:50 PM
</span><br>
<span class="quotelev1">&gt; To: Elena Zhebel; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Ralph H Castain
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/18/07 7:35 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot! Now it works!
</span><br>
<span class="quotelev2">&gt;&gt; The solution is to use mpirun -n 1 -hostfile my.hosts *.exe and pass
</span><br>
<span class="quotelev1">&gt; MPI_Info
</span><br>
<span class="quotelev2">&gt;&gt; Key to the Spawn function!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One more question: is it necessary to start my &quot;master&quot; program with
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 1 -hostfile my_hostfile -host my_master_host my_master.exe ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, it isn't necessary - assuming that my_master_host is the first host
</span><br>
<span class="quotelev1">&gt; listed in your hostfile! If you are only executing one my_master.exe (i.e.,
</span><br>
<span class="quotelev1">&gt; you gave -n 1 to mpirun), then we will automatically map that process onto
</span><br>
<span class="quotelev1">&gt; the first host in your hostfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want my_master.exe to go on someone other than the first host in the
</span><br>
<span class="quotelev1">&gt; file, then you have to give us the -host option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are there other possibilities for easy start?
</span><br>
<span class="quotelev2">&gt;&gt; I would say just to run ./my_master.exe , but then the master process
</span><br>
<span class="quotelev1">&gt; doesn't
</span><br>
<span class="quotelev2">&gt;&gt; know about the available in the network hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can set the hostfile parameter in your environment instead of on the
</span><br>
<span class="quotelev1">&gt; command line. Just set OMPI_MCA_rds_hostfile_path = my.hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can then just run ./my_master.exe on the host where you want the master
</span><br>
<span class="quotelev1">&gt; to reside - everything should work the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just as an FYI: the name of that environmental variable is going to change
</span><br>
<span class="quotelev1">&gt; in the 1.3 release, but everything will still work the same.
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
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Thanks and regards,
</span><br>
<span class="quotelev2">&gt;&gt; Elena
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph H Castain [mailto:rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, December 17, 2007 5:49 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;; Elena Zhebel
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Ralph H Castain
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 12/17/07 8:19 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for your answer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using OpenMPI 1.2.3. , compiler glibc232, Linux Suse 10.0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My &quot;master&quot; executable runs only on the one local host, then it spawns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;slaves&quot; (with MPI::Intracomm::Spawn).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My question was: how to determine the hosts where these &quot;slaves&quot; will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawned?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You said: &quot;You have to specify all of the hosts that can be used by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the original hostfile&quot;. How can I specify the host file? I can not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the documentation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...sorry about the lack of documentation. I always assumed that the MPI
</span><br>
<span class="quotelev2">&gt;&gt; folks in the project would document such things since it has little to do
</span><br>
<span class="quotelev2">&gt;&gt; with the underlying run-time, but I guess that fell through the cracks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There are two parts to your question:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. how to specify the hosts to be used for the entire job. I believe that
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; somewhat covered here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That FAQ tells you what a hostfile should look like, though you may already
</span><br>
<span class="quotelev2">&gt;&gt; know that. Basically, we require that you list -all- of the nodes that both
</span><br>
<span class="quotelev2">&gt;&gt; your master and slave programs will use.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. how to specify which nodes are available for the master, and which for
</span><br>
<span class="quotelev2">&gt;&gt; the slave.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You would specify the host for your master on the mpirun command line with
</span><br>
<span class="quotelev2">&gt;&gt; something like:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 1 -hostfile my_hostfile -host my_master_host my_master.exe
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This directs Open MPI to map that specified executable on the specified
</span><br>
<span class="quotelev1">&gt; host
</span><br>
<span class="quotelev2">&gt;&gt; - note that my_master_host must have been in my_hostfile.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Inside your master, you would create an MPI_Info key &quot;host&quot; that has a
</span><br>
<span class="quotelev1">&gt; value
</span><br>
<span class="quotelev2">&gt;&gt; consisting of a string &quot;host1,host2,host3&quot; identifying the hosts you want
</span><br>
<span class="quotelev2">&gt;&gt; your slave to execute upon. Those hosts must have been included in
</span><br>
<span class="quotelev2">&gt;&gt; my_hostfile. Include that key in the MPI_Info array passed to your Spawn.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We don't currently support providing a hostfile for the slaves (as opposed
</span><br>
<span class="quotelev2">&gt;&gt; to the host-at-a-time string above). This may become available in a future
</span><br>
<span class="quotelev2">&gt;&gt; release - TBD.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks and regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Elena
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Ralph H Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, December 17, 2007 3:31 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: Ralph H Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] MPI::Intracomm::Spawn and cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/12/07 5:46 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm working on a MPI application where I'm using OpenMPI instead of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPICH.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In my &quot;master&quot; program I call the function MPI::Intracomm::Spawn which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawns
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;slave&quot; processes. It is not clear for me how to spawn the &quot;slave&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; over the network. Currently &quot;master&quot; creates &quot;slaves&quot; on the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; host.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I use 'mpirun --hostfile openmpi.hosts' then processes are spawn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; over
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; network as expected. But now I need to spawn processes over the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; network
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my own executable using MPI::Intracomm::Spawn, how can I achieve it?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure from your description exactly what you are trying to do,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nor in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what environment this is all operating within or what version of Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you are using. Setting aside the environment and version issue, I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guessing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that you are running your executable over some specified set of hosts,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to provide a different hostfile that specifies the hosts to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;slave&quot; processes. Correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If that is correct, then I'm afraid you can't do that in any version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI today. You have to specify all of the hosts that can be used by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the original hostfile. You can then specify a subset of those hosts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used by your original &quot;master&quot; program, and then specify a different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subset
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be used by the &quot;slaves&quot; when calling Spawn.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But the system requires that you tell it -all- of the hosts that are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; going
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be used at the beginning of the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At the moment, there is no plan to remove that requirement, though
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been occasional discussion about doing so at some point in the future.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No
</span><br>
<span class="quotelev3">&gt;&gt;&gt; promises that it will happen, though - managed environments, in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; particular,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently object to the idea of changing the allocation on-the-fly. We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though, make a provision for purely hostfile-based environments (i.e.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unmanaged) at some time in the future.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance for any help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Elena
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4783.php">Prakash Velayutham: "[OMPI users] getenv issue"</a>
<li><strong>Previous message:</strong> <a href="4781.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4647.php">Elena Zhebel: "[OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/19981.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/19981.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
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
