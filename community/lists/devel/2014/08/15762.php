<?
$subject_val = "Re: [OMPI devel] segfault in openib component on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 13:07:06 2014" -->
<!-- isoreceived="20140829170706" -->
<!-- sent="Fri, 29 Aug 2014 10:06:19 -0700" -->
<!-- isosent="20140829170619" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segfault in openib component on trunk" -->
<!-- id="30E1DCF5-A8C4-4924-A853-8F017CDA66D3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3A443DE5-A256-4C90-8524-39DB2375C905_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] segfault in openib component on trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 13:06:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15763.php">Ralph Castain: "Re: [OMPI devel] Contributor License Agreement"</a>
<li><strong>Previous message:</strong> <a href="15761.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs when a task exits with a non zero code"</a>
<li><strong>In reply to:</strong> <a href="15757.php">Shamis, Pavel: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the problem is that the MCA params need to be set at startup, along with the flag indicating where they came from, but also need to be changeable via the MPI_T interface at a later point. So we are tripping over the issues of when to release and replace the param values, ensuring they are properly handled and don't cause the MCA param system to crash upon finalize, etc.
<br>
<p><p>On Aug 29, 2014, at 8:22 AM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I was under impression that mca_tl_openib_tune_endpoint supposed to handle the miss-match between tunings of different devices.
</span><br>
<span class="quotelev1">&gt; Few years ago we did some &quot;extreme&quot; inter-operability testing and ompi handled all cases really well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure if I understand correctly what is the &quot;core&quot; issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Computer Science Research Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2014, at 4:12 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; r32639 and r32642 fixes bugs that do exist in both trunk and v1.8, and they can be considered as independent of the issue that is discussed in this thread and the one you pointed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so imho, they should land v1.8 even if they do not fix the issue we are now discussing here
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/08/29 16:42, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the email thread which sparked the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15329.php">http://www.open-mpi.org/community/lists/devel/2014/07/15329.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I actually tried to apply the original CMR and couldn't get it to work in the 1.8 branch - just kept having problems, so I pushed it off to 1.8.3. I'm leery to accept either of the current CMRs for two reasons: (a) none of the preceding changes is in the 1.8 series yet, and (b) it doesn't sound like we still have a complete solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, I just wanted to point to the original problem that was trying to be addressed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2014, at 10:01 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;&lt;mailto:gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard and Edgar,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i fixed a few bugs (r32639 and r32642)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the bug is trivial to reproduce with any mpi hello world program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca btl openib,self hello_world
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after setting the mca param in the $HOME/.openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt; btl_openib_receive_queues = S,12288,128,64,32:S,65536,128,64,3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; good news is the program does not crash with a glory SIGSEGV any more
</span><br>
<span class="quotelev1">&gt; bad news is the program will (nicely) abort for an incorrect reason :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The Open MPI receive queue configuration for the OpenFabrics devices
</span><br>
<span class="quotelev1">&gt; on two nodes are incompatible, meaning that MPI processes on two
</span><br>
<span class="quotelev1">&gt; specific nodes were unable to communicate with each other.  This
</span><br>
<span class="quotelev1">&gt; generally happens when you are using OpenFabrics devices from
</span><br>
<span class="quotelev1">&gt; different vendors on the same network.  You should be able to use the
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_receive_queues MCA parameter to set a uniform receive
</span><br>
<span class="quotelev1">&gt; queue configuration for all the devices in the MPI job, and therefore
</span><br>
<span class="quotelev1">&gt; be able to run successfully.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Local host:       node0
</span><br>
<span class="quotelev1">&gt; Local adapter:    mlx4_0 (vendor 0x2c9, part ID 4099)
</span><br>
<span class="quotelev1">&gt; Local queues:     S,12288,128,64,32:S,65536,128,64,3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Remote host:      node0
</span><br>
<span class="quotelev1">&gt; Remote adapter:   (vendor 0x2c9, part ID 4099)
</span><br>
<span class="quotelev1">&gt; Remote queues:
</span><br>
<span class="quotelev1">&gt; P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the root cause is the remote host did not send its receive_queues to the
</span><br>
<span class="quotelev1">&gt; local host
</span><br>
<span class="quotelev1">&gt; (and hence the local host believes the remote hosts uses the default value)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the logic was revamped vs v1.8, that is why v1.8 does not have such issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i am still thinking what should be the right fix :
</span><br>
<span class="quotelev1">&gt; - one option is to send the receive queues
</span><br>
<span class="quotelev1">&gt; - an other option would be to differenciate value overrided in
</span><br>
<span class="quotelev1">&gt; mca-params.conf (should be always ok) of value overrided in the .ini
</span><br>
<span class="quotelev1">&gt; (might want to double check local and remote values match)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/08/29 7:02, Pritchard Jr., Howard wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Edgar,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you send me your conf file?  I'll try to reproduce it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe run with --mca btl_base_verbose 20 or something to
</span><br>
<span class="quotelev1">&gt; see what the code that is parsing this field in the conf file
</span><br>
<span class="quotelev1">&gt; is finding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, August 28, 2014 3:40 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] segfault in openib component on trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to add another piece of information that I just found, the segfault only occurs if I have a particular mca parameter set in my mca-params.conf file, namely
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl_openib_receive_queues = S,12288,128,64,32:S,65536,128,64,3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has the syntax for this parameter changed, or should/can I get rid of it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 08/28/2014 04:19 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we are having recently problems running trunk with openib component
</span><br>
<span class="quotelev1">&gt; enabled on one of our clusters. The problem occurs right in the
</span><br>
<span class="quotelev1">&gt; initialization part, here is the stack right before the segfault:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---snip---
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  mca_btl_openib_tune_endpoint (openib_btl=0x762a40,
</span><br>
<span class="quotelev1">&gt; endpoint=0x7d9660) at btl_openib.c:470
</span><br>
<span class="quotelev1">&gt; #1  0x00007f1062f105c4 in mca_btl_openib_add_procs (btl=0x762a40,
</span><br>
<span class="quotelev1">&gt; nprocs=2, procs=0x759be0, peers=0x762440, reachable=0x7fff22dd16f0) at
</span><br>
<span class="quotelev1">&gt; btl_openib.c:1093
</span><br>
<span class="quotelev1">&gt; #2  0x00007f106316102c in mca_bml_r2_add_procs (nprocs=2,
</span><br>
<span class="quotelev1">&gt; procs=0x759be0, reachable=0x7fff22dd16f0) at bml_r2.c:201
</span><br>
<span class="quotelev1">&gt; #3  0x00007f10615c0dd5 in mca_pml_ob1_add_procs (procs=0x70dc00,
</span><br>
<span class="quotelev1">&gt; nprocs=2) at pml_ob1.c:334
</span><br>
<span class="quotelev1">&gt; #4  0x00007f106823ed84 in ompi_mpi_init (argc=1, argv=0x7fff22dd1da8,
</span><br>
<span class="quotelev1">&gt; requested=0, provided=0x7fff22dd184c) at runtime/ompi_mpi_init.c:790
</span><br>
<span class="quotelev1">&gt; #5  0x00007f1068273a2c in MPI_Init (argc=0x7fff22dd188c,
</span><br>
<span class="quotelev1">&gt; argv=0x7fff22dd1880) at init.c:84
</span><br>
<span class="quotelev1">&gt; #6  0x00000000004008e7 in main (argc=1, argv=0x7fff22dd1da8) at
</span><br>
<span class="quotelev1">&gt; hello_world.c:13
</span><br>
<span class="quotelev1">&gt; ---snip---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in line 538 of the file containing the mca_btl_openib_tune_endpoint
</span><br>
<span class="quotelev1">&gt; routine, the strcmp operation fails, because  recv_qps is a NULL pointer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---snip---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if(0 != strcmp(mca_btl_openib_component.receive_queues, recv_qps)) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---snip---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody have an idea on what might be going wrong and how to
</span><br>
<span class="quotelev1">&gt; resolve it? Just to confirm, everything works perfectly with the 1.8
</span><br>
<span class="quotelev1">&gt; series on that very same  cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15746.php">http://www.open-mpi.org/community/lists/devel/2014/08/15746.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15747.php">http://www.open-mpi.org/community/lists/devel/2014/08/15747.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15748.php">http://www.open-mpi.org/community/lists/devel/2014/08/15748.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15749.php">http://www.open-mpi.org/community/lists/devel/2014/08/15749.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15750.php">http://www.open-mpi.org/community/lists/devel/2014/08/15750.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15752.php">http://www.open-mpi.org/community/lists/devel/2014/08/15752.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15757.php">http://www.open-mpi.org/community/lists/devel/2014/08/15757.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15762/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15763.php">Ralph Castain: "Re: [OMPI devel] Contributor License Agreement"</a>
<li><strong>Previous message:</strong> <a href="15761.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs when a task exits with a non zero code"</a>
<li><strong>In reply to:</strong> <a href="15757.php">Shamis, Pavel: "Re: [OMPI devel] segfault in openib component on trunk"</a>
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
