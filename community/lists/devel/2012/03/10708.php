<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 12 06:09:08 2012" -->
<!-- isoreceived="20120312100908" -->
<!-- sent="Mon, 12 Mar 2012 11:09:01 +0100" -->
<!-- isosent="20120312100901" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201203121109.01542.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BC7F29D1F42FD14EAE1EDCA5DC845AE209C485D2_at_sausexdag02.amd.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] poor btl sm latency<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-12 06:09:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10709.php">Chris Samuel: "[OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults"</a>
<li><strong>Previous message:</strong> <a href="10707.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10401.php">Matthias Jurenz: "[OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10715.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10715.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's a SUSE Linux Enterprise Server 11 Service Pack 1 with kernel version 
<br>
2.6.32.49-0.3-default.
<br>
<p>Matthias
<br>
<p>On Friday 09 March 2012 16:36:41 you wrote:
<br>
<span class="quotelev1">&gt; What OS are you using ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Joshua
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: Matthias Jurenz [mailto:matthias.jurenz_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, March 09, 2012 08:50 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Mora, Joshua
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] poor btl sm latency
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just made an interesting observation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When binding the processes to two neighboring cores (L2 sharing) NetPIPE
</span><br>
<span class="quotelev1">&gt; shows *sometimes* pretty good results: ~0.5us
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self -np 1 hwloc-bind -v core:0 ./NPmpi_ompi1.5.5 -u 4
</span><br>
<span class="quotelev1">&gt; -n 100000 -p 0 : -np 1 hwloc-bind -v core:1 ./NPmpi_ompi1.5.5 -u 4 -n
</span><br>
<span class="quotelev1">&gt; 100000 -p 0 using object #0 depth 6 below cpuset 0xffffffff,0xffffffff
</span><br>
<span class="quotelev1">&gt; using object #1 depth 6 below cpuset 0xffffffff,0xffffffff
</span><br>
<span class="quotelev1">&gt; adding 0x00000001 to 0x0
</span><br>
<span class="quotelev1">&gt; adding 0x00000001 to 0x0
</span><br>
<span class="quotelev1">&gt; assuming the command starts at ./NPmpi_ompi1.5.5
</span><br>
<span class="quotelev1">&gt; binding on cpu set 0x00000001
</span><br>
<span class="quotelev1">&gt; adding 0x00000002 to 0x0
</span><br>
<span class="quotelev1">&gt; adding 0x00000002 to 0x0
</span><br>
<span class="quotelev1">&gt; assuming the command starts at ./NPmpi_ompi1.5.5
</span><br>
<span class="quotelev1">&gt; binding on cpu set 0x00000002
</span><br>
<span class="quotelev1">&gt; Using no perturbations
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0: n035
</span><br>
<span class="quotelev1">&gt; Using no perturbations
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1: n035
</span><br>
<span class="quotelev1">&gt; Now starting the main loop
</span><br>
<span class="quotelev1">&gt;   0:       1 bytes 100000 times --&gt;      6.01 Mbps in       1.27 usec
</span><br>
<span class="quotelev1">&gt;   1:       2 bytes 100000 times --&gt;     12.04 Mbps in       1.27 usec
</span><br>
<span class="quotelev1">&gt;   2:       3 bytes 100000 times --&gt;     18.07 Mbps in       1.27 usec
</span><br>
<span class="quotelev1">&gt;   3:       4 bytes 100000 times --&gt;     24.13 Mbps in       1.26 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self -np 1 hwloc-bind -v core:0 ./NPmpi_ompi1.5.5 -u 4
</span><br>
<span class="quotelev1">&gt; -n 100000 -p 0 : -np 1 hwloc-bind -v core:1 ./NPmpi_ompi1.5.5 -u 4 -n
</span><br>
<span class="quotelev1">&gt; 100000 -p 0 using object #0 depth 6 below cpuset 0xffffffff,0xffffffff
</span><br>
<span class="quotelev1">&gt; adding 0x00000001 to 0x0
</span><br>
<span class="quotelev1">&gt; adding 0x00000001 to 0x0
</span><br>
<span class="quotelev1">&gt; assuming the command starts at ./NPmpi_ompi1.5.5
</span><br>
<span class="quotelev1">&gt; binding on cpu set 0x00000001
</span><br>
<span class="quotelev1">&gt; using object #1 depth 6 below cpuset 0xffffffff,0xffffffff
</span><br>
<span class="quotelev1">&gt; adding 0x00000002 to 0x0
</span><br>
<span class="quotelev1">&gt; adding 0x00000002 to 0x0
</span><br>
<span class="quotelev1">&gt; assuming the command starts at ./NPmpi_ompi1.5.5
</span><br>
<span class="quotelev1">&gt; binding on cpu set 0x00000002
</span><br>
<span class="quotelev1">&gt; Using no perturbations
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0: n035
</span><br>
<span class="quotelev1">&gt; Using no perturbations
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1: n035
</span><br>
<span class="quotelev1">&gt; Now starting the main loop
</span><br>
<span class="quotelev1">&gt;   0:       1 bytes 100000 times --&gt;     12.96 Mbps in       0.59 usec
</span><br>
<span class="quotelev1">&gt;   1:       2 bytes 100000 times --&gt;     25.78 Mbps in       0.59 usec
</span><br>
<span class="quotelev1">&gt;   2:       3 bytes 100000 times --&gt;     38.62 Mbps in       0.59 usec
</span><br>
<span class="quotelev1">&gt;   3:       4 bytes 100000 times --&gt;     52.88 Mbps in       0.58 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can reproduce that approximately every tenth run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When binding the processes for exclusive L2 caches (e.g. core 0 and 2) I
</span><br>
<span class="quotelev1">&gt; get constant latencies ~1.1us
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Monday 05 March 2012 09:52:39 Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Here the SM BTL parameters:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ ompi_info --param btl sm
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &lt;0&gt;, data source:
</span><br>
<span class="quotelev2">&gt; &gt; default value) Verbosity level of the BTL framework
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl&quot; (current value: &lt;self,sm,openib&gt;, data source:
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev2">&gt; &gt; [/sw/atlas/libraries/openmpi/1.5.5rc3/x86_64/etc/openmpi-mca-params.conf]
</span><br>
<span class="quotelev2">&gt; &gt; ) Default selection set of components for the btl framework (&lt;none&gt; means
</span><br>
<span class="quotelev2">&gt; &gt; use all components that can be found)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: information &quot;btl_sm_have_knem_support&quot; (value: &lt;1&gt;, data source:
</span><br>
<span class="quotelev2">&gt; &gt; default value) Whether this component supports the knem Linux kernel
</span><br>
<span class="quotelev2">&gt; &gt; module or not
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_use_knem&quot; (current value: &lt;-1&gt;, data source:
</span><br>
<span class="quotelev2">&gt; &gt; default value) Whether knem support is desired or not (negative = try to
</span><br>
<span class="quotelev2">&gt; &gt; enable knem support, but continue even if it is not available, 0 = do not
</span><br>
<span class="quotelev2">&gt; &gt; enable knem support, positive = try to enable knem support and fail if it
</span><br>
<span class="quotelev2">&gt; &gt; is not available)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_knem_dma_min&quot; (current value: &lt;0&gt;, data
</span><br>
<span class="quotelev2">&gt; &gt; source: default value) Minimum message size (in bytes) to use the knem
</span><br>
<span class="quotelev2">&gt; &gt; DMA mode; ignored if knem does not support DMA mode (0 = do not use the
</span><br>
<span class="quotelev2">&gt; &gt; knem DMA mode) MCA btl: parameter &quot;btl_sm_knem_max_simultaneous&quot;
</span><br>
<span class="quotelev2">&gt; &gt; (current value: &lt;0&gt;, data source: default value) Max number of
</span><br>
<span class="quotelev2">&gt; &gt; simultaneous ongoing knem operations to support (0 = do everything
</span><br>
<span class="quotelev2">&gt; &gt; synchronously, which probably gives the best large message latency; &gt;0
</span><br>
<span class="quotelev2">&gt; &gt; means to do all operations asynchronously, which supports better overlap
</span><br>
<span class="quotelev2">&gt; &gt; for simultaneous large message sends)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value: &lt;8&gt;, data
</span><br>
<span class="quotelev2">&gt; &gt; source: default value)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current value: &lt;-1&gt;, data
</span><br>
<span class="quotelev2">&gt; &gt; source: default value)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current value: &lt;64&gt;, data
</span><br>
<span class="quotelev2">&gt; &gt; source: default value)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value: &lt;-1&gt;, data source:
</span><br>
<span class="quotelev2">&gt; &gt; default value)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &lt;sm&gt;, data source:
</span><br>
<span class="quotelev2">&gt; &gt; default value)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_fifo_size&quot; (current value: &lt;4096&gt;, data
</span><br>
<span class="quotelev2">&gt; &gt; source: default value)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: &lt;1&gt;, data source:
</span><br>
<span class="quotelev2">&gt; &gt; default value)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_fifo_lazy_free&quot; (current value: &lt;120&gt;, data
</span><br>
<span class="quotelev2">&gt; &gt; source: default value)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current value: &lt;0&gt;, data
</span><br>
<span class="quotelev2">&gt; &gt; source: default value)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value: &lt;65535&gt;, data
</span><br>
<span class="quotelev2">&gt; &gt; source: default value) BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_flags&quot; (current value: &lt;5&gt;, data source:
</span><br>
<span class="quotelev2">&gt; &gt; default value) BTL bit flags (general flags: SEND=1, PUT=2, GET=4,
</span><br>
<span class="quotelev2">&gt; &gt; SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used
</span><br>
<span class="quotelev2">&gt; &gt; by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32,
</span><br>
<span class="quotelev2">&gt; &gt; RDMA_COMPLETION=128; flags only used by the &quot;bfo&quot; PML (ignored by
</span><br>
<span class="quotelev2">&gt; &gt; others): FAILOVER_SUPPORT=512) MCA btl: parameter
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_sm_rndv_eager_limit&quot; (current value: &lt;4096&gt;, data source: default
</span><br>
<span class="quotelev2">&gt; &gt; value) Size (in bytes) of &quot;phase 1&quot; fragment sent for all large messages
</span><br>
<span class="quotelev2">&gt; &gt; (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value: &lt;4096&gt;, data
</span><br>
<span class="quotelev2">&gt; &gt; source: default value) Maximum size (in bytes) of &quot;short&quot; messages (must
</span><br>
<span class="quotelev2">&gt; &gt; be &gt;= 1). MCA btl: parameter &quot;btl_sm_max_send_size&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;32768&gt;, data source: default value) Maximum size (in bytes) of a single
</span><br>
<span class="quotelev2">&gt; &gt; &quot;phase 2&quot; fragment of a long message when using the pipeline protocol
</span><br>
<span class="quotelev2">&gt; &gt; (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_bandwidth&quot; (current value: &lt;9000&gt;, data
</span><br>
<span class="quotelev2">&gt; &gt; source: default value) Approximate maximum bandwidth of interconnect(0 =
</span><br>
<span class="quotelev2">&gt; &gt; auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 =
</span><br>
<span class="quotelev2">&gt; &gt; bandwidth in Mbps)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_latency&quot; (current value: &lt;1&gt;, data source:
</span><br>
<span class="quotelev2">&gt; &gt; default value) Approximate latency of interconnect (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_sm_priority&quot; (current value: &lt;0&gt;, data source:
</span><br>
<span class="quotelev2">&gt; &gt; default value)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value: &lt;1&gt;,
</span><br>
<span class="quotelev2">&gt; &gt; data source: default value) This parameter is used to turn on warning
</span><br>
<span class="quotelev2">&gt; &gt; messages when certain NICs are not used
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Friday 02 March 2012 16:23:32 George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Please do a &quot;ompi_info --param btl sm&quot; on your environment. The
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lazy_free direct the internals of the SM BTL not to release the memory
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fragments used to communicate until the lazy limit is reached. The
</span><br>
<span class="quotelev3">&gt; &gt; &gt; default value was deemed as reasonable a while back when the number of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; default fragments was large. Lately there were some patches to reduce
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the memory footprint of the SM BTL and these might have lowered the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; available fragments to a limit where the default value for the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lazy_free is now too large.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   george.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mar 2, 2012, at 10:08 , Matthias Jurenz wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; In thanks to the OTPO tool, I figured out that setting the MCA
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; parameter btl_sm_fifo_lazy_free to 1 (default is 120) improves the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; latency significantly: 0,88&#181;s
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; But somehow I get the feeling that this doesn't eliminate the actual
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; problem...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Matthias
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Friday 02 March 2012 15:37:03 Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; On Friday 02 March 2012 14:58:45 Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Ok.  Good that there's no oversubscription bug, at least.  :-)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Did you see my off-list mail to you yesterday about building with
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; an external copy of hwloc 1.4 to see if that helps?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Yes, I did - I answered as well. Our mail server seems to be
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; something busy today...
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Just for the record: Using hwloc-1.4 makes no difference.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Matthias
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; On Mar 2, 2012, at 8:26 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; To exclude a possible bug within the LSF component, I rebuilt Open
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; MPI without support for LSF (--without-lsf).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; -&gt; It makes no difference - the latency is still bad: ~1.1us.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; On Friday 02 March 2012 13:50:13 Matthias Jurenz wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; SORRY, it was obviously a big mistake by me. :-(
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Open MPI 1.5.5 was built with LSF support, so when starting an
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; LSF job it's necessary to request at least the number of
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; tasks/cores as used for the subsequent mpirun command. That was
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; not the case - I forgot the bsub's '-n' option to specify the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; number of task, so only *one* task/core was requested.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Open MPI 1.4.5 was built *without* LSF support, so the supposed
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; misbehavior could not happen with it.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; In short, there is no bug in Open MPI 1.5.x regarding to the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; detection of oversubscription. Sorry for any confusion!
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; On Tuesday 28 February 2012 13:36:56 Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; When using Open MPI v1.4.5 I get ~1.1us. That's the same result
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; as I get with Open MPI v1.5.x using mpi_yield_when_idle=0. So I
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; think there is a bug in Open MPI (v1.5.4 and v1.5.5rc2)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; regarding to the automatic performance mode selection.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; When enabling the degraded performance mode for Open MPI 1.4.5
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; (mpi_yield_when_idle=1) I get ~1.8us latencies.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; On Tuesday 28 February 2012 06:20:28 Christopher Samuel wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On 13/02/12 22:11, Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you have any idea? Please help!
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you see the same bad latency in the old branch (1.4.5) ?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cheers,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10709.php">Chris Samuel: "[OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults"</a>
<li><strong>Previous message:</strong> <a href="10707.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10401.php">Matthias Jurenz: "[OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10715.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10715.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
