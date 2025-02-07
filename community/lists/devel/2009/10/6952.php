<?
$subject_val = "Re: [OMPI devel] binding with MCA parameters: broken or user error?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 10 00:36:43 2009" -->
<!-- isoreceived="20091010043643" -->
<!-- sent="Fri, 09 Oct 2009 21:37:45 -0700" -->
<!-- isosent="20091010043745" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] binding with MCA parameters: broken or user error?" -->
<!-- id="4AD00F99.9020800_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="69846BD0-F6E0-44B4-B6EF-D48F62C439C3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] binding with MCA parameters: broken or user error?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-10 00:37:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6953.php">Jeff Squyres: "[OMPI devel] Open MPI v1.5 branch created"</a>
<li><strong>Previous message:</strong> <a href="6951.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>In reply to:</strong> <a href="6951.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6954.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Try adding -display-devel-map to your cmd line so you can see what  
</span><br>
<span class="quotelev1">&gt; OMPI thinks the binding and mapping policy is set to - that'll tell  
</span><br>
<span class="quotelev1">&gt; you if the problem is in the mapping or in the daemon binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, it might help to know something about this node - like how many  
</span><br>
<span class="quotelev1">&gt; sockets, cores/socket.
</span><br>
<p>Okay.  I added -display-devel-map, which tells you the socket/core 
<br>
information you're looking for.  Beyond that, I don't know how to read 
<br>
the output
<br>
<p>
<br><p>
# PROBLEM 1:  no binding (socket variant)
<br>
<p>% mpirun -display-devel-map -np 5 --mca rmaps_base_schedule_policy socket --mca orte_process_binding socket -report-bindings hostname
<br>
<p>&nbsp;Map generated by mapping policy: 0400
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Npernode: 0	Oversubscribe allowed: TRUE	CPU Lists: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num new daemons: 0	New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num nodes: 1
<br>
<p>&nbsp;Data for node: Name: saem9	 	Launch id: -1	Arch: ffca0200	State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num boards: 1	Num sockets/board: 2	Num cores/socket: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[11629,0],0]	Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1	Slots in use: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1	Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 5	Next node_rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11629,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 0	Node rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11629,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 1	Node rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11629,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 2	Node rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11629,1],3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 3	Node rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11629,1],4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 4	Node rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
<p># PROBLEM 1:  no binding (core variant)
<br>
<p>% mpirun -display-devel-map -np 5 --mca rmaps_base_schedule_policy core --mca orte_process_binding core -report-bindings hostname
<br>
<p>&nbsp;Map generated by mapping policy: 0400
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Npernode: 0	Oversubscribe allowed: TRUE	CPU Lists: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num new daemons: 0	New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num nodes: 1
<br>
<p>&nbsp;Data for node: Name: saem9	 	Launch id: -1	Arch: ffca0200	State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num boards: 1	Num sockets/board: 2	Num cores/socket: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[11639,0],0]	Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1	Slots in use: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1	Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 5	Next node_rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11639,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 0	Node rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11639,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 1	Node rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11639,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 2	Node rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11639,1],3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 3	Node rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11639,1],4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 4	Node rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
<p>% setenv OMPI_MCA_rmaps_base_schedule_policy socket
<br>
% setenv OMPI_MCA_orte_process_binding socket
<br>
<p># check envvars with ompi_info
<br>
% ompi_info -a | grep rmaps_base_schedule_policy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot; (current value: &quot;socket&quot;, data source: environment)
<br>
% ompi_info -a | grep orte_process_binding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA orte: parameter &quot;orte_process_binding&quot; (current value: &quot;socket&quot;, data source: environment)
<br>
<p># PROBLEM 2: binding is not alternating by socket
<br>
<p>% mpirun -display-devel-map -np 5 -report-bindings hostname
<br>
<p>&nbsp;Map generated by mapping policy: 0404
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Npernode: 0	Oversubscribe allowed: TRUE	CPU Lists: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num new daemons: 0	New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num nodes: 1
<br>
<p>&nbsp;Data for node: Name: saem9	 	Launch id: -1	Arch: ffca0200	State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num boards: 1	Num sockets/board: 2	Num cores/socket: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[11645,0],0]	Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1	Slots in use: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1	Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 5	Next node_rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11645,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 0	Node rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11645,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 1	Node rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11645,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 2	Node rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11645,1],3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 3	Node rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[11645,1],4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 4	Node rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0	App_context: 0	Slot list: NULL
<br>
[saem9:01243] [[11645,0],0] odls:default:fork binding child [[11645,1],0] to socket 0 cpus 000f
<br>
[saem9:01243] [[11645,0],0] odls:default:fork binding child [[11645,1],1] to socket 0 cpus 000f
<br>
[saem9:01243] [[11645,0],0] odls:default:fork binding child [[11645,1],2] to socket 0 cpus 000f
<br>
[saem9:01243] [[11645,0],0] odls:default:fork binding child [[11645,1],3] to socket 0 cpus 000f
<br>
[saem9:01243] [[11645,0],0] odls:default:fork binding child [[11645,1],4] to socket 1 cpus 00f0
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6953.php">Jeff Squyres: "[OMPI devel] Open MPI v1.5 branch created"</a>
<li><strong>Previous message:</strong> <a href="6951.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>In reply to:</strong> <a href="6951.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6954.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
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
